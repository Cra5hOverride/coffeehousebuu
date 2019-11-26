<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attend extends Model
{
    //
    use SoftDeletes;
    protected $table = 'attends';

    protected $fillable = [
        'user_id',
        'start',
        'end'
        
    ];

    public static function selectAll(){
        return self::all();
    }
}
