@extends('layouts.admin')
@section('title', 'roles')
@section('content') 
                 <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="panel panel-default">
                                <div class="panel-heading">                                
                                    <h3 class="panel-title">All roles</h3>
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
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                   <tbody>
                           @foreach ($roles as $t)
                            <tr>
                                <td>
                                    <span>{{ $t->id }} </span>
                                </td>
                                <td>
                                    
                                    <span>{{ $t->name }} </span>
                                </td>  
                                 <td class="edit">
                                    <a href="#"> <span class="fa fa-edit"></span></a>
                                    <a href="#"onclick="return confirm( 'Are you sure that you want to delete this role? ')"> <span class="fa fa-trash-o"></span></a>
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

      
        


        <script type='text/javascript' src="{{ url('/admin/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>


    
@endsection
