<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bill extends Model
{
    //
    use SoftDeletes;
    protected $table = 'bills';

    protected $fillable = [
        'user_id',
        'branch_id',
        'customer_id',
        'qty_list',
        'sum_prices',
        'queue'
        
    ];

    public static function selectAll(){
        return self::all();
    }
    
}
