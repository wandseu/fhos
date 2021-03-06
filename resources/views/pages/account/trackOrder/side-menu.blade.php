<div class="col-md-3" style="margin-left: -15px;">
	<div class="account">
		<h4 style="font-weight: 1000; padding-top: 20px; padding-left: 15px;">MY ACCOUNT</h4><hr>
		<ul role="menu">
			<li><a href="#" style="font-size: 12px;""></i>My Account</a></li>
			<li><a href="#" style="font-size: 12px;""></i>My Wallet</a></li>
			<li id = "trackOrder"><a href="{{ url('/order') }}" style="font-size: 12px;""></i>Track My Orders</a></li>
			<li><a href="{{ url('/customer-service') }}" style="font-size: 12px;"></i>Customer Service</a></li>
			<ul class="submenu">
				<li><a id="not-active" href="#" style="font-size: 12px;"></i>Payments</a></li><hr class="divide">
				<li><a href="{{ url('/customer-service') }}" style="font-size: 12px;"></i>Payment Methods</a></li>
				<li><a href="#" style="font-size: 12px;"></i>Confirm Payment</a></li>
			</ul>
			<li><a href="#" style="font-size: 12px;""></i>Help</a></li>
		</ul>
	</div>
</div>

<style type="text/css">
	.account {
		margin-top: 80px;
		background-color: #fff;
		font-family: "Young";
	}

	.account ul {
		list-style-type: none;
	}

	.account li {
		padding: 15px;
	}

	.account a {
		color: #000;
		text-decoration: none;
		margin-left: -30px;
	}

	#trackOrder {
		margin-left: -40px;
		background-color: #333;
	}

	#trackOrder a {
		margin-left: 10px;
		color: #fff;
	}

	#not-active {
		pointer-events: none;
		cursor: default;
	}
	.submenu{
		margin-left: -20px;
	}
	.divide{
		border-color: black;
		margin: -10px 0px 0px -60px;
	}
	
	/*.filter h6 {
		font-weight: b
	}*/
</style>