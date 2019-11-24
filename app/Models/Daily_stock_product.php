<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily_stock_product extends Model
{
    //
    protected $table = 'daily_stock_products';

    protected $fillable = [
        'daily_stock_id',
        'product_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
