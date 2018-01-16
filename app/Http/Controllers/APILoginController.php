<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Route;

class APILoginController extends Controller
{



    public function getToken(Request $request){

    //user credentials in request

    $email = $request->input('username');
    $password = $request->input('password');

    //checking if user exists
    $user = User::where('email' ,$email)->get();
    if ($user->count()>0){
         $user = $user[0];
         if(Hash::check($password ,$user->password)){
           $role = $user->app_role ;
           if ($role->name =='refree'){

               $request->request->add([
                 'grant_type' => 'password',
                 'client_id' => 2,
                 'client_secret' => "N86YqFpSmgYaguAS5RRibLFyNAx0KyJASBBga93z",
                 'scope' => 'read-swimmer create-result read-match',
               ]);
                $tokenRequest = Request::create(
                '/oauth/token',
                'post'
                 );

                return Route::dispatch($tokenRequest);

             }
           else if ($role->name =='admin'){

                $request->request->add([
                'grant_type' => 'password',
                'client_id' => 2,
                'client_secret' => "N86YqFpSmgYaguAS5RRibLFyNAx0KyJASBBga93z",
                'scope' => '*',
                ]);
                $tokenRequest = Request::create(
                '/oauth/token',
               'post'
                );

               return Route::dispatch($tokenRequest);

              }

           } else {
           //type = 2 => incorrect passowrd
           return [
           'error' =>'2' ,
           'errorType' =>'auth'] ;
         }

       } else {
         //type= 1 => no such user exists
         return [
         'error' =>'1' ,
         'errorType' =>'auth'] ;
       }

     }

}
