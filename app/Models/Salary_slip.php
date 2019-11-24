<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary_slip extends Model
{
    //
    protected $table = 'salary_slips';

    protected $fillable = [
        'user_id',
        'status',
    ];

    public static function selectAll(){
        return self::all();
    }
}
