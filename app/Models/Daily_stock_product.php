<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Daily_stock_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'daily_stock_products';

    protected $fillable = [
        'daily_stock_id',
        'product_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
