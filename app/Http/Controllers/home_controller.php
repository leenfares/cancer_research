<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Research;
use LaravelLocalization;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Team;

class home_controller extends Controller {
   public function index() {
    $research = Research::select('id',
    'image',
    'file',
    'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
    )->orderBy('id', 'DESC')->paginate(2);
    $teams = Team::select('id',
    'image',
    'telephone',
    'email',
    'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
    'specialization_' . LaravelLocalization::getCurrentLocale() . ' as specialization'
    )->paginate(6);
    return view('welcome',['teams'=>$teams,'research'=>$research]);
   }

   public function langs() {
  //  return team::get();
   return view('lang_test');
   }

     public function our_team() {
        $teams = DB::table('team')->orderBy('id', 'desc')->paginate(20);
        return view('our_team',['teams'=>$teams]);
   }
 
     public function all_research() {

        $research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
          )->paginate(20);
         return view('all_research',['research'=>$research]);
   }
 
    public function postRegister(Request $request) {
      //Retrieve the name input field
      $name = $request->input('name');
      echo 'Name: '.$name;
      echo '<br>';
      
      //Retrieve the username input field
      $username = $request->username;
      echo 'Username: '.$username;
      echo '<br>';
      
      //Retrieve the password input field
      $password = $request->password;
      echo 'Password: '.$password;
   }
    public function view_research($id){
    

        $single_research = Research::find($id, ['image',
        'created_at',
        'file',
        'name_'. LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        ]);       
         $latest_research = Research::select('id',
        'image',
        'file',
        'name_' . LaravelLocalization::getCurrentLocale() . ' as name',
        'description_' . LaravelLocalization::getCurrentLocale() . ' as description'
        )->orderBy('id', 'DESC')->paginate(4);
       return view('view_research',['single_research'=>$single_research,'latest_research'=>$latest_research]);
    }

}
