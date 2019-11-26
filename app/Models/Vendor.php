<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    //
    use SoftDeletes;
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
