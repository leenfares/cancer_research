

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
@extends('layouts.master')

@section('content')
<main class="index inside">
 <section    class="latest-news">
  <div class="container">
   <h3 class="cancer-title"> <a href="#">{{__('messages.all_news')}}</a></h3>
   <div class="items row">
   @foreach($news as $n)
    <div class="col-lg-4 col-md-4 col-sm-12 col-12 item">
    <div class="icon">
       <div class="cancer-image">
        <a href="{{url ('/news/'.$n->id)}}" ><img src=" {{ asset('/images/featuredimgnews/'.$n->featured_image) }}"></a>
        </div>
       </div>
      <h5  class="new"><a href="{{url ('/news/'.$n->id)}}" > 
      {{$n->limit($n->title) }}
        </a>
      </h5>
    </div>
     @endforeach
  </div>

    <div class="row">
      <div class="col-12 text-center">
        {{ $news->links() }}
      </div>    
    </div>

 </div>
</section>
	
</main>

@endsection