<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $table = 'bills';

    protected $fillable = [
        'user_id',
        'branch_id',
        'type_payment',
        'qty_list',
        'sum_prices',
        'queue'
        
    ];

    public static function selectAll(){
        return self::all();
    }
    
}
