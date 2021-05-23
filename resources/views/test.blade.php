<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href=" {{ url('/css/bootstrap/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if(App::getLocale() == 'ar')
    <link rel="stylesheet" href=" {{ url('/css/ae1.css') }}">
    @else
    <link rel="stylesheet" href=" {{ url('/css/stylesheet.css') }}">
    @endif
    <link rel="icon" href=" {{ url('/images/front/Logo-sq.png') }}"  type="image/front/gif" sizes="16x16">
      <title>  Cancer Research Center</title>
  </head>

<main class="index">
    
<section id="Research">
 <div class="container">
      <h3 class="cancer-title"> <a href="{{ url('/all_research')}} ">{{__('messages.research')}} </a></h3>
  <div class="items row ll">
   
  <div class="col-lg-6 col-md-6 col-sm-12 col-12 item ">
      <div class="res-img">
       <div class="cancer-image">
        <a href="#"><img src=" {{ asset('/images/research/1621244541.jpg') }}"></a>
       </div>
      </div>
         <div class=" res-title">
      <h5  class="title"><a href="#"  > 
       مرحباب جرمبنتا مرحبا
        </a></h5>
    </div>
    </div>
       
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 item ">
      <div class=" res-img">
       <div class="cancer-image">
        <a href="#" ><img src=" {{ asset('/images/research/1621244541.jpg') }}"></a>
       </div>
      </div>
         <div class=" res-title">
      <h5  class="title"><a href="#"  > 
       مرحباب جرمبنتا مرحبا
        </a></h5>
    </div>
    </div>

  </div>
 </div>
</section>
<section class="courses" >
  <div class="container">
       <h3 class="cancer-title " >
      <a href="studies.html">
       Courses
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
</main>