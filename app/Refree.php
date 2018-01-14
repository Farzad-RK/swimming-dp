<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refree extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function matches(){

      return $this->belongsToMany('App\Match','match_refree',
      'refree_id','match_id')->using('App\MatchRefree')->withPivot('lineNumber')->withTimestamps();
      }
}
