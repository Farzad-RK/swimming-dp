<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
      public function login(){

      if(Auth::check()){


      return redirect()->intended('admin/dashboard');

      }
      return view('admin.login');

    }

    public function logout(Request $request){

      if(Auth::check()){

        $request->session()->flush();
        return redirect()->intended('admin/login');
      }

    }

    public function authenticate(Request $request){

          $email = $request->input('username');
          $password = $request->input('password');

          //checking if user exists
          $user = User::where('email' ,$email)->get();
          if ($user->count()>0){
               $user = $user[0];
               $role = $user->role;
               if ($role->name =='admin'){
               if(Auth::attempt(['email' => $email, 'password' => $password])){

                 return redirect()->intended('admin/dashboard');
                 }
              }
        }
   }

   public function dashboard(){
     $_user =  auth()->guard('web')->user();
     $role = $_user->role->name;
     if($role=='admin'){
       return view('admin.dashboard');
     }

   }

}
