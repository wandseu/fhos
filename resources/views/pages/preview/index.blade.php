@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container preview">
        <div class = "col-md-6 col-xs-12">
          <img src ="img/macy-jumpsuit-1.png" alt = "macy-jumpsuit" id = "macy-jumpsuit" style="width: 100%;" onclick="location.href='preview-apparel.html'">
        </div>
        <div class = "col-md-3 col-xs-12 apparel-details">
          <h3 style="font-weight: bold;">MACY JUMPSUIT</h3>
          <h5 style="font-weight: bold;">PHP 249.00</h5><hr>
          <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p><hr>

          <h5 style="font-weight: bold;">DETAILS</h5>
          <p>- Lorem ipsum dolor sit amet.</p>
          <p>- Lorem ipsum dolor sit amet.</p><hr>

          <h5 style="font-weight: bold;">DELIVERED IN</h5>
          <p>Greater NCR: 1-3 days, Major cities: 2-4 days</p>
          <p>Provincial: 5-7 days. All in working days</p><hr>

          <div class="rating">
                <h5 style="font-weight: bold;">RATING</h5>
                <div id="stars-existing" class="starrr" data-rating='4'></div>
                You gave a rating of <span id="count-existing">4</span> star(s)
            </div>
        </div>

        <div class = "col-md-3 col-xs-12">
          <div class="boxed-details">
            <p style="font-weight: bold; font-size: 15px; margin-top: 10px;">SELECT</p>
            <div class="dropdown size">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border-style: none; background: #fff; border: solid 1px; height: 30px; width: 100%; text-align: left; font-size: 12px; margin-bottom: 5px;" >
                SIZE
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Freesize</a></li>
                <li><a href="#">Small</a></li>
                <li><a href="#">Medium</a></li>
                <li><a href="#">Large</a></li>
                <!-- <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div>
            <div class="dropdown color">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border-style: none; background: #fff; border: solid 1px; height: 30px; width: 100%; text-align: left; font-size: 12px;">
                COLOR
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">Blue</a></li>
                <li><a href="#">Maroon</a></li>
                <li><a href="#">Black</a></li>
                <li><a href="#">Pink</a></li>
                <!-- <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li> -->
              </ul>
            </div><hr>

            <div class="buttons">
              <a href=" {{ url('/cart') }}"><button type="button" id="cart">ADD TO CART <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
              
              <a href=" {{ url('/wishlist') }}"><button type="button" id="wish">ADD TO WISHLIST <span class="glyphicon glyphicon-heart"></span></button></a>
              
            </div><hr>

            <div class="share">
              <h5 style="font-weight: bold;">SHARE</h5>
              <a href="#"><img src = "img/facebook.png" alt="facebook"></a>
              <a href="#"><img src = "img/twitter.png" alt="facebook"></a>
              <a href="#"><img src = "img/yahoomail.png" alt="facebook"></a>
              <a href="#"><img src = "img/google-plus.png" alt="facebook"></a>
            </div>
          </div>

          <div class="contact">
            <p style="font-weight: 800;">ANY QUESTIONS</p>
            <p>CALL US 099987654321</p>
            <p>Operation Hours: Monday to Friday: 9am-6pm Saturday: 10am-5pm</p>
          </div>
      </div>
  </div>

  <style type="text/css">
  	body {
  		font-family: "Bebas";
  		background-color: #fff;
  	}

    .preview {
      margin-top: 80px;
    }

    .size li a {
      font-size: 12px;
    }

    .color li a {
      font-size: 12px;
    }

    .apparel-details {
      font-family: "Young";
    }

    .apparel-details p {
      font-size: 12px;
      text-align: justify;
    }

    .apparel-details h3, h5 {
      font-family: "Bebas";
    }

    .rating {
      margin-bottom: 10px;
    }

    .boxed-details {
      font-family: "Letter Gothic Std";
      border: solid 1px;
      width: 100%;
      padding: 15px;
    }

    .contact {
      margin-top: 20px;
      padding: 10px;
      font-family: "Letter Gothic Std";
      background-color: #F3F2F2;
      font-size: 11px;
      text-align: center;
    }

    .boxed-details p {
      font-size: 12px;
      text-align: justify;
    }

    .share img {
      margin-right: 0px;
      margin-bottom: 10px;
    }

    #cart {
      border-style: none;
      background-color: #000;
      color: #fff;
      width: 100%;
      height: 40px;
      font-size: 12px;
    }

    #cart:hover {
      border: solid 1px;
      background-color: #fff;
      color: #000;
      width: 100%;
      height: 40px;
      font-size: 12px;
    }

    #wish {
      margin-top: 5px;
      border: solid 1px;
      background-color: #fff;
      color: #000;
      width: 100%;
      height: 40px;
      font-size: 12px;
    }

    #wish:hover {
      border-style: none;
      background-color: #000;
      color: #fff;
      width: 100%;
      height: 40px;
      font-size: 12px;
    }
  </style>
@endsection
