@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
    <div class="row col-md-12 col-xs-12 wishlist">
        <h3>MY WISHLIST</h3><hr style="width: 1150px; margin-left: -20px;">
      </div>

      <div class="row col-md-12 col-xs-12">
        <div class="col-md-1 col-xs-6">
          <a href="preview-apparel.html"><img src="img/macy-jumpsuit-1.png" alt="macy-jumpsuit" style="width: 100%;"></a>
        </div>
        <div class="col-md-2 col-xs-3 details">
          <h5>MACY JUMPSUIT</h5>
          <p>Size</p>
          <p>Added on</p>
        </div>
        <div class="col-md-2 col-xs-3 details">
          <h5>.</h5>
          <p>Freesize</p>
          <p>2017-03-15</p>
        </div>
        <div class="col-md-1 col-xs-6 details">
          <br><br>
          <p>In stock</p>
        </div>
        <div class="col-md-2 col-xs-6 details">
          <br><br>
          <p>PHP 249.00</p>
        </div>
        <div class="col-md-3 col-xs-12 details">
          <br>
          <div class="buttons">
              <a href=" {{ url('/cart') }}"><button type="button" id="cart">ADD TO CART <span class="glyphicon glyphicon-shopping-cart"></span></button>
          </div>
        </div>
      </div>
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #fff;
  	}

    .wishlist {
      margin-top: 50px;
    }

    .wishlist h3 {
      font-family: "Bebas";
    }

    .details h5 {
      font-family: "Bebas"; 
    }

    .details p {
      font-family: "Letter Gothic Std";
      font-size: 12px;
    }

    #cart {
      border-style: none;
      background-color: #000;
      color: #fff;
      width: 100%;
      height: 40px;
      font-size: 12px; 
      font-family: "Letter Gothic Std";
    }

    #cart:hover {
      border: solid 1px;
      background-color: #fff;
      color: #000;
      width: 100%;
      height: 40px;
      font-size: 12px;
    }
  </style>
@endsection
