<!DOCTYPE html>
<html lang="en">
    <head>        
      
          <title> Admin | @yield('title')</title>          
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />   
       <link rel="stylesheet"  type="text/css" id="theme" href=" {{ url('/admin/css/theme-default.css') }}" >
       <link rel="stylesheet" href="{{ url('/fontawesome/css/all.css')}}">
       <link rel="icon" href=" {{ url('/images/front/favicon.ico') }}" type="image/x-icon" />
       
       </head>
       <body>
       
        <div class="page-container">
            <div class="page-sidebar">
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a  href="/" > CRC</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Navigation</li>
                    <li>
                        <a href="{{ url('/admin/panel')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
                    </li>    
                    <li>
                        <a href="{{ url('/admin/allnews')}}"><span class="fa fa-newspaper"></span> <span class="xn-text"> All News</span></a>
                    </li>      
                    <li>
                        <a href="{{ url('/admin/teams')}}"><span class="fa fa-users"></span> <span class="xn-text"> Team</span></a>
                    </li>   
                    <li>
                    <a href="{{ url('/admin/research')}}"><span class="fa fa-university"></span> <span class="xn-text"> Research</span></a>
                    </li> 
                    <li>
                  <a href="{{ url('/admin/partner')}}"> <span class="fa fa-handshake"></span> <span class="xn-text"> Partner</span></a>
                    </li>    
                   <li>
                        <a href="{{ url('/admin/users')}}"><span class="fa fa-user"></span> <span class="xn-text">Users</span></a>
                    </li>    
                     <li>
                        <a href="{{ url('/admin/roles')}}"><span class="fa fa-lock"></span> <span class="xn-text">Roles</span></a>
                    </li>                                         
                </ul>
            </div>

            <div class="page-content">
                
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>   
                    <li class="nav-item dropdown" style="float:right">
                                <!-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a> -->

                                <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                <!-- </div> -->
                            </li>               
                </ul>
                @yield('content')
            </div>            
        </div>
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!--  -->
        <script type="text/javascript" src="{{ url('/admin/js/plugins.js')}}"></script>        
        <script type="text/javascript" src="{{ url('/admin/js/actions.js')}}"></script>   
        <script type="text/javascript" src="{{ url('/admin/js/settings.js')}}"></script>
        
        <script type='text/javascript' src="{{ url('/admin/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>

        <script type="text/javascript" src="{{ url('/admin/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>    
      
<!-- from views -->
 

        <script type='text/javascript' src="{{ url('/admin/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
        
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-datepicker.js')}}"></script>                
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-file-input.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/bootstrap/bootstrap-select.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <script type="text/javascript" src="{{ url('/admin/js/plugins/fileinput/fileinput.min.js')}}"></script>        
    </body>
</html>






