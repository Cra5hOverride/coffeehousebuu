<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function addUser(Request $req){
        $obj = new User();
        $data = $req->only($obj->getFillable());
        $obj->fill($data);
        $obj->password = Hash::make($req['password']);
        $obj->save();
        return response()->json($obj);
    }

    // public function login(Request $req){
    //     $obj = User::Where('username', $req['username']);
    //     if($obj->count() < 1){
    //         return "ไม่มีผู้ใช้งานในระบบ";
    //     }else{
    //         $usr = $obj->first();
    //         if (Hash::check($req['password'], $usr->password)){
    //             $req->session()->put('login', $usr);
    //         }else{
    //             return "รหัสผ่านไม่ถูกต้อง";
    //         }
    //     }
    //     $ses = $req->session()->get('login');
    //     return response()->json($ses);
    // }

    public function getUser(){
        return response()->json(User::selectAll());
    }
}
