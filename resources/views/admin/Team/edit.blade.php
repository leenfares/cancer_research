@extends('layouts.admin')
@section('title', 'Edit Team Member')
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
             <form class="form-horizontal" method="POST" action="{{url('admin/teams/update')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit team member </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">            
                                        <a href="{{url('admin/teams').'/'.$team->id.'/delete'}} " style="font-size:25px" onclick="return confirm( 'Are you sure that you want to delete this member? ')"> <span class="fas fa-trash-alt"></span></a>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="hidden" name="ids"  value="{{$team->id}}">
                                                 <input type="text" value= " {{$team->name_en}}" name="name_en" class="form-control"  >                                             
                                            </div>                                            
                                            <span class="help-block">Edit member's name</span>  
                                            @error('name_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name in Ar</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" value= " {{$team->name_ar}}" name="name_ar" class="form-control" >                                             
                                            </div>                                            
                                            <span class="help-block">Edit member's name</span>  
                                            @error('name_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Specialization in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   
                                                 <input type="text"  value= " {{$team->specialization_en}}" name="specialization_en" class="form-control"  >                                       
                                            </div>                                            
                                            <span class="help-block">Edit member's specialization</span>
                                            @error('specialization_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Specialization in Ar</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   
                                                 <input type="text"  value= " {{$team->specialization_ar}}" name="specialization_ar" class="form-control"  >                                       
                                            </div>                                            
                                            <span class="help-block">Edit member's specialization</span>
                                            @error('specialization_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Email</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value= " {{$team->email}}" name="email" class="form-control" id="email" placeholder="email" >                                                
                                            </div>                                            
                                            <span class="help-block">Edit member's email</span>
                                            @error('email')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Telephone</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  value= " {{$team->telephone}}" name="telephone" class="form-control" id="telephone" placeholder="telephone" >
                                               
                                            </div>                                            
                                            <span class="help-block">Edit member's telephone</span>
                                            @error('telephone')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Meta Description</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="meta_desc" rows="5">  </textarea>
                                            <span class="help-block"> Meta description </span>
                                            @error('meta_desc')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Meta Keywords</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="meta_kw" rows="5">  </textarea>
                                            <span class="help-block"> Meta Keywords </span>
                                            @error('meta_kw')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo_up" id="photo_up" title="Browse file"/>
                                            <span class="help-block"> 
                                            <small class="form-text text-danger">hint!!</small>  New Image will replace the old one</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Current Image</label>
                                        <div class="col-md-6 col-12"> 
                                            <div class="cancer-image">
                                                <span class="help-block">Current Personal image</span>
                                                <input type="hidden" name="photo"  value="{{$team->image}}">
                                                <a href="#"><img src=" {{ asset('/images/teams/'.$team->image) }}"></a>
                                                @error('photo_up')
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
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
