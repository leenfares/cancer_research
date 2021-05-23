<?php

namespace App\Http\Controllers\Admin;

use App\models\Team;
use App\Traits\FileTrait;
use App\Http\Requests\TeamRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use File;

class TeamController extends Controller
{
    use FileTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::get();
        return view('admin.Team.all',['teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "create";
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request)
    {
        $image = $this->saveFile($request->photo, 'images/teams');
        Team::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'specialization_en' =>  $request->specialization_en,
            'specialization_ar' =>  $request->specialization_ar,
            'email' =>   $request->email,
            'telephone' =>  $request->telephone,
            'image' => $image,
        ]);
        return Redirect::back()->with(['success' =>'One team member has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
        return "show";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $team = Team::find($id);
      return view('admin.team.edit',['team'=>$team]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request)
    {
        $team = Team::find($request->ids);
        if(!$team)
           return Redirect::back()->with(['fail'=>'item was not found']);        
        $team->name_en = $request->name_en;
        $team->name_ar = $request->name_ar;
        $team->email = $request->email;
        $team->telephone = $request->telephone;
        $team->specialization_en = $request->specialization_en;   
        $team->specialization_ar = $request->specialization_ar;   
        if ($request->photo_up){
            $path = public_path('images/teams/'.$team->image);
            if(is_file($path))
                unlink($path);
            $image = $this->saveFile($request->photo_up, 'images/teams');            
            $team->image = $image;
            $request->photo_up;
        }
        $team->save();
        return Redirect::back()->with(['success'=>'updating has been done successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        if(!$team)
        return redirect('admin/teams')->with(['fail'=>'item was not found']); 
        $path = public_path('images/teams/'.$team->image);
        if(is_file($path)){
           unlink($path);
        }
        $team->delete();  
        return redirect('admin/teams')->with(['success'=>'deleting has been done successfully']);  
    }
}
