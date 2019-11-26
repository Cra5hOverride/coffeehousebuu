<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
        'email',
        'phonenumber',
        'name',
        'surname',
        'branch_id',
        'birthday',
        'address',
        'idcard',
        'position',
        'salary',
        'salary_type'
    ];
    protected $hidden = [
        'password'
    ];

    public static function selectAll(){
        return self::paginate(10);
    }

    public static function selectById($id){
        return self::Where('id', $id)->first();
    }

    public static function selectmenagers(){
        return self::Where('position', 1)->paginate(10);
    }

    public function getBranchOfUser(){
        return Branch::where('id', $this->branch_id)
                    ->first();
    }

    public static function selectstaffall(){
        return self::Where('position', 2)->paginate(10);
    }

    public static function delUser($userID){
        return self::Where('id', $userID)->delete();
    }

}
