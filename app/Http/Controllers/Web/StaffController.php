<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;


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

    public function viewcustomer(Request $req){
        return view('pages.staff.addcustomer');
    }

    public function viewmenu(Request $req){
        return view('pages.staff.addmenu');
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
        return view('pages.staff.orderproduct');
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
