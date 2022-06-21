@extends('layouts.master')
@section('title', 'About')
@section('content')
<main class="index inside">
  <section class="page">
  <div class="container">
   <h3 class="cancer-title"> <a href="#">{{ __('messages.nav_about') }}</a></h3>
      <div class="row">
      <div class="p-image col-lg-4  col-md-5  col-sm-12 col-12">
       <div class="cancer-image">
        <a href="#"><img src="{{ asset('/images/front/rnoo1.jpg ')}}"></a>
       </div>
      </div>
      <div class="p-content  col-lg-8  col-md-7  col-sm-12  col-12">
            <span style="font-weight: bold;">{{ __('messages.word_president') }}</span>
          </br>
          {{ __('messages.prof') }}
           <p>{{ __('messages.about_p1') }}  </p>

           <p>{{ __('messages.about_p2') }}</p>
   </div>
 </div>
</div>
</section>

<section id="about" >
  <div class="container">
      <h1>{{ __('messages.miss_visi_goa') }}</h1>
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
    <!-- <i class='fa fa-rocket' style='font-size:36px'></i> -->
    <div  class="about-img" >
     <div class="cancer-image" >
          <img src="{{ asset('/images/front/science-fiction.png') }}">
      </div>  
    </div>  
      <h3> {{ __('messages.mission') }}</h3>
      <p>
      {{ __('messages.mission_text') }}
</p>
      <ul>
      		<li>
          {{ __('messages.mission_li1') }}   			
      		</li>
      		<li>
          {{ __('messages.mission_li2') }}   			
      		</li>
      		<li>
          {{ __('messages.mission_li3') }}   
      		</li>
      		<li>
          {{ __('messages.mission_li4') }}   
      		</li>
      	</ul>

     </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
    <div  class="about-img" >
      	  	 <div class="cancer-image">
          <img src="{{ asset('/images/front/eye.png') }}">
         </div>     
         </div>     

       <h3>{{ __('messages.vision') }}</h3>
      <p>
      {{ __('messages.vision_text') }}
      </p>
    </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
     <div  class="about-img" >
       <div class="cancer-image">
         <img src="{{ asset('/images/front/mission.png') }}">
         </div>  
         </div>  
       <h3> {{ __('messages.goals') }}</h3>
           <p>
           {{ __('messages.goals_text') }}
          </p>
      </div>    

  </div>
</div>
</section>




</main>

@endsection