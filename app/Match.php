<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Match extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function results(){

      return $this->hasMany('App\Result');
    }

    public function type(){

      return $this->belongsTo('App\MatchType','match_type_id');
    }

    public function teams(){

      return $this->belongsToMany('App\Team','match_team',
      'match_id','team_id')->using('App\MatchTeam')->withTimestamps();

    }
    public function refrees(){

      return $this->belongsToMany('App\Refree','match_refree',
      'match_id','refree_id')->using('App\MatchRefree')->withPivot('lineNumber')->withTimestamps();

    }
}
