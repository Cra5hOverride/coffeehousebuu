<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Claim_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'claim_products';

    protected $fillable = [
        'receive_product_id',
        'vendor_id',
        'user_id',
        'branch_id',
        'qty',
        'status',
        'date_receive'
    ];

    public static function selectAll(){
        return self::all();
    }
}
