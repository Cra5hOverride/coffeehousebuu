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
}
