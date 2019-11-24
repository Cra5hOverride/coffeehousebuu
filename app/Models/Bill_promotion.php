<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_promotion extends Model
{
    //
    protected $table = 'bill_promotions';

    protected $fillable = [
        'promotion_id',
        'bill_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
