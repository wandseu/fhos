@extends('main')
@include('nav')
@section('content')
{{-- @include('pages.welcome.nav') --}}
  <div class="container">
  	<div class="row col-md-12 col-xs-12 payment">
				<h3>PAYMENT</h3><hr style="width: 1150px; margin-left: -20px;">
			</div>

			<div class="row col-md-6 col-xs-12 col-md-offset-3 customer-details">
				<h4>PAYMENT DETAILS</h4>
				<!-- <form>
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
				  
				</form> -->

				<form class="form-horizontal">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
				    <div class="col-sm-9 col-sm-offset-1">
				      <button type="button" class="btn btn-default">Upload</button>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="bankAcc" class="col-sm-3 control-label">Bank Account</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="bankAcc" placeholder="Bank Account">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="transNo" class="col-sm-3 control-label">Transaction No.</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="transNo" placeholder="Transaction No.">
				    </div>
				   </div>
				    <div class="form-group">
				    <label for="amount" class="col-sm-3 control-label">Amount</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="amount" placeholder="Amount">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="cusMsg" class="col-sm-3 control-label">Customer Message</label>
				    <div class="col-sm-9">
				      <textarea class="form-control" rows="5" id="cusMsg"></textarea>
				    </div>
				  </div>
				</form>
			</div>

			<div class="col-md-2 col-md-offset-5">
				<a href="{{ url('/review') }}"><button type="button" id="review">REVIEW ORDER ></button></a>
			</div>
  </div>

  <style type="text/css">
  	body {
  		background-color: #fff;
  		font-family: "Bebas";
  	}

  	.payment {
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
  </style>
@endsection
