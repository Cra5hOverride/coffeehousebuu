<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_product extends Model
{
    //
    protected $table = 'menu_products';

    protected $fillable = [
        'product_id',
        'menu_id',
        'product_qty',
        'product_unit'
    ];

    public static function selectAll(){
        return self::all();
    }
}
