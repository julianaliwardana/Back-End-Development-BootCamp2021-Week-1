@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center justify-content-center text-center">
    <div class="row">
        <h1>{{$viewArticle->title}}</h1>
        <h4 class="mb-5">Author: {{$viewArticle->name}}</h4>
        <img src="{{ asset('upload/photo/' . $viewArticle['image']) }}" class="mb-5 mx-auto" style="width:300px;">
        <p>{{$viewArticle->content}}</p>
    </div>
</div>
@include('comment/read')
@yield('content2')
@include('comment/create')
@yield('content3')
@endsection
