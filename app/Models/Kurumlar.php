<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurumlar extends Model
{
    protected $quarded = [];

    static function getField($id,$field){
        $c = Kurumlar::where('id','=',$id)->count();
        if($c!=0){
            $w = Kurumlar::where('id','=',$id)->get();
            return $w[0][$field];
        }else{
            return "Kurum Silinmis";
        }
    }
}
