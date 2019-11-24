<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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

    public static function selectAll(){
        return self::paginate(10);
    }

    public static function selectById($id){
        return self::Where('id', $id)->first();
    }
}
