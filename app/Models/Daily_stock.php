<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily_stock extends Model
{
    //
    protected $table = 'daily_stocks';

    protected $fillable = [
        'user_id',
        'qty_list_products',
        'stock_prices'        

    ];

    public static function selectAll(){
        return self::all();
    }
}
