<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MatchType;
class MatchTypeController extends Controller
{
  public function index(){

    $_user =  auth()->guard('web')->user();
    $role = $_user->app_role->name;
    if($role=='admin'){

      $matchtypes = MatchType::orderBy('created_at','desc')->paginate(10);
      return view('admin.matchtypes' ,compact('matchtypes'));
    }

  }

  public function create(Request $request){
    $_user =  auth()->guard('web')->user();
    $role = $_user->app_role->name;
    if($role=='admin'){

      $this->validate($request,[
       'type_name' => 'required',
       'type_age' => 'required'
      ]);
      $name = $request->input('type_name');
      $age = $request->input('type_age');
      $matchType = new MatchType();
      $matchType->name = $name;
      $matchType->age = $age;
      $matchType->save();
      return redirect('admin/matchtype')->with('status', 'با موفقیت اضافه شد');
     }
  }
}
