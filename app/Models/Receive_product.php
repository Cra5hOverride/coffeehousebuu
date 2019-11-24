<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receive_product extends Model
{
    protected $table = 'receive_products';

    protected $fillable = [
        'order_product_id',
        'branch_id',
        'qty',
        'date_receive'
    ];

    public static function selectAll(){
        return self::all();
    }
}
