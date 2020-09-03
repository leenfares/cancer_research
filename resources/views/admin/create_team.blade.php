@extends('layouts.admin')
@section('title', 'team')
@section('content')                                                                                   
           
@if(session()->has('message'))
    <div class="alert alert-success">
       <strong>success!</strong>  {{ session()->get('message') }}
    </div>
@endif

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('/ad/add_team')}}" enctype="multipart/form-data" id="add_service">
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
                                        <label class="col-md-3 col-12 control-label">Name</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" name="t_name" class="form-control" id="t_name" placeholder="name" required>                                             
                                            </div>                                            
                                            <span class="help-block">Enter member's name</span>
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
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Specialization</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text"  name="specialization" class="form-control" id="specialization" placeholder="specialization" required>                                       
                                            </div>                                            
                                            <span class="help-block">Enter member's specialization</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">                                                                                                                                        
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse file"/>
                                            <span class="help-block">Personal image</span>
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
                                    
                                    <span>{{ $t->name }} </span>
                                </td>  
                                <td>
                                    
                                    <span>{{ $t->email }} </span>
                                </td>                                <td>
                                    
                                    <span>{{ $t->telephone }} </span>
                                </td>
                                <td>
                                    <span >{{ $t->specialization }} </span>
                                </td>
                                 <td class="edit">
                                    <a href="{{url('dashboard/edit_team').'/'.$t->id}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('dashboard/delete_team').'/'.$t->id}} "onclick="return confirm( 'Are you sure that you want to delete this member? ')"> <span class="fa fa-trash-o"></span></a>
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
