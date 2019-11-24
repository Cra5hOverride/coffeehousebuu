<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Take_leave extends Model
{
    //
    protected $table = 'take_leaves';

    protected $fillable = [
        'user_id',
        'start',
        'end'
        
    ];

    public static function selectAll(){
        return self::all();
    }
}
