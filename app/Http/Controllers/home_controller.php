<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class home_controller extends Controller {
   public function index() {
        $research = DB::table('research')->orderBy('id', 'desc')->simplePaginate(2);
        $teams = DB::table('team')->orderBy('id', 'desc')->simplePaginate(6);
      return view('welcome',['teams'=>$teams,'research'=>$research]);
   }

     public function our_team() {
        $teams = DB::table('team')->orderBy('id', 'desc')->paginate(20);
        return view('our_team',['teams'=>$teams]);
   }
 
     public function all_research() {
        $research = DB::table('research')->orderBy('id', 'desc')->paginate(20);
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
    public function view_research(Request $request, $id){
        $single_research = DB::table('research')->where('id', '=', $id)->first();
        $latest_research = DB::table('research')->orderBy('id', 'desc')->simplePaginate(4);
        return view('view_research',['single_research'=>$single_research,'latest_research'=>$latest_research]);
    }

}