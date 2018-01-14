<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchType extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function matches(){

      return $this->hasMany('App\Match','match_type_id');
    }
}
