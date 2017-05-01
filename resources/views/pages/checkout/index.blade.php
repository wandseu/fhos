@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
  	<div class="row col-md-12 col-xs-12 checkout">
				<h3>CHECKOUT</h3><hr style="width: 1150px; margin-left: -20px;">
			</div>

			<div class="row col-md-5 col-xs-12 col-md-offset-1 customer-details">
				<h4>CUSTOMER DETAILS</h4>
				<form>
				  <div class="form-group">
				    <input type="text" class="form-control" id="fName" placeholder="First Name">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="mName" placeholder="Middle Name">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="lName" placeholder="Last Name">
				  </div>
				  <select class="form-control gender">
				  	<option>Sex</option>
					  <option>Male</option>
					  <option>Female</option>
					</select>
				<div class="col-md-6 col-xs-2">
				 <div class="form-group">
				    <input type="text" class="form-control" id="mobNo" placeholder="Mobile No." maxlength="11">
				  </div>
				</div>
				<div class="col-md-6 col-xs-2">
				  <div class="form-group">
				    <input type="text" class="form-control" id="telNo" placeholder="Tel No." maxlength="7">
				  </div>
				</div>
				  
				</form>
			</div>

			<div class="row col-md-5 col-xs-12 shipping-details">
				<h4>SHIPPING DETAILS</h4>
				<form>
				  <div class="form-group">
				    <input type="text" class="form-control" id="streetNo" placeholder="Street No.">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="street" placeholder="Street">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="brgy" placeholder="Barangay">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="city" placeholder="City">
				  </div>
				  <div class="form-group">
				    <input type="text" class="form-control" id="region" placeholder="Region">
				  </div>
				  
				</form>
			</div>

			<div class="col-md-2 col-md-offset-9">
				<a href="{{ url('/payment') }}"><button type="button" id="review">PAYMENT ></button></a>
			</div>
  </div>

  <style type="text/css">
  	body {
  		background-color: #fff;
  		font-family: "Bebas";
  	}

  	.checkout {
  		margin-top: 30px;
  	}

  	.customer-details {
		background-color: #DFDFDF;
		font-family: "Roboto";
		padding: 20px;
	}

	.customer-details h4 {
		font-family: "Bebas";
		margin-bottom: 20px;
	}

	.customer-details input {
		height: 30px;
		font-size: 11px;
	}

	.shipping-details {
		background-color: #DFDFDF;
		font-family: "Roboto";
		padding: 20px;
		margin-left: 50px;
	}

	.shipping-details h4 {
		font-family: "Bebas";
		margin-bottom: 20px;
	}

	.shipping-details input {
		height: 30px;
		font-size: 11px;
	}

	.gender {
		height: 30px;
		font-size: 11px;
		margin-bottom: 15px;	
	}

	#review:hover {
		font-family: "Letter Gothic Std";
		margin-top: 20px;
		margin-left: 40px;
		border: solid 1px;
		background-color: #fff;
		color: #000;
		width: 100%;
		height: 50px;
		font-size: 12px;
	}

	#review {
		font-family: "Letter Gothic Std";
		margin-top: 20px;
		margin-left: 40px;
		border-style: none;
		background-color: #000;
		color: #fff;
		width: 100%;
		height: 50px;
		font-size: 12px;
	}

	#mobNo {
		margin-left: -15px;
	}

	#telNo {
		margin-left: 15px;
	}
  </style>
@endsection
