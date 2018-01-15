<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends \TCG\Voyager\Models\User
{
  use HasApiTokens, Notifiable;
  use SoftDeletes;

  protected $dates = ['deleted_at'];
  protected $table = 'users';

   public function app_role(){

     return $this->belongsTo('App\AppRole','app_role_id');
   }

   public static function getUser(User $user ){
   $role = $user->app_role->name;

   if($role == 'refree'){

    return Refree::where('user_id',$user->id)->first();
   }
   elseif ($role == 'swimmer') {

     return Swimmer::where('user_id',$user->id)->first();
   }
   elseif ($role == 'coach' ) {

     return Coach::where('user_id',$user->id)->first();

   }
    elseif ($role == 'teacher') {

      return Teacher::where('user_id',$user->id)->first();
   }
   elseif ($role == 'admin') {

     return Admin::where('user_id',$user->id)->first();
  }

   }
}
