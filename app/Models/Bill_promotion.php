<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill_promotion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'bill_promotions';

    protected $fillable = [
        'promotion_id',
        'bill_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
