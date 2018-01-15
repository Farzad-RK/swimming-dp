<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match;
use App\MatchType;
use App\Refree;
use App\MatchRefree;
class MatchController extends Controller
{
    public function index(Request $request){

      if($request->input('all')!=null){

       return Match::all()->load('type');
      }
      else {

        $_user =  auth()->guard('web')->user();
        $role = $_user->app_role->name;
        if($role=='admin'){
          $matches = Match::orderBy('created_at','desc')->with('type')->paginate(10);
          $types = MatchType::all();
          return view('admin.matches' ,compact('matches','types'));
         }
      }


   }
   public function create(Request $request){
     $_user =  auth()->guard('web')->user();
     $role = $_user->app_role->name;
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

   public function edit(Match $match){

       $_user =  auth()->guard('web')->user();
       $role = $_user->app_role->name;
       if($role=='admin'){
       $match = $match->load(['type','refrees']);
       $refrees = Refree::all();
       $types = MatchType::all();
       $match_refrees =$match->refrees;

       return view('admin.editmatch', compact('match','refrees','types','match_refrees'));
       }else {


       }
   }

   public function update(Request $request){
       $_user =  auth()->guard('web')->user();
       $role = $_user->app_role->name;
       if($role=='admin'){


           $this->validate($request,[
               'name'=>'required',
               'startDate'=> 'required',
               'endDate' => 'required',
               'regStartDate'=>'required',
               'regEndDate'=>'required',
               'regCost'=>'required',
               'type'=>'required',
               'gender'=>'required',
               'capacity'=>'required',
               'place'=>'required'
           ]);
            //setting the refrees

           $selected_refrees[] =$request->input('refrees');
           $match_refrees =MatchRefree::all();
           foreach ($match_refrees->all() as $mf){
               $mf->delete();
           }

           if(count($selected_refrees)==0){


           }else {
               foreach ($selected_refrees as $selected){

                   $m = new MatchRefree();
                   $m->lineNumber = str(mt_rand(1,8));
                   $m->refree_id =$selected;
                   $m->match_id =$request->input('id');
                   $m->save();
               }
           }


           $id = $request->input('id');
           $match = Match::find($id);
           $match->name = $request->input('name');
           $match->startDate = $request->input('startDate');
           $match->endDate = $request->input('endDate');
           $match->regStartDate = $request->input('regStartDate');
           $match->regEndDate = $request->input('regEndDate');
           $match->place = $request->input('place');
           $match->capacity= $request->input('capacity');
           $match->gender= $request->input('gender');
           $match->match_type_id =$request->input('type');
           $match->save();
           return redirect('/admin/matches')->with('status', 'با موفقیت به روز شد.');
       }
   }
}
