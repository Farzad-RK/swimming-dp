<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppRole extends Model
{
  public function users(){

       return $this->hasMany('App\User','app_role_id');
  }
}
