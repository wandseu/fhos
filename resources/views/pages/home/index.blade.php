@extends('main')
@include('nav')
@section('content')

{{-- @include('pages.welcome.nav') --}}
  <div class="container">
	@include('pages.home.gender')
  
  </div>

  <style type="text/css">
  	body {
  		background-color: #F6F6F6;
  		font-family: "Bebas";
  	}
  </style>
@endsection
