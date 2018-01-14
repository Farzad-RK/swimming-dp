<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
  use SoftDeletes;

  protected $dates = ['deleted_at'];
  protected $table = 'app_users';
   public function role(){

     return $this->belongsTo('App\AppRole','role_id');
   }

   public static function getUser(User $user ){
   $role = $user->role->name;

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
