<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return response()->json($obj);
    }

    public function addPromotion(Request $req){
        $obj = new Promotion();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return response()->json($obj);
    }

}
