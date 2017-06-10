<nav>
	<nav class="navbar navbar-findcond navbar-fixed-top">
		    <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}"><img src="img/FBMS.png" alt = "fbms" id = "fbms-logo"></a>
					
				</div>
				<div class="collapse navbar-collapse" id="navbar">
					<ul class="nav navbar-nav navbar-left">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> WOMEN </a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/women') }}" style="font-weight: 800; padding-top: 20px;"></i>WOMEN'S CLOTHING</a></li><hr>

								<li><a href="#" style="font-size: 12px;"">TOPS</a></li>
								<li><a href="#" style="font-size: 12px;"">DRESSES</a></li>
								<li><a href="#" style="font-size: 12px;"">SHORTS</a></li>
								<li><a href="#" style="font-size: 12px;"">SKIRTS</a></li>
								<li><a href="#" style="font-size: 12px;"">JUMPSUITS</a></li>
								<li><a href="#" style="font-size: 12px;"">JEANS</a></li>
								<li><a href="#" style="font-size: 12px;"">SPORTS PERFROMANCE</a></li>
								<li><a href="#" style="font-size: 12px;"">SWIMWEAR</a></li>
								<li><a href="#" style="font-size: 12px;"">JACKETS & VESTS</a></li>
								<li><a href="#" style="font-size: 12px;"">PLUS SIZE</a></li>
								<li><a href="#" style="font-size: 12px;"">+ VIEW ALL</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> MEN </a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" style="font-weight: 800; padding-top: 20px;">MEN'S CLOTHING</a></li><hr>

								<li><a href="#" style="font-size: 12px;"">SHIRTS</a></li>
								<li><a href="#" style="font-size: 12px;"">TSHIRTS</a></li>
								<li><a href="#" style="font-size: 12px;"">POLO SHIRTS</a></li>
								<li><a href="#" style="font-size: 12px;"">JACKETS & VESTS</a></li>
								<li><a href="#" style="font-size: 12px;"">CARDIGAN & SWEATERS</a></li>
								<li><a href="#" style="font-size: 12px;"">HOODIES & SWEATSHIRTS</a></li>
								<li><a href="#" style="font-size: 12px;"">JEANS</a></li>
								<li><a href="#" style="font-size: 12px;"">PANTS</a></li>
								<li><a href="#" style="font-size: 12px;"">SHORTS</a></li>
								<li><a href="#" style="font-size: 12px;"">SUITS & BLAZERS</a></li>
								<li><a href="#" style="font-size: 12px;"">SWIMWEAR</a></li>
								<li><a href="#" style="font-size: 12px;"">+ VIEW ALL</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right nav-right-icons">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-heart"></i><span class="badge">1</span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/wishlist') }}" style="font-weight: 800; padding-top: 10px;">YOU HAVE 1 ITEM(S) IN YOUR WISHLIST</a></li>
							</ul>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="badge">1</span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/cart') }}" style="font-weight: 800; padding-top: 10px;">YOU HAVE 1 ITEM(S) IN YOUR CART</a></li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="fa fa-user-circle-o"></span><span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" style="font-weight: 800; padding-top: 20px;">WELCOME BACK!</a></li><hr>

								<li><a href="#" style="font-size: 12px;"">MY ACCOUNT</a></li>
								<li><a href="#" style="font-size: 12px;"">MY WALLET (PHP 0.00)</a></li>
								<li><a href="#" style="font-size: 12px;"">TRACK MY ORDERS</a></li>
								<li><a href="#" style="font-size: 12px;"">CONFIRM PAYMENT</a></li>
								<li><a href="#" style="font-size: 12px;"">HELP</a></li><hr>
								<li><a href="#" style="font-size: 12px;"">LOGOUT</a></li>
							</ul>
						</li>
					</ul>
					{{-- <form class="navbar-form navbar-right search-form" role="search">
						<div class="input-group">
				            <input type="text" class="form-control" placeholder="Search" name="q" id = "nav-search">
				            <div class="input-group-btn">
				                <button class="btn btn-default" type="submit" id = "nav-btn-search"><i class="glyphicon glyphicon-search" id = "nav-btn-search-icon"></i></button>
				            </div>
				        </div>
					</form> --}}

					<form class="navbar-form navbar-right search-form" role="search">
						<input type="text" placeholder="Search" id="search">
					</form>
				</div>
			</div>
		</nav>
</nav>

<style type="text/css">
	body {
	margin: 0;
	}

	nav.navbar-findcond { background: #000; font-family: "Orator Std"; font-size: 16px; }
	nav.navbar-findcond a { color: #fff; }
	nav.navbar-findcond ul.navbar-nav a { color: #fff; }
	nav.navbar-findcond ul.navbar-nav a:hover,
	nav.navbar-findcond ul.navbar-nav a:visited,
	nav.navbar-findcond ul.navbar-nav a:focus,
	nav.navbar-findcond ul.navbar-nav a:active { background: #111; }
	nav.navbar-findcond ul.navbar-nav a:hover { border-color: #fff; }
	nav.navbar-findcond li.divider { background: #ccc; }
	nav.navbar-findcond button.navbar-toggle { background: #fff; border-radius: 50px; }
	nav.navbar-findcond button.navbar-toggle:hover { background: #999; }
	nav.navbar-findcond button.navbar-toggle > span.icon-bar { background: #000; }
	nav.navbar-findcond ul.dropdown-menu { border: none; background: #111; border-radius: 4px; margin: 4px 0; box-shadow: 0 0 4px 0 #ccc; }
	nav.navbar-findcond ul.dropdown-menu > li > a { color: #fff; }
	nav.navbar-findcond ul.dropdown-menu > li > a:hover { background: #fff; color: #000; }
	nav.navbar-findcond span.badge { background: #f14444; font-weight: normal; font-size: 11px; margin: 0 4px; }
	nav.navbar-findcond span.badge.new { background: rgba(255, 0, 0, 0.8); color: #fff; }

	#fbms-logo {
		height: 40px;
		margin-top: -8px;
	}

	#nav-search {
		margin-top: 5px;
		height: 25px;
		width: 320px;
	}

	#nav-btn-search {
		margin-top: 5px;
		height: 25px; 	
	}

	#search {
		border-top-color: transparent;
		border-left-color: transparent;
		border-right-color: transparent;
		border-bottom-color: #fff;
		background: transparent;
		width: 300px;
	}
</style>