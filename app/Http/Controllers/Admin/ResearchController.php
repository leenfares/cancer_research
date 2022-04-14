<?php

namespace App\Http\Controllers\Admin;

use App\models\Research;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use File;

class ResearchController extends Controller
{

    //to save file in place
    use FileTrait;

    public function index()
    {
        $researchs=Research::get();
        return view('admin.Research.all',['researchs'=>$researchs]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $rules =$this->createRules();
        $messages=$this->createMessages();
        $request->validate($rules, $messages);
        $image = $this->saveFile($request->photo, 'images/research');
        // $paper = $this->saveFile($request->s_file, 'files/research');
        Research::create([
            'name_en' => $request->name_en,
            'name_ar' => $request->name_ar,
            'description_en' =>   $request->description_en,
            'description_ar' =>   $request->description_ar,
            'meta_desc'=>$request->meta_desc,
            'meta_kw'=>$request->meta_kw,
            'image' => $image,
            // 'file' => $paper,
        ]);
        return Redirect::back()->with(['success' =>'One team member has been added']);
    }

    public function show(Research $research)
    {
        //
    }

    public function edit($id)
    {
      $research = Research::find($id);
      return view('admin.research.edit',['research'=>$research]);
    }

    public function update(Request $request)
    { 
        $rules =$this->updateRules();
        $messages=$this->updateMessages();
        $request->validate($rules, $messages);
        $research = Research::find($request->ids);
        if(!$research)
           return Redirect::back()->with(['fail'=>'item was not found']);        
        $research->name_en = $request->name_en;
        $research->name_ar = $request->name_ar;
        $research->description_en = $request->description_en; 
        $research->description_ar = $request->description_ar; 
        $research->meta_desc = $request->meta_desc; 
        $research->meta_kw = $request->meta_kw; 
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

    /////////////////////////  validation messages and  rules ////////////////

    public function createRules()
    {
        return [
            'name_en' => 'required|max:250',
            'name_ar' => 'required|max:250',
            'description_en' => 'required',
            'description_ar' => 'required',
            'photo' => 'mimes:png,jpg,jpeg|required',
            // 's_file'=>'mimes:pdf|required',
            's_file'=>'mimes:pdf',
            'meta_desc'=>'max:150',
            // 'meta_kw'=>'required',
        ];
    }
    public function createMessages()
    {
        return  [
            'name_en.required' => 'Name is required',
            'name_en.max' => 'Name length does not be more than 250',
            'name_ar.required' => 'Name is required',
            'name_ar.max' => 'Name length does not be more than 250',
            'description_en.required' => 'Description is required',
            'description_ar.required' => 'Description is required',
            'photo.required' => 'Photo is required',
            'photo.mimes' =>  'Only png, jpg and jpeg files are allowable',
            // 's_file.required'=>'File is not valid',
            's_file.mimes' =>  'Only pdf files are allowable',
            // 'meta_desc.required'=>'Meta description is required',
            'meta_desc.max'=>'Meta description length does not be more than 150',
            // 'meta_kw.required'=>'Meta keywords is required',
        ];
    }
    public function updateRules()
    {
        return  [
            'name_en' => 'required|max:250',
            'name_ar' => 'required|max:250',
            'description_en' => 'required',
            'description_ar' => 'required',
            'photo_up' => 'mimes:png,jpg,jpeg',
            's_file'=>'mimes:pdf',
            // 'meta_desc'=>'required|max:150',
            'meta_desc'=>'max:150',
            // 'meta_kw'=>'required',
        

        ];
    }
    public function updateMessages()
    {
        return [
            'name_en.required' => 'Name is required',
            'name_en.max' => 'Name length dose not be more than 250',
            'name_ar.required' => 'Name is required',
            'name_ar.max' => 'Name length dose not be more than 250',
            'description_en.required' => 'Description is required',
            'description_ar.required' => 'Description is required',
            'photo_up.mimes' =>  'Only png, jpg and jpeg files are allowable',
            's_file.mimes' =>  'Only pdf files are allowable',
            // 'meta_desc.required'=>'Meta description is required',
            'meta_desc.max'=>'Meta description length dose not be more than 150',
            // 'meta_kw.required'=>'Meta keywords is required',
        ];
    }
}
