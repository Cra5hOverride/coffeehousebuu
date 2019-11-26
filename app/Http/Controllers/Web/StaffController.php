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

    public function viewcustomer(){
        return view('pages.staff.addcustomer');
    }

    public function viewmenu(){
        return view('pages.staff.addmenu');
    }

    public function viewpromotion(){
        return view('pages.staff.addpromotion');
    }

    public function viewbill(){
        return view('pages.staff.bill');
    }

    public function viewclaim(){
        return view('pages.staff.claim');
    }

    public function vieworderproduct(){
        return view('pages.staff.orderproduct');
    }

    public function viewreceiveclaim(){
        return view('pages.staff.receiveclaim');
    }

    public function viewreceiveproduct(){
        return view('pages.staff.receiveproduct');
    }

    public function viewshowstock(){
        return view('pages.staff.showstock');
    }

    public function viewhome(){
        return view('pages.staff.homecustomer');
    }
}
