<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Branch;
use App\Models\Vendor;
use App\Models\User;
use App\Models\Menu;
use App\Models\Promotion;
use App\Models\Attend;
use App\Models\Salary_slip;
use App\Models\Take_leave;



class ManagerController extends Controller
{
    public function addMenu(Request $req){
        $obj = new Menu();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return redirect()->back();
    }

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
        $menu = Menu::all();
        return view('pages.manager.menu',[
            "menu" => $menu
        ]);
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
                      ->Where('position', 2)
                      ->Where('branch_id',$obj->branch_id);

        return view('pages.manager.salary',[
            "staff" => $staff
        ]);
    }

     
    public function viewTakeleave(Request $req){
        return view('pages.manager.takeleave');
    }

    public function viewVendor(Request $req){
        $obj_vendors = Vendor::selectAll();
        return view('pages.manager.vendor',[
            "vendors" => $obj_vendors
        ]);
    }

    public function viewWork(Request $req){

        return view('pages.manager.work');
    }

    public function viewshowstock(){
        
        return view('pages.manager.showstock');
    }

}
