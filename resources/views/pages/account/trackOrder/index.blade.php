@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
  	@include('pages.account.trackOrder.side-menu')
    @include('pages.account.trackOrder.track-order')
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #F6F6F6;
  	}
  </style>
@endsection
