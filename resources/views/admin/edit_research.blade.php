@extends('layouts.admin')
@section('title', 'Edit Research')
@section('content')                                                                                   
           
@if(session()->has('message'))
    <div class="alert alert-success">
       <strong>success!</strong>  {{ session()->get('message') }}
    </div>
@endif

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('/ed/edit_research')}}" enctype="multipart/form-data" id="add_service">
                          @csrf
                     <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Edit Research </strong> </h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                              <div class="panel-body">  
                            @foreach ($research as $r)
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Name</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="hidden" name="ids" value="{{$r->id}}">
                                                 <input type="text" name="s_name"  value="{{$r->s_name}}" class="form-control" id="s_name"  required>                                             
                                            </div>                                            
                                            <span class="help-block">Edit research's name</span>
                                        </div>
                                    </div>
                                 <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description </label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control" placeholder="description" name="description" id="description" rows="5">
                                                    {{$r->description}}
                                            </textarea>
                                            <span class="help-block">Edit Description</span>
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
