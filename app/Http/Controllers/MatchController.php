<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\MatchType;
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
          $matches = Match::orderBy('created_at','desc')->with('type')->paginate(10);
          $types = MatchType::all();
          return view('admin.matches' ,compact('matches','types'));
         }
      }


   }
   public function create(Request $request){
     $_user =  auth()->guard('web')->user();
     $role = $_user->role->name;
     if($role=='admin'){
       $this->validate($request,[
        'name'=>'required',
        'startDate'=> 'required',
        'endDate' => 'required',
        'startTime' => 'required',
        'endTime' => 'required',
        'regStartDate'=>'required',
        'regStartTime'=>'required',
        'regEndDate'=>'required',
        'regEndTime'=>'required',
        'regCost'=>'required',
        'type'=>'required',
       ]);
       $match = new Match();
       $match->name = $request->input('name');
       $match->startDate = $request->input('startDate')." ".$request->input('startTime');
       $match->endDate = $request->input('endDate')." ".$request->input('endTime');
       $match->regStartDate = $request->input('regStartDate')." ".$request->input('regStartTime');
       $match->regEndDate = $request->input('regEndDate')." ".$request->input('regEndTime');
       $match->registrationCost = $request->input('regCost');
       $match->match_type_id =$request->type;
       $match->place = $request->input('place');
       $match->capacity= $request->input('capacity');
       $match->gender= $request->input('gender');
       $match->save();
       return redirect('/admin/matches')->with('status', 'با موفقیت اضافه شد');
       }
   }
}
