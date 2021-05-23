<?php

namespace App\Http\Controllers\Admin;

use App\models\Research;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
// use App\Http\Requests\ResearchRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

use File;


class ResearchController extends Controller
{

    //to save file in place
    use FileTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $researchs=Research::get();
        return view('admin.Research.all',['researchs'=>$researchs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $image = $this->saveFile($request->photo, 'images/research');
        $paper = $this->saveFile($request->s_file, 'files/research');
        Research::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' =>   $request->description_en,
            'description_ar' =>   $request->description_ar,
            'image' => $image,
            'file' => $paper,
        ]);
        return Redirect::back()->with(['success' =>'One team member has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $research = Research::find($id);
      return view('admin.research.edit',['research'=>$research]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $research = Research::find($request->ids);
        if(!$research)
           return Redirect::back()->with(['fail'=>'item was not found']);        
        $research->name_en = $request->name_en;
        $research->name_ar = $request->name_ar;
        $research->description_en = $request->description_en; 
        $research->description_ar = $request->description_ar; 
        if ($request->photo_up){
            $path = public_path('images/research/'.$research->image);
            if(is_file($path))
                unlink($path);
            $image = $this->saveFile($request->photo_up, 'images/research');            
            $research->image = $image;   
        }
               
        if ($request->s_file){
            $path = public_path('files/research/'.$research->file);
            if(is_file($path))
                unlink($path);
            $file = $this->saveFile($request->s_file, 'files/research');            
            $research->file = $file;
        }
        $research->save();
        return Redirect::back()->with(['success'=>'updating has been done successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $research = Research::find($id);
        if(!$research)
        return redirect('admin/research')->with(['fail'=>'item was not found']); 
        $image = public_path('images/research/'.$research->image);
        if(is_file($image)){
            unlink($image);
        }
           $file = public_path('files/research/'.$research->file);
           if(is_file($file)){
            unlink($file);
        }
        $research->delete();  
        return redirect('admin/teams')->with(['success'=>'deleting has been done successfully']);  
        
    }
}
