@extends('layouts.admin')
@section('title', 'Team')
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
             <form class="form-horizontal" method="POST" action="{{url('admin/teams')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Add team member </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">                                    
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name in En</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" name="name_en" class="form-control" id="name_en" placeholder="Name in english" required>                                             
                                            </div>                                            
                                            <span class="help-block">Enter member's name</span> 
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
                                                 <input type="text" name="name_ar" class="form-control" id="name_ar" placeholder="Name in arabic" required>                                             
                                            </div>                                            
                                            <span class="help-block">Enter member's name</span> 
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
                                                 <input type="text"  name="specialization_en" class="form-control" id="specialization_en" placeholder="specialization in english" required>                                       
                                            </div>                                            
                                            <span class="help-block">Enter member's specialization</span>
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
                                                 <input type="text"  name="specialization_ar" class="form-control" id="specialization_ar" placeholder="specialization in arabic" required>                                       
                                            </div>                                            
                                            <span class="help-block">Enter member's specialization</span>
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
                                                <input type="text"  name="email" class="form-control" id="email" placeholder="email" required>                                                
                                            </div>                                            
                                            <span class="help-block">Enter member's email</span>
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
                                                <input type="text"  name="telephone" class="form-control" id="telephone" placeholder="telephone" required>
                                               
                                            </div>                                            
                                            <span class="help-block">Enter member's telephone</span>
                                            @error('telephone')
                                                <small class="form-text text-danger">{{$message}}</small>
                                              @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse file"/>
                                            <span class="help-block">Personal image</span>
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
                                    <h3 class="panel-title">All members</h3>
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
                                                <th>Email</th>
                                                <th>Telephone</th>
                                                <th>Specialization</th>
                                                <th>created at</th>
                                                <th>Edit</th>

                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($teams as $t)
                            <tr>
                                <td>
                                    <span>{{ $t->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $t->name_en }} </span>
                                </td>  
                                <td>
                                    
                                    <span>{{ $t->email }} </span>
                                </td>                                <td>
                                    
                                    <span>{{ $t->telephone }} </span>
                                </td>
                                <td>
                                    <span >{{ $t->specialization_en }} </span>
                                </td>
                                <td>
                                    <span >{{ $t->created_at }} </span>
                                </td>
                                 <td class="edit">
                                    <a href="{{url('admin/teams').'/'.$t->id.'/edit'}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('admin/teams').'/'.$t->id.'/delete'}} " onclick="return confirm( 'Are you sure that you want to delete this member? ')"> <span class="fa fa-trash-o"></span></a>
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
