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
             <form class="form-horizontal" method="POST" action="{{url('admin/allnews/update')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit new's details </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                              <div class="panel-body">   
                              <a href="{{url('admin/allnews').'/'.$news->id.'/delete'}} " style="font-size:25px" onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
                              <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Title in English</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" value= " {{$news->title_en}}" name="title_en" class="form-control" placeholder="title in English" >                                             
                                            </div>                                            
                                            <span class="help-block">Edit title in English</span>  
                                            @error('title_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Title in Arabic</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" value= " {{$news->title_ar}}" name="title_ar" class="form-control" placeholder="title in Arabic" >                                             
                                            </div>                                            
                                            <span class="help-block">Edit title in Arabic</span>  
                                            @error('title_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                              
                              <input type="hidden" name="ids"  value="{{$news->id}}">
                                <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in English</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5"> {{$news->description_en}} </textarea>
                                            <span class="help-block">Edit description in English </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in Arabic</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5"> {{$news->description_ar}} </textarea>
                                            <span class="help-block">Edit description in Arabic </span>
                                            @error('description_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Featured Image</label>
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
                                                <input type="hidden" name="photo"  value="{{$news->featured_image}}">
                                                <a href="#"><img src=" {{ asset('/images/featuredimgnews/'.$news->featured_image) }}"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-md-2 col-12 control-label">Gallery</label>
                                            <div class="col-md-10 col-12">
                                               <input type="file" multiple class="file" name="gallery[]" data-preview-file-type="any"/>
                                               <span class="help-block"> Images & Vedios</span>
                                               @error('gallery')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
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
                
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">Images for this new</h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span></a></li>
                                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>                                
                                </div>
                                <div class="panel-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>path</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($news->images as $i)
                            <tr>
                                <td>
                                    <span>{{ $i->id }} </span>
                                </td>
                                
                                <td>
                                    <img style="width:70px;height:70px;" src=" {{ asset('/images/news_gallery/'.$i->path) }}">
                                </td>
                                 <td class="edit">
                                    <a href="{{url('admin/new-img').'/'.$i->id.'/delete'}} " onclick="return confirm( 'Are you sure you want to delete this image permanently? ')"> <span class="fas fa-trash-alt"></span></a>
                                </td>
                            </tr>
                    @endforeach
                </tbody>
                                    </table>
                                </div>
                            </div>
                         </div>
                       </div>
                     </div>

    
@endsection
