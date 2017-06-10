<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>28 Fashion Hub</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap/bootstrap-theme.min.css') }}">

    <!-- ANIMATE -->
     <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">

    <!-- HOVER -->
      <link rel="stylesheet" href="{{ asset('/css/hover.css') }}" media="all">

      <!-- FONTAWESOME -->
     <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">

    <!-- C U S T O M  S T Y L E S -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    @yield('content')
    <div class="col-md-8 col-md-offset-2">
      <hr>
      <div class="text-center">
        <p>28 Fashion Hub - All Rights Reserved</p>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/js/jquery/jquery-3.1.1.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>

    @yield('scripts')
  </body>
</html>