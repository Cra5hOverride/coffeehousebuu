<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Vendor;
use App\Models\User;


class OwnerController extends Controller
{
    //

    public function addBranch(Request $req){
        $obj = new Branch();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return response()->json($obj);
    }

    public function addVendor(Request $req){
        $obj = new Vendor();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->save();
        return response()->json($obj);
    }

    public function updatePositionOfUser($userID, $position){
        $userObj = User::selectById($userID);
        $userObj->position = $position;
        $userObj->save();
        return redirect()->back();
    }
}
