<?php

namespace App\Http\Controllers\Admin;

use App\models\Team;
use App\Traits\FileTrait;
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
    public function store(Request $request)
    {
        // return  $request->input('is_on_homepage');
        $rules =$this->createRules();
        $messages=$this->createMessages();
        $request->validate($rules, $messages);
        $image = $this->saveFile($request->photo, 'images/teams');
        $is_on_homepage=0;
        if(isset($request->is_on_homepage)){
            $is_on_homepage=1;
        }
        // return $is_on_homepage;
        $meta_desc=" ";
        if(isset($request->meta_desc)){
            $meta_desc=$request->meta_desc;
        }
        $meta_kw=" ";
        if(isset($request->meta_kw)){
            $meta_desc=$request->meta_kw;
        }
        Team::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'specialization_en' =>  $request->specialization_en,
            'specialization_ar' =>  $request->specialization_ar,
            'email' =>   $request->email,
            'telephone' =>  $request->telephone,
            'image' => $image,
            'is_on_homepage'=>$is_on_homepage,
            'meta_desc'=> $meta_desc,
            'meta_kw'=>$meta_kw,
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
      $team = Team::findOrFail($id);
      return view('admin.team.edit',['team'=>$team]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules =$this->updateRules();
        $messages=$this->updateMessages();
        $request->validate($rules, $messages);
        $is_on_homepage=0;
        if(isset($request->is_on_homepage)){
            $is_on_homepage=1;
        }
        $team = Team::find($request->ids);
        if(!$team)
           return Redirect::back()->with(['fail'=>'item was not found']);        
        $team->name_en = $request->name_en;
        $team->name_ar = $request->name_ar;
        $team->email = $request->email;
        $team->telephone = $request->telephone;
        $team->is_on_homepage=$is_on_homepage;
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
        $team = Team::findOrFail($id);
        if(!$team)
        return redirect('ad min/teams')->with(['fail'=>'item was not found']); 
        $path = public_path('images/teams/'.$team->image);
        if(is_file($path)){
           unlink($path);
        }
        $team->delete();  
        return redirect('admin/teams')->with(['success'=>'deleting has been done successfully']);  
    }
    /////////////////////////  validation messages and  rules ////////////////

    public function createRules()
    {
        return [
            'name_en' => 'required|max:50',
            'name_ar' => 'required|max:50',
            'specialization_en' =>'required|max:70',
            'specialization_ar' =>'required|max:70',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'photo' => 'mimes:png,jpg,jpeg|required',
            'meta_desc'=>'max:150',
            // 'meta_desc'=>'required|max:150',
            // 'meta_kw'=>'required',
        ];
    }
    public function createMessages()
    {
        return  [
            'name_en.required' => 'Name is required',
            'name_en.max' => 'Name length does not be more than 50 characters',
            'name_ar.required' => 'Name is required',
            'name_ar.max' => 'Name length does not be more than 50 characters',
            'specialization_en.required' => 'Specialization is required',
            'specialization_en.max' => 'Specialization length does not be more than 70 characters',
            'specialization_ar.max' => 'Specialization length does not be more than 70 characters',
            'specialization_ar.required' => 'Specialization is required',
            'photo.required' => 'Photo is required',
            'photo.mimes' =>  'Only png, jpg and jpeg files are allowable',
            // 'meta_desc.required'=>'Meta description is required',
            'meta_desc.max'=>'Meta description length does not be more than 150',
            // 'meta_kw.required'=>'Meta keywords is required',
        ];
    }
    public function updateRules()
    {
        return  [
            'name_en' => 'required|max:50',
            'name_ar' => 'required|max:50',
            'specialization_en' =>'required|max:70',
            'specialization_ar' =>'required|max:70',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'photo_up' => 'mimes:png,jpg,jpeg',
            // 'meta_desc'=>'required|max:150',
            'meta_desc'=>'max:150',
            // 'meta_kw'=>'required',
      
        ];
    }
    public function updateMessages()
    {
        return [
            'name_en.required' => 'Name is required',
            'name_en.max' => 'Name length does not be more than 50 characters',
            'name_ar.required' => 'Name is required',
            'name_ar.max' => 'Name length does not be more than 50 characters',
            'specialization_en.required' => 'Specialization is required',
            'specialization_en.max' => 'Specialization length does not be more than 70 characters',
            'specialization_ar.max' => 'Specialization length does not be more than 70 characters',
            'specialization_ar.required' => 'Specialization is required',
            'photo_up.mimes' =>  'Only png, jpg and jpeg files are allowable',
            // 'meta_desc.required'=>'Meta description is required',
            'meta_desc.max'=>'Meta description length does not be more than 150',
            // 'meta_kw.required'=>'Meta keywords is required',
        ];
    }
    
}

