<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_menu extends Model
{
    //
    protected $table = 'bill_menus';

    protected $fillable = [
        'bill_id',
        'menu_id',
        'qty_menu'
    ];

    public static function selectAll(){
        return self::all();
    }
}
