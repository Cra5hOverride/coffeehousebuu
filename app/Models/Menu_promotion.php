<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu_promotion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'menu_promotions';

    protected $fillable = [
        'promotion_id',
        'menu_id'
    ];

    public static function selectAll(){
        return self::all();
    }
}
