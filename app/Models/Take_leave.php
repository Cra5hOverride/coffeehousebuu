<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Take_leave extends Model
{
    //
    use SoftDeletes;
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
