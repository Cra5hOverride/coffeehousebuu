<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receive_claim_product extends Model
{
    //
    protected $table = 'receive_claim_products';

    protected $fillable = [
        'product_id',
        'receive_claim_id',
        'qty'
    ];

    public static function selectAll(){
        return self::all();
    }
}
