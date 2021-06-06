@extends('layouts.admin')
@section('title', 'Edit partner Details')
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
             <form class="form-horizontal" method="POST" action="{{url('admin/partner/update')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit partner's details </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                              <div class="panel-body">   
                              <a href="{{url('admin/partner').'/'.$partner->id.'/delete'}} " style="font-size:25px" onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
                                <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">URL</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="url" rows="5"> {{$partner->url}} </textarea>
                                            <span class="help-block">Edit description in English </span>
                                            <input type="hidden" name="ids"  value="{{$partner->id}}">
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                
                                <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in English</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5"> {{$partner->description_en}} </textarea>
                                            <span class="help-block">Edit description in English </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in Arabic</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5"> {{$partner->description_ar}} </textarea>
                                            <span class="help-block">Edit description in Arabic </span>
                                            @error('description_ar')
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
                                                <span class="help-block">Current Personal image</span>
                                                <input type="hidden" name="photo"  value="{{$partner->image}}">
                                                <a href="#"><img src=" {{ asset('/images/partners/'.$partner->image) }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                <div class="panel-footer " style="text-align: center;">
                                    <button class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
 
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
    
@endsection
