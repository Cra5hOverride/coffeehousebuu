<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'phone_number',
        'address'
    ];

    public static function selectAll(){
        return self::all();
    }
}
