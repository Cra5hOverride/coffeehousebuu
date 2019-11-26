<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Vendor;
use App\Models\User;


class OwnerController extends Controller
{
    //

    public function addUser(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->password = Hash::make($req['password']);
        $obj->position = 2;
        $obj->save();
        return redirect()->route('admin.viewstaff');
    }


    public function addBranch(Request $req){
        $obj = new Branch();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return redirect()->route('admin.viewbranch');
    }

    public function addVendor(Request $req){
        $obj = new Vendor();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->status = 1;
        $obj->save();
        return redirect()->route('admin.viewpartner');
    }

    public function delStaff($userID){
        // dd($userID);
        User::delUser($userID);
        return redirect()->back();
    }

    public function updatePositionOfUser(Request $req){
        $userObj = User::selectById($req->userid);
        $userObj->branch_id = $req->branchid;
        $userObj->position = 1;
        $userObj->save();
        return redirect()->route('admin.viewmanager');
    }

    public function viewmanager(){

        $obj_managers = User::selectmenagers();
        $obj_staffs = User::selectstaffall();
        $obj_branch = Branch::noManager();

        return view('pages.owner.addmanager',[
            "menagers" => $obj_managers,
            "staffs" => $obj_staffs,
            "branchs" => $obj_branch
        ]);
    }

    public function viewstaff(){
        $obj_staffs = User::selectstaffall();
        $obj_branch = Branch::selectAll();
        return view('pages.owner.addstaff',[
            "staffs" => $obj_staffs,
            "branchs" => $obj_branch
        ]);
    }
    
    public function viewbranch(){
        // dd('viewBranch');
        $obj_branch = Branch::selectAll();
        // dd($obj_branch);
        return view('pages.owner.branch',[
            "branchs" => $obj_branch
        ]);
    }

    public function viewdailystock(){
        return view('pages.owner.dailystock');
    }

    public function viewpartner(){
        $obj_vendors = Vendor::selectAll();
        return view('pages.owner.partner',[
            "vendors" => $obj_vendors
        ]);
    }

    public function viewhome(){
        $obj = $req->session()->get('login');
        return view('pages.owner.homeowner',[
            "userlogin" => $obj,
            "position" => "Founder"
        ]);
    }

    
}
