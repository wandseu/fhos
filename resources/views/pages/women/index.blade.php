@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
  	@include('pages.women.carousel')
  	@include('pages.women.arrived')
  	@include('pages.women.trending')
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #F6F6F6;
  	}
  </style>
@endsection
