<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Claim_has_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'claim_has_products';

    protected $fillable = [
        'product_id',
        'claim_product_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
