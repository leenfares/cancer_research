@extends('layouts.admin')
@section('title', 'Edit Research Details')
@section('content')                                                                                   
           
@if(session()->has('success'))
    <div class="alert alert-success">
       <strong>success!</strong>  {{ session()->get('success') }}
    </div>
@elseif (session()->has('fail'))
<div class="alert alert-danger">
       <strong>fail!</strong>  {{ session()->get('fail') }}
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('admin/research/update')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit research details </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">            
                                        <a href="{{url('admin/research').'/'.$research->id.'/delete'}} " style="font-size:25px" onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name in English</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="hidden" name="ids"  value="{{$research->id}}">
                                                 <input type="text" value= " {{$research->name_en}}" name="name_en" class="form-control" placeholder="name in English" >                                             
                                            </div>                                            
                                            <span class="help-block">Edit name in English</span>  
                                            @error('name_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">name in Arabic</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" value= " {{$research->name_ar}}" name="name_ar" class="form-control" placeholder="name in Arabic" >                                             
                                            </div>                                            
                                            <span class="help-block">Edit name in Arabic</span>  
                                            @error('name_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description in English</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5"> {{$research->description_en}} </textarea>
                                            <span class="help-block">Edit description in English </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description in Arabic</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5"> {{$research->description_ar}} </textarea>
                                            <span class="help-block">Edit description in Arabic </span>
                                            @error('description_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Meta Description</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="meta_desc" rows="5">{{$research->meta_desc}}   </textarea>
                                            <span class="help-block"> Meta Description </span>
                                            @error('meta_desc')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                     </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Meta Keywords</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="meta_kw" rows="5"> {{$research->meta_kw}} </textarea>
                                            <span class="help-block">Meta Keywords </span>
                                            @error('meta_kw')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo_up" id="photo_up" title="Browse image"/>
                                            <span class="help-block"> 
                                            <small class="form-text text-danger">hint!!</small>  New Image will replace the old one</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Current Image</label>
                                        <div class="col-md-6 col-12"> 
                                            <div class="cancer-image">
                                                <span class="help-block">Current Research image</span>
                                                <input type="hidden" name="photo"  value="{{$research->image}}">
                                                <a href="#"><img src=" {{ asset('/images/research/'.$research->image) }}"></a>
                                                @error('photo_up')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                              
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">File</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="s_file" id="s_file" title="Browse file"/>
                                            <span class="help-block"> 
                                            <small class="form-text text-danger">hint!!</small>  New file will replace the old one</span>
                                        </div>
                                        @error('s_file')
                                                <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-12 control-label">Current File</label>
                                </div>
                                        <object data="{{asset('/files/research/'.$research->file)}}" type="application/pdf" width="100%" height="500px">
                                          <p>Alternative text - include a link <a href=" {{ asset('/files/research/'.$research->file) }}" >to the PDF!</a></p>
                                        </object>
                               
                                <div class="panel-footer " style="text-align: center;">
                                    <button class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
 
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
    
@endsection
