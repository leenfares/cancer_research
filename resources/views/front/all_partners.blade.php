

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
@extends('layouts.master')
@section('title', 'Partner')
@section('content')


<main class="index inside">
<section id="sponsers">
  <div class="container">
     <h3 class="cancer-title"><a href="{{ url('/partners') }}">{{__('messages.our_par')}} </a></h3>
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
    
    <div class="row">
      <div class="col-12 text-center">
        {{ $partner->links() }}
      </div>    
    </div>
  </div>
</section>
	
</main>

@endsection