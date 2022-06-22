

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
@extends('layouts.master')
@section('title', 'Our Team')
@section('content')


<main class="index inside">
 <section  class="our-team">
  <div class="container">
   <h3 class="cancer-title"> <a href="#"> {{__('messages.our_team')}}</a></h3>
   <div class="items row">
    @foreach($teams as $t)
      <div class="col-lg-3 col-md-3 col-sm-12 col-12 item">
          <div class="cancer-image">
           <img src=" {{ asset('/images/teams/'.$t->image) }}">
          </div>
          <div class="extra">
            <p class="career">  {{ $t->specialization }} </p>
            <p class="name"><a href="#"> DR. {{$t->name}} </a></p>
            <ul  class="dr-info">
               <li><i class="fa fa-mobile-phone"></i><a href="#" dir="ltr"> {{$t->telephone}}</a></li>
               <li  style="white-space: nowrap;"> <i class="fa fa-envelope"></i><a href="#"> {{$t->email}} </a></li>
           </ul>         
          </div>
      </div>
    @endforeach
  </div>
    <div class="row">
      <div class="col-12 text-center">
      	{{ $teams->links() }}
      </div>    
    </div>
 </div>
</section>
</main>

@endsection