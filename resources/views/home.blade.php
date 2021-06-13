@extends('layouts.app')
@section('title','home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                        <a href="{{ url('/admin/panel')}}"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</
                </div>
            </div>
        </div>
    </div>
</div>
@endsection