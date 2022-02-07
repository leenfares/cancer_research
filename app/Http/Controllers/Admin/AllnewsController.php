<?php

namespace  App\Http\Controllers\Admin;

use App\models\News;
use App\models\Image;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use File;


class AllnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use FileTrait;

    public function index()
    {
        $Allnews=News::get();
        return view('admin.Allnews.all',['Allnews'=>$Allnews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =$this->createRules();
        $messages=$this->createMessages();
        $request->validate($rules, $messages);
        $image = $this->saveFile($request->photo, 'images/featuredimgnews');        
        $report=News::create([
            'title_en' => $request->title_en,
            'title_ar' => $request->title_ar,
            'description_en' =>   $request->description_en,
            'description_ar' =>   $request->description_ar,
            // 'meta_desc'=>$request->meta_desc,
            //'meta_kw'=>$request->meta_kw,
            'featured_image' => $image,
        ]);
        $i=0;
        foreach($request->gallery as $photo){
            $image = $this->saveGallery($photo,'images/news_gallery',$i);    
            Image::create([
            'path'=>$image,
            'news_id'=>$report->id
            ]);
            $i++;
        }        
        return Redirect::back()->with(['success' =>'One new has been added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        if(!$news)
        return redirect('admin/allnews')->with(['fail'=>'new was not found']); 
        $image = public_path('images/featuredimgnews/'.$news->featured_image);
        if(is_file($image)){
            unlink($image);
        }
        foreach(News::find($id)->images as $image){
            $photo = public_path('images/news_gallery/'.$image->path);
            if(is_file($photo)){
               unlink($photo);
            }
            Image::find($image->id)->delete();
         }
        $news->delete();  
        return redirect('admin/allnews')->with(['success'=>'deleting has been done successfully']);  
    }


    /////////////////////////  validation messages and  rules ////////////////

    public function createRules()
    {
        return [
            'title_en' => 'required|max:255',
            'title_ar' => 'required|max:255',
            'description_en' => 'required',
            'description_ar' => 'required',
            'photo' => 'mimes:png,jpg,jpeg|required',
          //  'meta_desc'=>'required|max:150',
           // 'meta_kw'=>'required',
        ];
    }
    public function createMessages()
    {
        return  [
            'title_en.required' => 'title is required',
            'title_en.max' => 'title length does not be more than 255',
            'title_ar.required' => 'title is required',
            'title_ar.max' => 'title length does not be more than 255',
            'description_en.required' => 'Description is required',
            'description_ar.required' => 'Description is required',
            'photo.required' => 'Photo is required',
            'photo.mimes' =>  'Only png, jpg and jpeg files are allowable',
            //'meta_desc.required'=>'Meta description is required',
            //'meta_desc.max'=>'Meta description length does not be more than 150',
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
           // 'meta_desc'=>'required|max:150',
            //'meta_kw'=>'required',
        

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
           // 'meta_desc.required'=>'Meta description is required',
            //'meta_desc.max'=>'Meta description length dose not be more than 150',
            //'meta_kw.required'=>'Meta keywords is required',
        ];
    }
}

