<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor_product extends Model
{
    //
    protected $table = 'vendor_products';

    protected $fillable = [
        'product_id',
        'vendor_id',
        'product_prices',
        'product_unit'
    ];

    public static function selectAll(){
        return self::all();
    }
}
