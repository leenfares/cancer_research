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
    <link rel="icon" href=" {{ url('/images/front/Logo-sq.png') }}"  type="image/front/gif" sizes="16x16">
  </head>

    
  <body>
<header class="header">
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
        <i class="fa fa-envelope"></i>&nbsp;<a href="mailto:crc@tishreen.edu.sy"> crc@tishreen.edu.sy </a>
      </div>
      <div class="emergency">
        <i class="fa fa-phone"></i>&nbsp;<a href="#"> + 0963 41 2496207 </a>
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
<main class="index">

  <div id="slider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ul>
  <!-- The slideshow -->
  <div class="carousel-inner">    
    <div class="carousel-item active" style="background: url({{ asset('/images/front/pexels-photo-2280571.jpeg') }}) center center; background-repeat: no-repeat; background-size: cover;">
      <div class="container">
      <div class="caption ">
        <h1>{{__('messages.slider_h')}}</h1>
        <p>{{__('messages.slider_p')}} </p>
     <!--    <div class="ask">
          <a class="cancer-link" href="#">Ask doctor</a>
          <a class="cancer-link" href="#">Get in touch</a>
        </div> -->
      </div>
    </div>
    </div>   
    <div class="carousel-item " style="background: url({{ asset('/images/front/ShowImage.jpg') }}) center center; background-repeat: no-repeat; background-size: cover;">
      <div class="container">
      <div class="caption ">
        <h1>{{__('messages.slider_h')}}</h1>
        <p>{{__('messages.slider_p')}} </p>
    <!--     <div class="ask">
          <a class="cancer-link" href="#">Ask doctor</a>
          <a class="cancer-link" href="#">Get in touch</a>
        </div> -->
      </div>
    </div>
    </div>
 <div class="carousel-inner">    
    <div class="carousel-item " style="background: url({{ asset('/images/front/bacteria-163711_960_720.jpg') }}) center center; background-repeat: no-repeat; background-size: cover;">
      <div class="container">
      <div class="caption ">
      <h1>{{__('messages.slider_h')}}</h1>
        <p>{{__('messages.slider_p')}} </p>
<!--         <div class="ask">
          <a class="cancer-link" href="#">Ask doctor</a>
          <a class="cancer-link" href="#">Get in touch</a>
        </div> -->
      </div>
    </div>
    </div>
  </div>
</div>
</div>



   <!-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

<section class="latest-news" id="allergy-news">
   <div class="container">
  <h3 class="cancer-title">
    <a href="#">
    {{__('messages.last_news')}}
    </a>
  </h3>
  <div class="items row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/pexels-photo-256262.jpeg') }}"></a>
         </div>
        </div>
         <h5 class="new">
           <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit
           </a>
         </h5>
         <div class="date">
           <span class="fa fa-calendar"></span>
           <span> 03.03.2017</span> 
         </div>
    </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/3.jpeg') }}" ></a>
         </div>
        </div>
         <h5 class="new">
           <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit
           </a>
         </h5>
         <div class="date">
           <span class="fa fa-calendar"></span>
           <span> 03.03.2017</span> 
         </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/laboratory-2815641_1920.jpg') }}"></a>
         </div>
        </div>
         <h5 class="new">
           <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit
           </a>
         </h5> 
               <div class="date">
           <span class="fa fa-calendar"></span>
           <span> 03.03.2017</span> 
         </div>     
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/pexels-photo-287227.jpeg') }}"></a>
         </div>
        </div>
         <h5 class="new">
           <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit
           </a>
         </h5>
               <div class="date">
           <span class="fa fa-calendar"></span>
           <span> 03.03.2017</span> 
         </div>
    </div>
    </div>
  </div>
</section>


<section id="Research">
 <div class="container">
      <h3 class="cancer-title"> <a href="{{ url('/all_research')}} ">{{__('messages.research')}} </a></h3>
  <div class="items row ll">
      @foreach($research as $r)
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 item row">
      <div class="col-5 res-img">
       <div class="cancer-image">
        <a href="{{url ('/research/'.$r->id)}}" ><img src=" {{ asset('/images/research/'.$r->image) }}"></a>
       </div>
      </div>
         <div class="col-7 res-title">
      <h5  class="title"><a href="{{url ('/research/'.$r->id)}}" > 
        {{ $r->limit($r->title)}}
        </a></h5>
    </div>
    </div>
     @endforeach

  </div>
 </div>
</section>
<!-- <div id="coursestitle" class="container"> -->
 
<!-- </div> -->

