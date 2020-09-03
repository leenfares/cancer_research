@extends('layouts.admin')
@section('title', 'Edit Team Member')
@section('content')                                                                                   
           
@if(session()->has('message'))
    <div class="alert alert-success">
       <strong>success!</strong>  {{ session()->get('message') }}
    </div>
@endif

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('/ed/edit_team')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
  <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit team member </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                   
                                <div class="panel-body">                                            
                                @foreach ($team as $t)
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="hidden" name="ids" value="{{$t->id}}">
                                                 <input type="text" value= " {{$t->name}}" name="t_name" class="form-control" id="t_name" placeholder="name" required>                                             
                                            </div>                                            
                                            <span class="help-block">Edit member's name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Email</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" value= " {{$t->email}}" name="email" class="form-control" id="email" placeholder="email" required>                                                
                                            </div>                                            
                                            <span class="help-block">Edit member's email</span>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Telephone</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text"  value= " {{$t->telephone}}" name="telephone" class="form-control" id="telephone" placeholder="telephone" required>
                                               
                                            </div>                                            
                                            <span class="help-block">Edit member's telephone</span>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Specialization</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                   
                                                 <input type="text"  value= " {{$t->specialization}}" name="specialization" class="form-control" id="specialization" placeholder="specialization" required>                                       
                                            </div>                                            
                                            <span class="help-block">Edit member's specialization</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12"> 
                                            <div class="cancer-image">
                                                <a href="#"><img src=" {{ asset('/images/'.$t->image) }}"></a>
                                            </div>
                                        </div>
                                    </div>
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
