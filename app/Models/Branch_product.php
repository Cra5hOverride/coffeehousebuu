<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch_product extends Model
{
    //
    use SoftDeletes;
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
