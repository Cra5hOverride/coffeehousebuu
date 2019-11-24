<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    protected $table = 'vendors';

    protected $fillable = [
        'store_name',
        'contact_name',
        'contact_lastname',
        'status',
        'email',
        'phonenumber',
        'address',
    ];

    public static function selectAll(){
        return self::all();
    }
}
