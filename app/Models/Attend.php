<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    //
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
