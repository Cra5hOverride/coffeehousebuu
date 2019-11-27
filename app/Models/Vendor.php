<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    //
    use SoftDeletes;
    protected $table = 'vendors';

    protected $fillable = [
        'store_name',
        'contact_name',
        'contact_lastname',
        'status',
        'email',
        'phonenumber',
        'address',
    ];

    public static function selectAll(){
        return self::all();
    }

    public static function delVendor($ID){
        return self::Where('id', $ID)->delete();
    }

    public static function selectById($id){
        return self::Where('id', $id)->first();
    }
}