<section class="courses" >
  <div class="container">
       <h3 class="cancer-title " >
      <a href="studies.html">
      {{__('messages.our_courses')}} 
      </a>
    </h3>
  <div class="items row">
    <div class="col-lg-3 col-md-3 col-sm-2 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/pexels-photo-579474.jpeg')}}"></a>
         </div>
        </div>
         <div class="new">
           <a href="#">
            Lorem ipsum dolor sit amet 
            </a>
         </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-2 col-12 item">
          <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/pexels-photo-339620.jpeg')}}"></a>
         </div>
        </div>
         <div class="new">
           <a href="#">
            Lorem ipsum dolor sit amet
            </a>
         </div>
    </div> 
        <div class="col-lg-3 col-md-3 col-sm-2 col-12 item">
          <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/running-runner-long-distance-fitness-40751.jpeg') }}"></a>
         </div>
        </div>
         <div class="new">
           <a href="#">
            Lorem ipsum dolor sit amet
            </a>
         </div>
    </div> 
    <div class="col-lg-3 col-md-3 col-sm-2 col-12 item">
        <div class="icon">
          <div class="cancer-image">
          <a href="#"><img src="{{ asset('/images/front/pexels-photo-806427.jpeg') }}"></a>
         </div>
        </div>
         <div class="new">
           <a href="#">
            Lorem ipsum dolor sit amet
             </a>
         </div>
    </div>   
       
  </div>
</div>
</section>
<section class="our-team">
  <div class="container">
  <h3 class="cancer-title">
    <a href="{{ url('/our_team') }}"> {{__('messages.our_team')}} </a> </h3>
    <div class="items row">

    @foreach($teams as $t)
      <div class="col-lg-2 col-md-2 col-sm-12 col-12 item">
          <div class="cancer-image">
            <a href="#"><img src=" {{ asset('/images/teams/'.$t->image) }}"></a>
          </div>
          <div class="extra">
            <p class="career">  {{ $t->specialization }} </p>
            <p class="name"><a href="#"> DR. {{$t->name}} </a></p>
            <ul  class="dr-info">
               <li><i class="fa fa-mobile-phone"></i><a href="#"> + 0963 {{$t->telephone}}</a></li>
               <li> <i class="fa fa-envelope"></i><a href="#"> {{$t->telephone}} </a></li>
           </ul>         
          </div>
      </div>
    @endforeach
  </div>
</div>
</section>
<section id="sponsers">
  <div class="container">
     <h3 class="cancer-title"><a href="{{ url('/all_partners') }}">{{__('messages.our_par')}} </a></h3>
    <div class="items row">
    @foreach($partner as $p)
      <div class="item col-lg-3 col-md-3 col-sm-12 col-12">
        <div class="cancer-image">
         <a href="{{$p->url}}">
         <img src=" {{ asset('/images/partners/'.$p->image) }}">
         </a>   
        </div>
        <div class="new">
        {{$p->description}}
         </div>
      </div>
    @endforeach              
    </div>
  </div>
</section>
</main>

<footer id="footer">
<div class="footer-social">
  <div class="container">
    <div class="row">
     <div class="col-lg-6 col-md-6 col-sm-12 col-12">
       <form class="form-inline">
         <div class="form-group mb-2">
            <input type="text" class="email form-control" id="email" placeholder="{{__('messages.foot_em')}}">
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
<!--      <div class=" col-lg-3 col-md-3 col-sm-12 col-12">
        <h3 class="cancer-title"><a href="#">Head office </a> </h3>
        <ul>
          <li><a href="#">Laboratory Analysis</a></li>
          <li><a href="#">Pediatric</a></li>
          <li><a href="#">Rehabilitation</a></li>
          <li><a href="#">Gynaecological</a></li>
          <li><a href="#">Ophthalmology</a></li>
          <li><a href="#">Cardiac</a></li>
        </ul>      
     </div> 
     <div class=" col-lg-3 col-md-3 col-sm-12 col-12">
        <h3 class="cancer-title"><a href="#">quick links </a> </h3>
        <ul>
          <li><a href="#">Laboratory Analysis</a></li>
          <li><a href="#">Pediatric</a></li>
          <li><a href="#">Rehabilitation</a></li>
          <li><a href="#">Gynaecological</a></li>
          <li><a href="#">Ophthalmology</a></li>
          <li><a href="#">Cardiac</a></li>
        </ul>    
     </div> -->                
   </div>
</div>
</div>
<div class="copyright">
  <div class="container">
    <div class="row">
     <div class=" col-lg-6 col-md-6 col-sm-12 col-12">
      <p>{{__('messages.foot_terms')}}   | <a href="#">{{__('messages.foot_privacy')}}  </a></p>
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
      <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
   
  </body>
</html>

