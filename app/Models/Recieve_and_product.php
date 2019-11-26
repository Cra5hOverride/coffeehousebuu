<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recieve_and_product extends Model
{

    use SoftDeletes;
    protected $table = 'receive_and_products';

    protected $fillable = [
        'product_id',
        'receive_product_id',
        'qty'
    ];

    public static function selectAll(){
        return self::all();
    }
}
