<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'menu_products';

    protected $fillable = [
        'product_id',
        'menu_id',
        'product_qty',
        'product_unit'
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

    public function getProductOfMP(){
        return Product::where('id', $this->product_id)
                    ->first();
    }

    public function getMenuOfMP(){
        return Menu::where('id', $this->product_id)
                    ->first();
    }
    public function getMenustatusOfMP(){
        $menu = Menu::where('id', $this->product_id)
                    ->first();
        if($menu->status == 1){
            return "ขาย";
        }
        return "ไม่ขาย";
    }
}
