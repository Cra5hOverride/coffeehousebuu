<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = 'branchs';

    protected $fillable = [
        'branchs_name',
        'address',
        'email',
        'phonenumber'

    ];

    public static function selectAll(){
        return self::all();
    }
}
