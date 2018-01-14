<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function teacher(){

      return $this->belongsTo('App\Teacher','teacher_id');
    }

    public function swimmers (){

      return $this->belongsToMany('App\Swimmer','course_swimmer',
      'course_id','swimmer_id')->withTimestamps();
    }
}
