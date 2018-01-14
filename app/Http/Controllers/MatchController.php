<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
class MatchController extends Controller
{
    public function index(Request $request){

      if($request->input('all')!=null){

       return Match::all()->load('type');
      }
      else {

        $_user =  auth()->guard('web')->user();
        $role = $_user->role->name;
        if($role=='admin'){

          $matches = Match::orderBy('created_at','desc')->paginate(10);
          return view('admin.matches' ,compact('matches'));
         }
      }


   }
   public function create(Requet $request){
     $_user =  auth()->guard('web')->user();
     $role = $_user->role->name;
     if($role=='admin'){

       $this->validate($request,[
        '' => 'required',
        'type_age' => 'required'
       ]);
       $name = $request->input('type_name');
       $age = $request->input('type_age');
       $matchType = new App\Match();
       $matchType->name = $name;
       $matchType->type = $type;
       $matchType->save();
      }
   }
}
