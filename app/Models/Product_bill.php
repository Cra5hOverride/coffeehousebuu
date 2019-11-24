<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_bill extends Model
{
    //
    protected $table = 'product_bills';

    protected $fillable = [
        'product_id',
        'branch_id',
        'vendor_id',
        'user_id',
        'prices',
        'date_bill'
    ];

    public static function selectAll(){
        return self::all();
    }
}
