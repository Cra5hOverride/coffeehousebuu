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
    public function getUserOfTL(){
        return User::where('id', $this->user_id)
                    ->first();
    }

    public static function getTakeleave($staff){
        $resultOfID = self::objToArray($staff, 'id');
        $obj = self::WhereIn('user_id', $resultOfID)->get();
        return $obj;
    }

    private static function objToArray($obj, $param){
        $result = array();
        foreach($obj as $item){
            array_push($result, $item->$param);
        }
        return $result;
    }

}
