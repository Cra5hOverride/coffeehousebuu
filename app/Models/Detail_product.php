<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'detail_products';

    protected $fillable = [
        'product_id',
        'branch_id',
        'receive_product_id',
        'qty',
        'expired_date'
    ];

    public static function selectAll(){
        return self::all();
    }
}
