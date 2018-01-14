<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Swimmer extends Model
{
    protected $guarded=[];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function team(){

      return $this->belongsTo('App\Team','team_id');
    }

    public function courses(){

      return $this->belongsToMany('App\Course','course_swimmer',
      'course_id','swimmer_id')->withTimestamps();
    }
}
