@extends('layouts.admin')
@section('title', 'Partner')
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
             <form class="form-horizontal" method="POST" action="{{url('admin/partner')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add partner </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                    
                                <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">URL</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="url" rows="5">  </textarea>
                                            <span class="help-block"> Partner's URL </span>
                                            @error('url')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_en" rows="5">  </textarea>
                                            <span class="help-block"> Partner's description </span>
                                            @error('description_en')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description in Ar</label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control"  name="description_ar" rows="5">  </textarea>
                                            <span class="help-block"> Partner's description </span>
                                            @error('description_ar')
                                                <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse Image"/>
                                            <span class="help-block"> Partner's Image</span>
                                            @error('photo')
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
                                                <th>URL</th>
                                                <th>Description</th>
                                                <th>created at</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($partners as $r)
                            <tr>
                                <td>
                                    <span>{{ $r->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $r->url }} </span>
                                </td>  
                                <td>
                                    
                                    <span>{{ $r->description_en }} </span>
                                </td>                            
                                
                                <td>
                                    <span >{{ $r->created_at }} </span>
                                </td>
                                 <td class="edit">
                                    <a href="{{url('admin/partner').'/'.$r->id.'/edit'}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('admin/partner').'/'.$r->id.'/delete'}} " onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
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
