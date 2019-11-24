<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_has_product extends Model
{
    //
    
    protected $table = 'order_has_products';

    protected $fillable = [
        'order_product_id',
        'product_id',
        'qty'
    ];

    public static function selectAll(){
        return self::all();
    }
}
