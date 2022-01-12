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
             <form class="form-horizontal" method="POST" action="{{url('admin/roles/update')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Roles details </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">            
                                        <a href="{{url('admin/roles').'/'.$role->id.'/delete'}} " style="font-size:25px" onclick="return confirm( 'Are you sure that you want to delete this research? ')"> <span class="fas fa-trash-alt"></span></a>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label" style="text-align:left;">Role' name</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa-pencil"></span></span>
                                                 <input type="hidden" name="ids"  value="{{$role->id}}">
                                                 <input type="text" value= " {{$role->name}}" name="name" class="form-control" placeholder="name " required>                                             
                                            </div>                                            
                                            <span class="help-block">Edit Role's name</span>  
                                        </div>
                                    </div>
                               @foreach ($permissions as $p)
                                  <div class="col-lg-3 col-md-4 col-sm6 col-xs-12">
                                    <input  name="permissions[]" type="checkbox" value="{{$p->id}}" {{ in_array($p->id,$rolePermissions) ? 'checked' : '' }} /> {{ $p->name }}
                                 </div>
                                    @endforeach
                                   
                                <div class="panel-footer " style="text-align: center;">
                                    <button class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
 
                            </form>
                            
                            
                        </div>
                    </div>                    
                    
                </div>
    
@endsection
