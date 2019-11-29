<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'qty_all',
        'buy_price',
        'unit'
    ];

    public static function selectAll(){
        return self::all();
    }

    public static function selectById($id){
        return self::Where('id', $id)->first();
    }

    public static function delById($ID){
        return self::Where('id', $ID)->delete();
    }
}
