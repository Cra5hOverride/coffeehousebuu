<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    protected $table = 'menus';

    protected $fillable = [
        'menus_name',
        'menus_detail',
        'prices',
        'status'
    ];

    public static function selectAll(){
        return self::all();
    }
}
