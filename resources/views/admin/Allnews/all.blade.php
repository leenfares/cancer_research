<style>
.form-horizontal .control-label{
    text-align:left !important;
}
td{
    font-size:12px !important;
}
</style>
@extends('layouts.admin')
@section('title', 'News')
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
<!-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('admin/allnews')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add News </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                    
                                    <div class="form-group">
                                        <label class="col-md-2 col-12 control-label"> Title in En</label>
                                        <div class="col-md-10 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text"  name="title_en" class="form-control" id="title_en" placeholder="Title in english" >                                             
                                            </div>                                            
                                            <span class="help-block"> new's title</span>  
                                            @error('title_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-12 control-label"> Title in Ar</label>
                                        <div class="col-md-10 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text"  name="title_ar" class="form-control" id="title_en" placeholder="Title in Arabic" >                                             
                                            </div>                                            
                                            <span class="help-block"> new's title</span>  
                                            @error('title_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-12 control-label">Description in En</label>
                                        <div class="col-md-10 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5">  </textarea>
                                            <span class="help-block"> Partner's description </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-12 control-label">Description in Ar</label>
                                        <div class="col-md-10 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5">  </textarea>
                                            <span class="help-block"> Partner's description </span>
                                            @error('description_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-2 col-12 control-label">Featured Image</label>
                                        <div class="col-md-10 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse Image"/>
                                            <span class="help-block"> New's Image</span>
                                            @error('photo')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
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
                                    <h3 class="panel-title">All News</h3>
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
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>created at</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($Allnews as $a)
                            <tr>
                                <td>
                                    <span>{{ $a->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $a->title_en }} </span>
                                </td>  
                                <td>
                                    
                                    <span>{{ $a->description_en }} </span>
                                </td>                            
                                
                                <td>
                                    <span >{{ $a->created_at }} </span>
                                </td>
                                 <td class="edit">
                                    <a href="{{url('admin/allnews').'/'.$a->id.'/edit'}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('news/'.$a->id)}}"> <span class="fa fa-eye"></span></a>
                                    <a href="{{url('admin/allnews').'/'.$a->id.'/delete'}} " onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
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
