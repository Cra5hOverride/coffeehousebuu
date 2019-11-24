<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu_promotion extends Model
{
    //
    protected $table = 'menu_promotions';

    protected $fillable = [
        'promotion_id',
        'menu_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
