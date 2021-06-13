<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use DateTime;
use function Sodium\add;
use File;
use App\Http\Controllers\Controller;
  

class admin_controller extends Controller
{


////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////*ROLES - USERS*///////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////

    public function users()
    {
         $users = DB::table('users')->orderBy('id', 'desc')->get();
         return view('admin.users',['users'=>$users]);
    }   
    public function roles()

    { 
        $roles = DB::table('roles')->orderBy('id', 'desc')->get();
         return view('admin.roles',['roles'=>$roles]);
    }

   public function removeImage(Request $request)
    {
        if(File::exists(public_path('images/20180209_100756.jpg'))){
            File::delete(public_path('images/20180209_100756.jpg'));
        }else{
            dd('File does not exists.');
        }
    }

}

?>