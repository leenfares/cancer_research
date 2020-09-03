<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use DateTime;
use function Sodium\add;

class admin_controller extends Controller
{


////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////*TEAM*///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////

// 1 //
    public function create_team (Request $request)
    {
             $t_name=$request->input('t_name');
             $email=$request->input('email');
             $telephone=$request->input('telephone');
             $specialization=$request->input('specialization');
             if($files=$request->file('photo')){  
                $image=$files->getClientOriginalName();  
                $files->move('images',$image);   
                $id = DB::table('team')->insertGetId(
                ['name' => $t_name,'email' => $email,'telephone'=>$telephone,'specialization'=>$specialization,'image' => $image]
                );
              $message="One team member has been added";
            }  
           
        else{
            $message= $message ." but can't upload file";
        }
        return Redirect::back()->with('message',$message);

    }

// 2 //
    public function view_team (Request $request){
         $teams = DB::table('team')->orderBy('id', 'desc')->get();
         return view('admin.create_team',['teams'=>$teams]);
     }


// 3 //
      public function edit_team(Request $request,$id){
        $team= DB::select("select * from team where id = '$id' ");
        return view('admin.edit_team',['team'=>$team]);
    }
// 4 //
    public function update_team(Request $request)
    {
        $id= $request->input('ids');
        $t_name=$request->input('t_name');
        $email=$request->input('email');
        $telephone=$request->input('telephone');
        $specialization=$request->input('specialization');
        DB::table('team')->where('id', $id)->update(['name'=>$t_name,'email'=>$email,'specialization'=>$specialization,'telephone'=>$telephone]);
        $message = "update has been done successfully";
         return Redirect::back()->with('message',$message);
    }

// 5 //
    public function delete_t(Request $request,$id)
    {
        /* $team= DB::table('team')->where('id', '=', $id)->first();
         $image=$service->team;*/
        DB::table('team')->where('id', '=', $id)->delete();
        $message="This team member has been deleted";
        return Redirect::back()->with('message',$message);
    }


////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////*RESEARCH*////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////

// 1 //
   public function create_research (Request $request)
    {
             $s_name=$request->input('s_name');
             $description=$request->input('description');
             $image="";
             if($files=$request->file('photo')){  
                $image=$files->getClientOriginalName();  
                $files->move('images',$image);  
            } 
            $r_file="";
            if($files=$request->file('research_file')){  
                $r_file=$files->getClientOriginalName();  
                $files->move('files',$r_file);   
         
            }
                $id = DB::table('research')->insertGetId(
                ['s_name' => $s_name,'description'=>$description,'image' => $image,'file'=>$r_file]
                );

              $message="One research has been added";

      /*  else{
            $message= $message ." but can't upload file";
        }*/
        return Redirect::back()->with('message',$message);

    }
// 2 //
     public function view_research (Request $request){
         $research = DB::table('research')->orderBy('id', 'desc')->get();
         return view('admin.create_research',['research'=>$research]);
     }
// 3 //
      public function edit_research(Request $request,$id){
        $research= DB::select("select * from research where id = '$id' ");
        return view('admin.edit_research',['research'=>$research]);
    }
// 4 //
    public function update_research(Request $request)
    {
        $id= $request->input('ids');
        $s_name= $request->input('s_name');
        $description= $request->input('description');
        DB::table('research')->where('id', $id)->update(['s_name'=>$s_name,'description'=>$description]);
        $message = "تupdate has been done successfully";
         return Redirect::back()->with('message',$message);
    }
 // 5 //
    public function delete_research(Request $request,$id)
    {
          DB::table('research')->where('id', '=', $id)->delete();
        $message="This research has been deleted";
        return Redirect::back()->with('message',$message);
    }

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



}

?>