<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    //
    use SoftDeletes;
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
