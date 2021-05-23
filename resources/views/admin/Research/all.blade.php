@extends('layouts.admin')
@section('title', 'Research')
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

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('admin/research')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add Research </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">                                    
                                   <div class="form-group">
                                        <label class="col-md-3 col-12 control-label"> Name in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text"  name="name_en" class="form-control" id="name_en" placeholder="name in english" >                                             
                                            </div>                                            
                                            <span class="help-block"> Research's name</span>  
                                            @error('name_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label"> Name in Ar</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text"  name="name_ar" class="form-control" id="name_ar" placeholder="name in arabic" >                                             
                                            </div>                                            
                                            <span class="help-block"> Research's name</span>  
                                            @error('name_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5">  </textarea>
                                            <span class="help-block">Edit research's description </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Description in Ar</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5">  </textarea>
                                            <span class="help-block">Edit research's description </span>
                                            @error('description_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse Image"/>
                                            <span class="help-block"> Research's Image</span>
                                            @error('photo')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">File</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="s_file" id="s_file" title="Browse file"/>
                                            <span class="help-block"> Research's File</span>
                                            @error('s_file')
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
                                    <h3 class="panel-title">All Research</h3>
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
                                                <th>Name</th>
                                                <th>description</th>
                                                <th>created at</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($researchs as $r)
                            <tr>
                                <td>
                                    <span>{{ $r->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $r->name_en }} </span>
                                </td>  
                                <td>
                                    
                                    <span>{{ $r->description_en }} </span>
                                </td>                            
                                
                                <td>
                                    <span >{{ $r->created_at }} </span>
                                </td>
                                 <td class="edit">
                                    <a href="{{url('admin/research').'/'.$r->id.'/edit'}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('admin/research').'/'.$r->id.'/delete'}} " onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fa fa-trash-o"></span></a>
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
