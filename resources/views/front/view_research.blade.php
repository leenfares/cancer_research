

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
            <!-- <div class="row">
              <div class="date col-5">
                <span class="fa fa-calendar"></span>
                <span>&nbsp;{{$single_research->created_at}}</span> 
              </div>
              <div class="user col-7">
                <span class="fa fa-user"></span>
                <span>&nbsp; demo user</span> 
              </div>
            </div> -->
            <div class="cancer-image">
              <img src=" {{ asset('/images/research/'.$single_research->image) }}">
            </div>
            <div class="description">
              {{$single_research->description}}
            </div>
           <div class="r_file">
              <a href=" {{ url('/files/research/'.$single_research->file) }}"><i class='fa fa-file'></i> Research Abstract</a>
            </div>
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