<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coach extends Model
{
    protected $guarded=[];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function team(){

        return $this->hasOne('App\Team','coach_id');
    }
}
