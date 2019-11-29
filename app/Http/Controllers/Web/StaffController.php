<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Menu;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Bill;
use App\Models\Bill_menu;
use App\Models\Bill_promotion;
use App\Models\Branch_product;
use App\Models\Vendor_product;
use App\Models\Order_product;
use App\Models\Order_has_product;
use App\Models\Receive_product;
use App\Models\Recieve_and_product;
use Carbon\Carbon;

class StaffController extends Controller
{
    //
    public function addCustomer(Request $req){
        $obj = new Customer();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return redirect()->back();
    }

    public function addOrderProduct(Request $req){
        $obj_session = $req->session()->get('login');
        $branch_id = $obj_session->branch_id;

        $obj_order_product = $this->addToOrderProduct($req);
        $obj_order_product_id = $obj_order_product[0];
        $obj_order_product_qty = $obj_order_product[1];
        
        $obj_product = array();
        for ($i=0; $i < sizeof($req->vendorproduct_id); $i++) {
            array_push($obj_product, Vendor_product::getProductID($req->vendorproduct_id[$i]));
        }
        $this->addToOrderHasProduct($obj_order_product_id, $obj_product, $req->product_qty);

        $obj_receive_product = $this->addToReceiveProduct($obj_order_product_id, $branch_id, $obj_order_product_qty);
        
        $this->addToReceiveAndProduct($obj_receive_product->id, $obj_receive_product->order_product_id);
    }

    private function addToReceiveAndProduct($receive_product_id, $order_product_id){
        $obj_receive_product = Receive_product::getOrderProduct($order_product_id);
        for ($i=0; $i < sizeof($obj_receive_product); $i++) { 
            $obj = new Recieve_and_product();
            $obj->product_id = $obj_receive_product[$i]->product_id;
            $obj->receive_product_id = $receive_product_id;
            $obj->qty = $obj_receive_product[$i]->qty;
            $obj->save();
        }
    }

    private function addToReceiveProduct($order_product_id, $branch_id, $qty){
        $obj = new Receive_product();
        $obj->order_product_id = $order_product_id;
        $obj->branch_id = $branch_id;
        $obj->qty = $qty;
        $obj->save();
        return $obj;
    }

    private function addToOrderHasProduct($order_product_id, $obj_product, $qty){
        for ($i=0; $i < sizeof($obj_product); $i++) { 
            $obj = new Order_has_product();
            $obj->order_product_id = $order_product_id;
            $obj->product_id = $obj_product[$i]->id;
            $obj->qty = $qty[$i];
            $obj->save();
        }
    }

    private function addToOrderProduct($req){
        $obj_session = $req->session()->get('login');
        $branch_id = $obj_session->branch_id;
        $user_id = $obj_session->id;
        $vendor_id = Vendor_product::getVendorID($req->vendorproduct_id[0]);
        $vendor_price = array();
        $sum_price = 0;
        $obj_product = array();
        $sum_qty = 0;

        for ($i=0; $i < sizeof($req->vendorproduct_id); $i++) {
            array_push($obj_product, Vendor_product::getProductID($req->vendorproduct_id[$i]));
            $sum_qty += $req->product_qty[$i];
            $sum_price += $req->product_qty[$i] * (int)Vendor_product::getPriceByID($req->vendorproduct_id[$i]);
        }

        $obj_order_product = new Order_product();
        $obj_order_product->user_id = $user_id;
        $obj_order_product->branch_id = $branch_id;
        $obj_order_product->vendor_id = $vendor_id;
        $obj_order_product->product_qty = $sum_qty;
        $obj_order_product->prices = $sum_price;
        $obj_order_product->status = 0;
        $obj_order_product->save();
        return [$obj_order_product->id, $obj_order_product->product_qty];
    }

    public function viewcustomer(Request $req){
        return view('pages.staff.addcustomer');
    }

    public function viewmenu(Request $req){
        $menu = Menu::all();
        return view('pages.staff.addmenu',[
            "menu" => $menu
        ]);
    }
    public function addBill(Request $req){

        $obj = $req->session()->get('login');
        $bills = new Bill();
        $bills->user_id	= $obj->id;
        $bills->branch_id = $obj->branch_id;
         
        if($req->phone != null){
            $customer = Customer::Where('phone_number',$req->phone)->first();
            $bills->customer_id = $customer->id;
        }else{
            $bills->customer_id = null;
        }
        $bills->qty_list = array_sum($req->qty);
        $sum = 0;
        foreach ($req['menu'] as $value) {
            $sum += Menu::priceById($value); 
        }
        $bills->sum_prices = $sum;
        dd($bills->sum_prices);
        $bills->save();
        
        foreach ($req['menu'] as $key => $value) {
            $bill_menu = new Bill_menu();
            $bill_menu->menu_id = $value;
            $bill_menu->bill_id = $bills->id;
            $bill_menu->qty_menu = $req->qty[$key];
            $bill_menu->save();
        }

        if($req->promotion != null){
            $pro = Promotion::selectById($req->promotion);
            if($pro->end > Carbon::today()){
                $pro_bill = new Bill_promotion;
                $pro_bill->promotion_id = $pro->id;
                $pro_bill->bill_id = $bills->id;
                $pro_bill->save();
            }
        }

        return view('pages.staff.bill');
    }

    public function viewpromotion(Request $req){
        return view('pages.staff.addpromotion');
    }

    public function viewbill(Request $req){
        return view('pages.staff.bill');
    }

    public function viewclaim(Request $req){
        return view('pages.staff.claim');
    }

    public function vieworderproduct(Request $req){
        $VP= Vendor_product::all();
        return view('pages.staff.orderproduct',[
            "vendor" => $VP
        ]);
    }

    public function viewreceiveclaim(Request $req){
        return view('pages.staff.receiveclaim');
    }

    public function viewreceiveproduct(Request $req){
        return view('pages.staff.receiveproduct');
    }

    public function viewshowstock(Request $req){
        return view('pages.staff.showstock');
    }

    public function viewhome(Request $req){
        $obj = $req->session()->get('login');
        return view('pages.staff.homecustomer',[
            "userlogin" => $obj,
            "position" => "Staff"
        ]);
    }
}
