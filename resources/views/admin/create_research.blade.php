@extends('layouts.admin')
@section('title', 'Create Research')
@section('content')                                                                                   
           
@if(session()->has('message'))
    <div class="alert alert-success">
       <strong>success!</strong>  {{ session()->get('message') }}
    </div>
@endif

     <div class="page-content-wrap">
            <div class="row">
             <div class="col-md-12">
             <form class="form-horizontal" method="POST" action="{{url('/ad/add_research')}}" enctype="multipart/form-data" id="add_service">
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
                                        <label class="col-md-3 col-12 control-label">Name</label>
                                        <div class="col-md-6 col-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                 <input type="text" name="s_name" class="form-control" id="s_name"  required>                                             
                                            </div>                                            
                                            <span class="help-block">Enter research's name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Description </label>
                                        <div class="col-md-6 col-12">                                            
                                            <textarea class="form-control" placeholder="description" name="description" id="description" rows="5"></textarea>
                                            <span class="help-block">Description</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">Image</label>
                                        <div class="col-md-6 col-12">  
                                            <input type="file" class="fileinput btn-primary" name="photo" id="photo" title="Browse file"/>
                                            <span class="help-block">Research image</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-12 control-label">file</label>
                                        <div class="col-md-6 col-12">  
                                            <input type="file" class="fileinput btn-primary" name="research_file" id="research_file" title="Browse file"/>
                                            <span class="help-block">Research file</span>
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
                                                <th>Description</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($research as $r)
                            <tr>
                                <td>
                                    <span>{{ $r->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $r->s_name }} </span>
                                </td>  
                                <td>
                                    <span>{{ $r->description }} </span>
                                </td>                              
                              <td class="edit">
                                    <a href="{{url('dashboard/edit_research').'/'.$r->id}}"> <span class="fa fa-edit"></span></a>
                                    <a href="{{url('dashboard/delete_research').'/'.$r->id}} "onclick="return confirm( 'Are you sure that you want to delete this member? ')"> <span class="fa fa-trash-o"></span></a>
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
