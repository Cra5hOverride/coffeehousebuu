<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receive_claim_product extends Model
{
    //
    use SoftDeletes;
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
