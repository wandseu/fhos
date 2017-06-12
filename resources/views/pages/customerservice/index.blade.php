@extends('main')
@include('nav')
@section('content')

{{-- @include('pages.welcome.nav') --}}
<div class="container">
	<h2>Customer Service - Payment & Courier</h2>
	<div class="row">
		<div class="col-md-3" style="margin-left: -15px;">
			<div class="categories">
				<h4 style="font-weight: 1000">Payment</h4><hr>
				<ul role="menu">
					<li><a href="pages.customerservice.paymentmethod" target="iframe-content" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Payment Methods</a></li>
					<li><a href="pages.customerservice.confirmpayment" target="iframe-content" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Confirm Payment</a></li>
				</ul>
			</div>
		</div>

		<div class="col-md-9">
			<iframe @yield('iframe') name="iframe-content" height="100%" width="100%" style="border: none;">
			</iframe>
		</div>
	</div>

<style type="text/css">
	body {
  		font-family: "Bebas";
  		background-color: #F6F6F6;
  		margin-top: 50px;
  	}

	.categories{
		padding: 10px;
		margin-top: 10px;
		background-color: #fff;
		font-family: "Young";
	}

	.categories ul {
		list-style-type: none;
	}

	.categories a {
		color: #000;
		text-decoration: none;
		margin-left: -30px;
	}

	/*.filter h6 {
		font-weight: b
	}*/
</style>
</div>
@endsection