<?php

namespace App\Http\Controllers;
use App\MatchRefree;
use App\User;
use App\Swimmer;
use App\Match;
use App\Result;
use Illuminate\Http\Request;

class RefreeController extends Controller
{
    public function currentMatches(Request $request){

    $_user =  auth()->guard('api')->user();
    $role =$_user->app_role->name;
    if ($role =='refree'){
    $user = User::getUser($_user);
    $matches = $user->matches;
    return $matches->load('type');
    } else{
      return ['error'=> 'Forbidden access'];
    }

    }
    public function prevMatches(Request $request){

    $_user =  auth()->guard('api')->user();
    $role =$_user->app_role->name;
    if ($role =='refree'){
    $user = User::getUser($_user);
    $results = Result::where('refree_id',$user->id)->get();
    $matches = [];
    $i = 0;
    foreach ($results as $result) {
       $matches[$i] = $result->match->load('type');
       $matches[$i]->lineNumber =$result->lineNumber;

       $i=$i+1;
    }
    return $matches;
    } else{
      return ['error'=> 'Forbidden access'];
    }

    }
    public function checkSwimmer(Request $request){
      $_user =  auth()->guard('api')->user();
      $role =$_user->app_role->name;
      if ($role =='refree'){
      $user = User::getUser($_user);
      $nationalNumber =$request->input('nationalNumber');
      $match = $request->input('matchId');
      $swimmer = Swimmer::where('nationalNumber',$nationalNumber)->first();
      if($swimmer==null){

        return ['error'=>'شناگری با این کد ملی وجود ندارد'];
      }
      if($swimmer->team!=null){
        $swimmer_team = $swimmer->team;
      } else {
        return ['error'=>'شناگر در تیمی عضو نیست'];
      }
      if (count($swimmer_team->matches)>0){
        $team_matches =$swimmer_team->matches;
      } else {

        return ['error' , 'تیم در مسابقه ای شرکت نکرده است'];
      }
      foreach ($team_matches as $toCheck) {
            if($toCheck->id === $match){
              return ['allowed'=> 'true'];
            }
      }
      return ['allowed'=> 'false'];

      } else {
        return ['error'=> 'Forbidden access'];
      }
    }


    public function setResult(Request $request){

      $_user =  auth()->guard('api')->user();
      $role =$_user->app_role->name;
      if ($role =='refree'){
      $user = User::getUser($_user);
      $nationalNumber =$request->input('nationalNumber');
      $match_id = $request->input('matchId');
      $match = Match::where('id',$match_id)->first();
      $swimmer = Swimmer::where('nationalNumber',$nationalNumber)->first();
      $record = $request->input('record');
      //
      $result = new Result();
      $result->lineNumber = $request->input('lineNumber');
      $result->swimmerRecord = $request->input('record');
      // a big warning
      $result->swimmerPlace = 'none';
      //
      $result->match_id = $match->id;
      $result->swimmer_id = $swimmer->id;
      $result->refree_id = $user->id;
      $result->save();
      //soft delete from refree matches
      $refree_matches = $user->matches;
      foreach ($refree_matches as $del_match ) {
        if($match->id=$del_match->id){
          $user->matches()->detach($del_match->id);
        }
      }
      return ['status'=>'نتیجه با موفقیت ثبت شد'];
      }
    }
}
