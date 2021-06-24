

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
@extends('layouts.master')
@section('meta_tags')
<!-- @section('title', 'Research') -->
{!! SEOMeta::generate() !!}
{!! OpenGraph::generate() !!}
{!! Twitter::generate() !!}
{!! JsonLd::generate() !!}
@endsection

@section('content')
<main class="index inside">
 <section  id="Research">
  <div class="container">
   <h3 class="cancer-title"> <a href="#">{{__('messages.all_res')}}</a></h3>
   <div class="items row">
   @foreach($research as $r)
    <div class="col-lg-6 col-md-6 col-sm-12 col-12 item row">
      <div class="col-5 res-img">
       <div class="cancer-image">
        <a href="{{url ('/research/'.$r->id)}}" ><img src=" {{ asset('/images/research/'.$r->image) }}"></a>
       </div>
      </div>
         <div class="col-7 res-title">
      <h5  class="title"><a href="{{url ('/research/'.$r->id)}}" > 
        {{ $r->description }}
        </a></h5>
    </div>
    </div>
     @endforeach

  </div>

    <div class="row">
      <div class="col-12 text-center">
        {{ $research->links() }}
      </div>    
    </div>

 </div>
</section>
	
</main>

@endsection