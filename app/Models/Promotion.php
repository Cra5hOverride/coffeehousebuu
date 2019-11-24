<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table = 'promotions';

    protected $fillable = [
        'promotions_detail',
        'start',
        'end'
    ];

    public static function selectAll(){
        return self::all();
    }
}
