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

    public function delBranchs($ID){
        // dd($userID);
        Branch::delBranch($ID);
        return redirect()->back();
    }

    public function delVendors($ID){
        // dd($userID);
        Vendor::delVendor($ID);
        return redirect()->back();
    }

    public function updatePositionOfUser(Request $req){
        $userObj = User::selectById($req->userid);
        $userObj->branch_id = $req->branchid;
        $userObj->position = 1;
        $userObj->save();
        return redirect()->route('admin.viewmanager');
    }

    public function updateBranch(Request $req){
        $obj = new Branch();
        $data = $req->only($obj->getFillable());
        $userObj = Branch::selectById($req->id);
        $userObj->fill($data);
        $userObj->save();
        return redirect()->back();
    }

    public function updateStaff(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $userObj = User::selectById($req->id);
        $userObj->fill($data);
        $userObj->password = Hash::make($req['password']);
        $userObj->save();
        return redirect()->back();
    }

    public function updateVendor(Request $req){
        $obj = new Vendor();
        $data = $req->only($obj->getFillable());
        $userObj = Vendor::selectById($req->id);
        $userObj->fill($data);
        $userObj->save();
        return redirect()->back();
    }

    public function viewmanager(Request $req){

        $obj_managers = User::selectmenagers();
        $obj_staffs = User::selectstaffall();
        $obj_branch = Branch::noManager();

        return view('pages.owner.addmanager',[
            "menagers" => $obj_managers,
            "staffs" => $obj_staffs,
            "branchs" => $obj_branch
        ]);
    }

    public function viewstaff(Request $req){
        $obj_staffs = User::selectstaffall();
        $obj_branch = Branch::selectAll();
        return view('pages.owner.addstaff',[
            "staffs" => $obj_staffs,
            "branchs" => $obj_branch
        ]);
    }
    
    public function viewbranch(Request $req){
        // dd('viewBranch');
        $obj_branch = Branch::selectAll();
        // dd($obj_branch);
        return view('pages.owner.branch',[
            "branchs" => $obj_branch
        ]);
    }

    public function viewdailystock(Request $req){
        return view('pages.owner.dailystock');
    }

    public function viewpartner(Request $req){
        $obj_vendors = Vendor::selectAll();
        return view('pages.owner.partner',[
            "vendors" => $obj_vendors
        ]);
    }

    public function viewhome(Request $req){
        $obj = $req->session()->get('login');
        return view('pages.owner.homeowner',[
            "userlogin" => $obj,
            "position" => "Founder"
        ]);
    }

    
}
