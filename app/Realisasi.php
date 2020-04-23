<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    protected $table = "uangmukas";
    protected $fillable = [
        'id','no_um'
    ];

    public static function getId() {
        return $getId = DB::table('uangmukas')->orderBy('id','desc')->limit(1)->get();
    }
}
