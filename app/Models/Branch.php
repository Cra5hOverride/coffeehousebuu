<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    //
    use SoftDeletes;
    protected $table = 'branchs';

    protected $fillable = [
        'branchs_name',
        'address',
        'email',
        'phonenumber'

    ];

    public static function selectAll(){
        return self::paginate(10);
    }

    public function getManagerOfBranch(){
        return User::where('branch_id', $this->id)
                    ->where('position', 1)
                    ->first();
    }

    public static function noManager(){
        $objUser = User::Where('position', 1)->get();
        // dd($objUser);
        $resultOfBranchID = self::objToArray($objUser, 'branch_id');
        $obj = self::WhereNotIn('id', $resultOfBranchID)->get();
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
