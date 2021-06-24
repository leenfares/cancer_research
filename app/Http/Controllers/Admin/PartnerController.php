<?php

namespace App\Http\Controllers\Admin;

use App\models\Partner;
use Illuminate\Http\Request;
use App\Traits\FileTrait;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use FileTrait;

    public function index()
    {
        $partners=Partner::get();
        return view('admin.Partner.all',['partners'=>$partners]);
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
        $rules = $this->getRules();
        $messages = $this->getMessages();
        $validator = Validator::make($request->all() ,$rules, $messages);
        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }

        $image = $this->saveFile($request->photo, 'images/partners');
        Partner::create([
            'description_en' =>   $request->description_en,
            'description_ar' =>   $request->description_ar,
            'image' => $image,
            'url' => $request->url,
        ]);
        return Redirect::back()->with(['success' =>'One partner has been added']);
    
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
        $partner = Partner::find($id);
        return view('admin.partner.edit',['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $partner = Partner::find($request->ids);
        if(!$partner)
           return Redirect::back()->with(['fail'=>'item was not found']);        
        $partner->description_en = $request->description_en; 
        $partner->description_ar = $request->description_ar; 
        if ($request->photo_up){
            $path = public_path('images/partners/'.$partner->image);
            if(is_file($path))
                unlink($path);
            $image = $this->saveFile($request->photo_up, 'images/partners');            
            $partner->image = $image;   
        }
        $partner->save();
        return Redirect::back()->with(['success'=>'updating has been done successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);
        if(!$partner)
        return redirect('admin/partner')->with(['fail'=>'item was not found']); 
        $image = public_path('images/partners/'.$partner->image);
        if(is_file($image)){
            unlink($image);
        }
        $partner->delete();  
        return redirect('admin/partner')->with(['success'=>'deleting has been done successfully']);  
    }

    protected function getMessages()
    {

        return $messages = [
            'description_en.required' =>'السعر مطلوب',
            'description_ar.required' => 'السعر مطلوب',
            'url.required' => 'ألتفاصيل مطلوبة ',
        ];
    }

    protected function getRules()
    {

        return $rules = [
            'description_ar' => 'required',
            'description_en' => 'required',
            'url' => 'required',
        ];
    }
}
