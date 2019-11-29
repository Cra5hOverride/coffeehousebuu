<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Branch;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Menu;
use App\Models\Menu_product;
use App\Models\Promotion;
use App\Models\Attend;
use App\Models\Salary_slip;
use App\Models\Take_leave;
use App\Models\Product;
use App\Models\Branch_product;
use App\Models\Vendor_product;
use Carbon\Carbon;



class ManagerController extends Controller
{

    public function addUser(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->password = Hash::make($req['password']);
        $obj->position = 2;
        $obj->save();
        return redirect()->back();
    }


    public function addPromotion(Request $req){
        $obj = new Promotion();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return redirect()->back();
    }

    public function addVendor(Request $req){
        $obj = new Vendor();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->status = 1;
        $obj->save();
        return redirect()->back();
    }

    public function addTakeleave(Request $req){
        $obj = new Take_leave();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return redirect()->back();
    }

    public function viewDailystock(Request $req){
        return view('pages.manager.dailystock');
    }

    
    public function viewAddstaff(Request $req){
        $obj = $req->session()->get('login');
        $obj_staffs = User::selectstaffall()
                            ->Where('branch_id',$obj->branch_id);
        $obj_branch = Branch::all()->Where('id',$obj->branch_id);
        // dd($obj_staffs);
        return view('pages.manager.addstaff',[
            "staffs" => $obj_staffs,
            "branchs" => $obj_branch
        ]);
    }

    
    public function viewHomemanager(Request $req){
        $obj = $req->session()->get('login');
        return view('pages.manager.homemanager',[
            "userlogin" => $obj,
            "position" => "Manager"
        ]);
    }

    
    public function viewMenu(Request $req){
        $obj = $req->session()->get('login');
        $menu = Menu::all();
        $BP = Branch_product::all()->Where('branch_id',$obj->branch_id);
        return view('pages.manager.menu',[
            "menu" => $menu,
            "BP" => $BP 
        ]);
    }

    public function addMenu(Request $req){
        // dd($req);
        $menu = new Menu();
        $menu->menus_name = $req->menu;
        $menu->prices = $req->price;
        $menu->status = 1;
        $menu->save();
        $menu = Menu::Where('menus_name', $req['menu'])->first();
        foreach ($req['product_name'] as $key => $value) {
            $product = Product::Where('product_name', $value)->first();
            $menu_pro = new Menu_product();
            $menu_pro->menu_id = $menu->id;
            $menu_pro->product_id = $product->id;
            $menu_pro->product_qty = $req->product_qty[$key];
            $menu_pro->save();
        }
        return redirect()->back();
    }
    public function delMenu($ID){
        Menu::delById($ID);
        return redirect()->back();
    }


    
    public function viewPromotion(Request $req){
        $promotion = Promotion::all();
        return view('pages.manager.promotion',[
            "promotion" => $promotion
        ]);
    }

    
    public function viewSalary(Request $req){
        $obj = $req->session()->get('login');
        $staff = User::all()
                      ->WhereIn('position', [1,2])
                      ->Where('branch_id',$obj->branch_id);

        return view('pages.manager.salary',[
            "staff" => $staff
        ]);
    }

    public function addSalary($ID){
        $salary = Salary_slip::where('user_id', $ID)
                              ->whereMonth('created_at', Carbon::today()->month)->get();
        if($salary->count() < 1){
            $salary = new Salary_slip();
            $salary->user_id = $ID;
            $salary->status = 1;
            $salary->save();
            return redirect()->back();
        }

        return redirect()->back() ->with('alert', 'จ่ายเงินเดือนแล้ว');
    }

     
    public function viewTakeleave(Request $req){
        $obj = $req->session()->get('login');
        $staff = User::all()
                      ->Where('position', 2)
                      ->Where('branch_id',$obj->branch_id);
                      
        $obj_TL = Take_leave::getTakeleave($staff);
        return view('pages.manager.takeleave',[
            "TL" => $obj_TL,
            "staff" => $staff
        ]);
    }

    public function viewVendor(Request $req){
        $obj_vendors = Vendor::selectAll();

        return view('pages.manager.vendor',[
            "vendors" => $obj_vendors
        ]);
    }

    public function viewWork(Request $req){
        $obj = $req->session()->get('login');
        $staff = User::all()
                      ->WhereIn('position', [1,2])
                      ->Where('branch_id',$obj->branch_id);
        return view('pages.manager.work',[
            "staff" => $staff
        ]);
    }

    public function addAttend($ID){
        $attend = Attend::where('user_id', $ID)
                         ->whereDate('created_at', Carbon::today())->get();
        if($attend->count() < 1){
            $attend = new Attend();
            $attend->user_id = $ID;
            $attend->start = Carbon::now();
            $attend->save();
            return redirect()->back();
        }
        return redirect()->back() ->with('alert', 'ได้เข้างานแล้ว');
        
    }

    public function viewshowstock(Request $req){
        $obj = $req->session()->get('login');
        $obj_branch = Branch::all()->Where('id',$obj->branch_id);
        $vendor = Vendor::all();
        $vendorproduct = Vendor_product::all();
        
        
        return view('pages.manager.showstock',[
            "VP" => $vendorproduct,
            "branch" => $obj_branch,
            "vendor" => $vendor
        ]);
    }

    public function addStock(Request $req){
        $product = Product::Where('product_name', $req['product_name']);
        if($product->count() < 1){    
            $obj = new Product();
            $obj->product_name = $req->product_name;
            $obj->buy_price = $req->price;
            $obj->unit = $req->unit;
            $obj->save();
        }
        $product = Product::Where('product_name', $req['product_name'])->first();
            $sVP = Vendor_product::Where('product_id',$product['id'])
                                  ->Where('vendor_id',$req['vendor_id']);
            $sBP = Branch_product::Where('product_id',$product['id'])
                                  ->Where('branch_id',$req['branch_id']);
            if($sVP->count() < 1){
                $VP = new Vendor_product();
                $VP->product_id = $product->id;
                $VP->vendor_id = $req->vendor_id;
                $VP->product_prices = $req->price;
                $VP->product_unit = $req->unit;
                $VP->save();
            }
            if($sBP->count() < 1){
                $BP = new Branch_product();
                $BP->product_id = $product->id; 
                $BP->branch_id =  $req->branch_id;
                $BP->save();
            }

        
        return redirect()->back();
    }

    public function delVP($ID){
        // dd($userID);
        Vendor_product::delById($ID);
        return redirect()->back();
    }



}