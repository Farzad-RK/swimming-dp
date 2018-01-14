<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AppRole;
use App\Swimmer;
use App\Coach;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getUser(){
    $_user =  auth()->guard('api')->user();
    $user = User::getUser($_user);
    return $user;
    }
    public function updateUser(Request $request){
    $_user =  auth()->guard('api')->user();
    $user = User::getUser($_user);

    $this->validate($request,[

     'firstName' => 'required',
     'lastName' => 'required',
     'phoneNumber' => 'required',
     'lastName' => 'required',
     'nationalNumber'=>'required',
     'mobileNumber' => 'required',
     'gender' => 'required',
     'address' => 'required',
     'fatherName' => 'required'
    ]);
    $user->fill($request->input())->save();
    }

    public function login(){

     return view('user.login');
    }

    public function authenticate(Request $request){

    $email = $request->input('username');
    $password = $request->input('password');

    //checking if user exists
    $user = User::where('email' ,$email)->get();
    if ($user->count()>0){
           $user = $user[0];
           $role = $user->role;
           if ($role->name =='swimmer'){
               if(Auth::attempt(['email' => $email, 'password' => $password])){
               return redirect()->intended('swimmer/dashboard');
                 }
              }
          else if ($role->name =='coach'){
               if(Auth::attempt(['email' => $email, 'password' => $password])){
               return redirect()->intended('coach/dashboard');
                 }
              }
          else if ($role->name =='teacher'){
               if(Auth::attempt(['email' => $email, 'password' => $password])){
               return redirect()->intended('teacher/dashboard');
                   }
              }
        }
   }

    public function create(Request $request){

      $this->validate($request,[
       'firstName' => 'required',
       'email'=>'required|unique:users',
       'password'=>'required|min:8|confirmed',
       'role'=>'required|not_in:0',
       'lastName' => 'required',
       'phoneNumber' => 'required',
       'lastName' => 'required',
       'nationalNumber'=>'required|unique:swimmers',
       'mobileNumber' => 'required',
       'gender' => 'required',
       'address' => 'required|not_in:0',
       'fatherName' => 'required'
      ]);
    $password = $request->input('password');
    $role = AppRole::where('name',$request->input('role'))->get();
    $role = $role[0];
    $user = new User();
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->role_id = $role->id;
    $user->save();
    $user = User::where('email',$request->input('email'))->get();
    $user = $user[0];
    if($role->name == 'swimmer'){

      Swimmer::create([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'phoneNumber' => $request->input('phoneNumber'),
        'nationalNumber'=>$request->input('nationalNumber'),
        'mobileNumber' => $request->input('mobileNumber'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'fatherName' => $request->input('fatherName'),
        'user_id'=>$user->id
      ]);
       Auth::attempt(['email' => $request->input('email'), 'password' => $password]);
       return redirect()->intended('swimmer/dashboard');
    } else if($role->name == 'coach'){
      Coach::create([
        'firstName' => $request->input('firstName'),
        'lastName' => $request->input('lastName'),
        'phoneNumber' => $request->input('phoneNumber'),
        'nationalNumber'=>$request->input('nationalNumber'),
        'mobileNumber' => $request->input('mobileNumber'),
        'gender' => $request->input('gender'),
        'address' => $request->input('address'),
        'fatherName' => $request->input('fatherName'),
        'user_id'=>$user->id
      ]);
       Auth::attempt(['email' => $request->input('email'), 'password' => $password]);
       return redirect()->intended('coach/dashboard');

    }

    }
}
