@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
    <div class="row col-md-12 col-xs-12 cart">
        <h3>MY CART</h3><hr style="width: 1150px; margin-left: -20px;">
      </div>

      <div class="col-md-8 col-xs-12 sold-by">
        <div class="col-md-6 col-xs-9">
          <p>SOLD BY 28 FASHION HUB (1 ITEM)</p>
        </div>
        <div class="col-md-6 col-xs-3">
          <p>ESTIMATED SHIPPING COST: PHP 100.00</p>
        </div><br><br><br>
        <div class="apparel-name">
          <div class="col-md-9 col-xs-9">
            <p>MACY JUMPSUIT</p>
          </div>
          <div class="col-md-2 col-xs-3">
            <p>PHP 249.00</p>
          </div><br><br>
        </div>

        <div class="details">

          <div class="col-md-2 col-xs-6">
              <a href="preview-apparel.html"><img src="img/macy-jumpsuit-1.png" alt="macy-jumpsuit" style="width: 100%;"></a>
          </div>
            <div class="col-md-3 col-xs-3">
              <br>
              <p>Quantity</p>
              <p>Size</p>
              <p>Added on</p>
            </div>
            <div class="col-md-3 col-xs-3">
              <br>
              <div class="container">
                <div class="row">
                  <div class="qty-changer">
                          <input class="qty-input form-group" type="number" value="1"/>
                      </div>
                </div>
              </div>

              <p>Freesize</p>
              <p>2017-03-15</p>
            </div>
            <div class="col-md-2 col-xs-6">
              <br><br>
              <p>In stock</p>
            </div>
            <div class="col-md-2 col-xs-6">
              <br><br>
              <p>PHP 249.00</p>
            </div>
          
        </div>
      </div>

      <div class="col-md-3 col-xs-12 total">
          <div class="col-md-6 col-xs-6">
            SUBTOTAL
          </div>
          <div class="col-md-6 col-xs-6">
            PHP 299.00
          </div><br><hr>

          <div class="col-md-6 col-xs-6">
            SHIPPING
          </div>
          <div class="col-md-6 col-xs-6">
            PHP 100.00
          </div><br><hr>

          <div class="col-md-6 col-xs-6" style="font-weight: bold;">
            GRAND TOTAL
          </div>
          <div class="col-md-6 col-xs-6" style="font-weight: bold;">
            PHP 399.00
          </div><br><br>

          <div class="buttons">
            <a href="{{ url('/checkout') }}"><button type="button" id="checkout">SECURE CHECKOUT ></button></a>
                
            <a href="{{ url('/') }}"><button type="button" id="shopping">CONTINUE SHOPPING ></button></a>
                
          </div>
        </div>
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #fff;
  	}

    .cart {
      margin-top: 50px;
    }

    .cart h3 {
      font-family: "Bebas";
    }

    .cart h5 {
      font-family: "Bebas"; 
    }

    .cart p {
      font-family: "Roboto";
      font-size: 12px;
    }

    .sold-by {
      background-color: #DFDFDF;
      height: 50px;
      margin-bottom: 20px;
      padding: 18px;
      font-family: "Letter Gothic Std";
      font-size: 13px;
    }

    .total {
      border: 1px solid;
      margin-left: 20px;
      font-family: "Letter Gothic Std";
      padding: 20px;
      font-size: 12px;
    }

    #checkout {
      border-style: none;
      background-color: #000;
      color: #fff;
      width: 100%;
      height: 50px;
      font-size: 12px;
    }

    #checkout:hover {
      border: solid 1px;
      background-color: #fff;
      color: #000;
      width: 100%;
      height: 50px;
      font-size: 12px;
    }

    #shopping {
      margin-top: 10px;
      border: solid 1px;
      background-color: #fff;
      color: #000;
      width: 100%;
      height: 50px;
      font-size: 12px;
    }

    #shopping:hover {
      border-style: none;
      background-color: #000;
      color: #fff;
      width: 100%;
      height: 50px;
      font-size: 12px;
    }

    .details {
      font-size: 12px;
      font-family: "Letter Gothic Std";
    }

    .center {
      width: 150px;
        margin: 40px auto;
        font-size: 10px;
    }

    .qty-input {
      width: 50px;
    }

    .apparel-name {
      font-family: "Bebas";
    }
  </style>
@endsection
