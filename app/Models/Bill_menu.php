<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill_menu extends Model
{
    //
    use SoftDeletes;
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
