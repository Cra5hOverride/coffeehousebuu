<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receive_product extends Model
{

    use SoftDeletes;
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
