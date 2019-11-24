<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch_product extends Model
{
    //
    protected $table = 'branch_products';

    protected $fillable = [
        'product_id',
        'branch_id',
        'qty',
        'date_receive'
    ];

    public static function selectAll(){
        return self::all();
    }
}
