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
    public static function selectById($id){
        return self::Where('id', $id)->first();
    }

    public static function delById($ID){
        return self::Where('id', $ID)->delete();
    }

    public static function StatusById($id){
        $menu = self::Where('id', $id)->first();
        if($menu->status == 1){
            return "ขาย";
        }
        return "ไม่ขาย";
    }

    public static function priceById($id){
        $menu = self::Where('id', $id)->first();
        return $menu->prices;
    }

}
