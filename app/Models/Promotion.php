<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Promotion extends Model
{
    //
    use SoftDeletes;
    protected $table = 'promotions';

    protected $fillable = [
        'promotions_detail',
        'start',
        'end'
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
}
