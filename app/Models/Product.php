<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
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
}
