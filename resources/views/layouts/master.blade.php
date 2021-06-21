<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


  <head>
     {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=" {{ url('/css/bootstrap/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if(App::getLocale() == 'ar')
    <link rel="stylesheet" href=" {{ url('/css/stylesheet_ar.css') }}">
    @else
    <link rel="stylesheet" href=" {{ url('/css/stylesheet.css') }}">
    @endif
    <link rel="icon" href=" {{ url('/images/front/Logo-sq.png') }}"  type="image/gif" sizes="16x16">
      <title>  @yield('title')</title>
    </head>
  <body>




 <header class="header inside-head" style="background: url({{ asset('/images/front/c0d3c04f52dbebb886cbf8e34b229df4.jpg') }}) center top; background-repeat: no-repeat; background-size: cover;">
 <div class="info">
  <div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
      <div class="location">
        <i class="fa fa-map-marker">&nbsp;</i> Lattakia - Syria
      </div>
    </div>   
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 mail-gency">
      <div class="email">
        <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:crc@tishreen.edu.sy">  crc@tishreen.edu.sy  </a>
      </div>
      <div class="emergency">
        <i class="fa fa-phone"></i>&nbsp;<a href="#"> + 0963 933 319 805</a>
      </div>
    </div>    
    <div class="col-lg-3 col-md-3 col-sm-12 col-12">
      <ul class="social-menu list-inline">
         <li class="list-inline-item"> <a href="#"> <i class="fa fa-linkedin"></i></a></li>
        <li  class="list-inline-item"> <a href="#"><i class="fa fa-facebook"></i></a> </li>
        <li class="list-inline-item"> <a href="#"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item"> <a href="#"> <i class="fa fa-instagram"></i></a></li>
      </ul>
    </div> 
   </div>
  </div>
 </div>
 @include('layouts.nav')
  </header>

<!-- 

<div class="sub-nav">
  <div class="container">
      <ul class="social-menu list-inline">
         <li class="list-inline-item"> <a href="index.html"> Home</a></li><span>/</span>
         <li class="list-inline-item"> <a href="index.html"> About</a></li>
      </ul>   
</div>
</div> -->





@yield('content')

<footer id="footer">
<div class="footer-social">
  <div class="container">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
       <form class="form-inline">
         <div class="form-group mb-2">
            <input type="text" class="email form-control" id="email" placeholder="{{__('messages.foot_em')}} ">
          </div>       
         <button type="submit" class="btn mb-2"><i class="fa fa-envelope"></i></button>
       </form>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12 col-12"> 
      <ul class="social-menu list-inline">
         <li class="list-inline-item"> <a href="#"> <i class="fa fa-linkedin"></i></a></li>
        <li  class="list-inline-item"> <a href="#"><i class="fa fa-facebook"></i></a> </li>
        <li class="list-inline-item"> <a href="#"><i class="fa fa-twitter"></i></a></li>
        <li class="list-inline-item"> <a href="#"> <i class="fa fa-instagram"></i></a></li>
      </ul>    
     </div>      
    </div>
  </div>
</div>
<div class="quik-links">
  <div class="container">
   <div class="row">
     <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
   <a class="logo" href="#"><img src="{{ asset('/images/front/logo-sq.png') }}"></a>
     
         <p>
         {{__('messages.about')}}
         <p>
       </div>  
     <div class=" col-lg-3 col-md-3 col-sm-12 col-12">
        <h3 class="cancer-title"><a href="#">{{__('messages.foot_dep')}}  </a> </h3>
        <ul>
          <li><a href="#">{{__('messages.foot_dep1')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep2')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep3')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep4')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep5')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep6')}} </a></li>

        </ul>
     </div> 
     <div class=" col-lg-3 col-md-3 col-sm-12 col-12">
        <h3 class="cancer-title"><a href="#">{{__('messages.foot_quick')}} </a> </h3>
        <ul>
        <li><a href="#">{{__('messages.foot_dep1')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep2')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep3')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep4')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep5')}} </a></li>
          <li><a href="#">{{__('messages.foot_dep6')}} </a></li>
        </ul>    
     </div>                
   </div>
</div>
</div>
<div class="copyright">
  <div class="container">
    <div class="row">
     <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
      <p>  {{__('messages.foot_terms')}}  | <a href="#">{{__('messages.foot_privacy')}} </a></p>
     </div>
     <div class="rights col-lg-6 col-md-6 col-sm-12 col-12">
      © {{__('messages.foot_rights')}} 
     </div>
    </div> 
  </div>    
</div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="{{ url('/js/scripts.js') }}"></script>
      <script type="text/javascript">

      </script>
  </body>
</html>

