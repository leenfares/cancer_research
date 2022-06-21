

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
@extends('layouts.master')
@section('title', 'Research')
@section('content')


<main class="index inside">
<div class="container blog">   
  
<section id="new" class="col-lg-9 col-md-9 col-sm-12 col-12" >
           <div class="item" id="view">
            <div class="title">
              {{$single_research->name}}
            </div>
            <!-- <div class="cancer-image">
              <img src=" {{ asset('/images/research/'.$single_research->image) }}">
            </div> -->
            @if(!empty($single_research->file))
            <object data="{{asset('/files/research/'.$single_research->file)}}" type="application/pdf" width="100%" height="500px">
                <p>Alternative text - include a link <a href=" {{ asset('/files/research/'.$single_research->file) }}" >to the PDF!</a></p>
            </object>
            @else
            <div class="cancer-image">
              <img src=" {{ asset('/images/research/'.$single_research->image) }}">
            </div>
            @endif
            <div class="description">
              {{$single_research->description}}
            </div>
           <!-- <div class="r_file">
              <a href=" {{ url('/files/research/'.$single_research->file) }}"><i class='fa fa-file'></i> Research Abstract</a>
            </div> -->
      </div>
      </section>
      <section id="latest-news" class="col-lg-3 col-md-3 col-sm-12 col-12" >
        <h1><a href="#">  {{ __('messages.latest_res') }}</a></h1>
        <div class="items">
         @foreach($latest_research as $r)
          <div class="item"> 
            <div class="cancer-image">
              <a href="{{url ('/research/'.$r->id)}}" ><img src=" {{ asset('/images/research/'.$r->image) }}"></a>
            </div>            
            <div class="description">
              <a href="{{url ('/research/'.$r->id)}}" >
               {{$r->name}}
              </a>
            </div>
          </div>
         @endforeach                          
        </div>
      </section>
</div>

</main>
 
<div class="clearfix"></div>

@endsection