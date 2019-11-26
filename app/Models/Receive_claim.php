<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receive_claim extends Model
{
    //
    use SoftDeletes;
    protected $table = 'receive_claims';

    protected $fillable = [
        'claim_product_id',
        'user_id',
        'branch_id',
        'date_receive',
        'qty',
        'status'
    ];

    public static function selectAll(){
        return self::all();
    }
}
