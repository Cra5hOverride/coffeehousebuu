<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch_product extends Model
{
    //
    use SoftDeletes;
    protected $table = 'branch_products';

    protected $fillable = [
        'product_id',
        'branch_id',
        'qty'
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

    public function getProductOfBranch(){
        return Product::where('id', $this->product_id)
                    ->first();
    }
}
