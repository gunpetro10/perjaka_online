<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Uangmuka extends Model
{
    protected $table = "uangmukas";
    protected $fillable = [
        'id','no_um','thn'
    ];

    public static function getId() 
    {
        return $getId = DB::table('uangmukas')->select('id','thn','no_um')->orderBy('id','desc')->first();
    }
}
