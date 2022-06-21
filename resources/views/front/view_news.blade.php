

<style type="text/css">
div.p{
padding:250px 0;
}

</style>
  <!-- light gallery css -->
  <!-- <link href="{{ url('/lightg/static/css/main.css')}}" rel="stylesheet" />
        <link href="{{ url('/lightg/static/css/justifiedGallery.min.css')}}" rel="stylesheet" />
        <link
            href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700"
            rel="stylesheet"
            type="text/css"
        /> -->
        <link href="{{ url('/lightg/lightgallery/css/lightgallery.css')}}" rel="stylesheet" />

@extends('layouts.master')
@section('title', 'News')
@section('content')
<main class="index inside">
<div class="container blog news">   
<section id="new" class="col-lg-9 col-md-9 col-sm-12 col-12" >
           <div class="item" id="view">
         <div class="cancer-image">
              <img src=" {{ asset('/images/featuredimgnews/'.$single_news->featured_image) }}">
            </div>
            <div class="title">
              {{$single_news->title}}
            </div>
            <div class="date">
           <span class="fa fa-calendar"></span>
           <span> {{strftime('%d-%m-%Y',strtotime($single_news->created_at))}}</span> 
         </div>
           <div class="description" style="padding-top:10px">
              {{$single_news->description}}
            </div>
            @if(count($single_news->images)>0)
            <p style="color:#2d2d2f;font-weight:bold">
            {{ __('messages.gallery') }}
</p>
            <div class="row" >
            @foreach ($single_news->images as $img)
            <div class="col-lg-3 col-md-3 col-sm-12 col-12" style="margin-bottom:15px;">
            <div class="cancer-image">
              <a href="{{url('/images/news_gallery/'.$img->path)}}"> <img src=" {{ asset('/images/news_gallery/'.$img->path) }}"></a>
            </div>  
            </div>  
            @endforeach
            </div>  
            @endif
      </div>
      </section>
      <section id="latest-news" class="col-lg-3 col-md-3 col-sm-12 col-12" >
        <h1><a href="#">  {{ __('messages.latest_news') }}</a></h1>
        <div class="items">
         @foreach($latest_news as $r)
          <div class="item"> 
            <div class="cancer-image">
              <a href="{{url ('/news/'.$r->id)}}" ><img src=" {{ asset('/images/featuredimgnews/'.$r->featured_image) }}"></a>
            </div>            
            <div class="description">
              <a href="{{url ('/news/'.$r->id)}}" >
               {{$r->title}}
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