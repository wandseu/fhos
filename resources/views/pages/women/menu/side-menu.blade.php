<div class="col-md-3" style="margin-left: -15px;">
	<div class="categories">
		<h4 style="font-weight: 1000">WOMEN</h4><hr>
		<ul role="menu">
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Tops</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Dresses</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Shorts</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Skirts</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Jumpsuits</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Pants</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Jeans</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Sports Performance</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Swimwear</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Jackets & Vests</a></li>
			<li><a href="#" style="font-size: 12px;""><i class="fa fa-fw fa-thumbs-o-up"></i>Plus Size</a></li>
		</ul>
	</div>

	<div class="filter">
		<h4 style="font-weight: 1000">FILTER BY</h4><hr>
		<h6>Price (PHP)</h6>

		<form>
			<input type="number" placeholder="Min" id="Min">
			<input type="number" placeholder="Max" id="Max">
		</form>

		<h6>Color</h6>
		{{-- <iframe src="" style="height: 200px; width: 100%; outline: none;"> --}}
		<form>
			<div class="checkbox">
			    <label><input type="checkbox"> Beige</label><br>
			    <label><input type="checkbox"> Black</label><br>
			    <label><input type="checkbox"> Blue</label><br>
			    <label><input type="checkbox"> Brown</label><br>
			    <label><input type="checkbox"> Gold</label><br>
			    <label><input type="checkbox"> Green</label><br>
			    <label><input type="checkbox"> Grey</label><br>
			    <label><input type="checkbox"> Maroon</label><br>
			    <label><input type="checkbox"> Multi</label><br>
			    <label><input type="checkbox"> Navy</label><br>
			    <label><input type="checkbox"> Orange</label><br>
			    <label><input type="checkbox"> Pink</label><br>
			    <label><input type="checkbox"> Purple</label><br>
			    <label><input type="checkbox"> Red</label><br>
			    <label><input type="checkbox"> Silver</label><br>
			    <label><input type="checkbox"> White</label><br>
			    <label><input type="checkbox"> Yellow</label><br>
			  </div>
		</form>
		{{-- </iframe> --}}
	</div>
</div>

<style type="text/css">
	.categories, .filter {
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

	#Min, #Max {
		margin-bottom: 5px;
		padding: 5px;
		font-size: 12px;
		width: 100%;
	}

	.checkbox {
		font-size: 12px;
	}

	/*.filter h6 {
		font-weight: b
	}*/
</style>