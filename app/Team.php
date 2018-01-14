<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function coach(){

      return $this->belongsTo('App\Coach','coach_id');
    }

    public function swimmers(){

      return $this->hasMany('App\Swimmer','team_id');
    }

    public function matches(){

      return $this->belongsToMany('App\Match','match_team',
      'team_id','match_id')->using('App\MatchTeam')->withTimestamps();

    }
}
