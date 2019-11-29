<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'vendor_products';

    protected $fillable = [
        'product_id',
        'vendor_id',
        'product_prices',
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

    public function getVerdorOfVP(){
        return Vendor::where('id', $this->vendor_id)
                    ->first();
    }
    public function getProductOfVP(){
        return Product::where('id', $this->product_id)
                    ->first();
    }
    public function getBPOfVP(){
        return Branch_product::where('id', $this->product_id)
                    ->first();
    }

    public static function getPriceByID($id){
        return self::Where('id', $id)
                    ->first()->product_prices;
    }

    public static function getVendorID($id){
        return self::Where('id', $id)->first()->vendor_id;
    }

    public static function getProductID($id){
        return self::Join('products', 'vendor_products.product_id', 'products.id')
                    ->Where('vendor_products.id', $id)->first();
    }
}
