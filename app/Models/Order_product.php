<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    //
    protected $table = 'order_products';

    protected $fillable = [
        'user_id',
        'branch_id',
        'vendor_id',
        'product_qty',
        'prices',
        'status',
        'date_receive'
    ];

    public static function selectAll(){
        return self::all();
    }
}
