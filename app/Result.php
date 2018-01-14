<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Result extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];

   public function match(){

     return  $this->belongsTo('App\Match', 'match_id');

   }

   public function swimmer(){

     return $this->belongsTo('App\Swimmer','swimmer_id');

   }
   public function refree(){

      return $this->belongsTo('App\Refree','refree_id');
   }
}
