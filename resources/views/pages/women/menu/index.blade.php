@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
  	@include('pages.women.menu.header')
  	@include('pages.women.menu.side-menu')
  	@include('pages.women.menu.preview')
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #F6F6F6;
  	}
  </style>
@endsection
