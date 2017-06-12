{{-- <div class = "container col-md-12 col-xs-12 just-arrived">
			<div class = "row col-md-12 col-xs-12 col-md-offset-5 col-xs-offset-2">
				<div>
					<h2 style="font-weight: 800">TRENDING NOW</h2>
				</div>
			</div>

			<!-- <div class = "row col-md-12 col-xs-12 col-md-offset-1 col-xs-offset-1">
				<img src ="img/arrow-divider.png" alt = "arrow" id="arrow" style="width: 85%;">
			</div> -->

			<div class="row col-md-12 col-xs-12">
				<hr>
				<div class = "col-md-6 col-xs-12 hvr-bob">
					<a href="{{ url('/menu') }}"><img src ="img/macy-jumpsuit-1.png" alt = "macy-jumpsuit" id = "macy-jumpsuit" style="width: 100%; margin-bottom: 20px;"></a>
				</div>
				<div class = "col-md-6 col-xs-12 hvr-bob">
					<img src ="img/kc-2way-dress.png" alt = "kc-2way-dress" id = "kc-2way-dress" style="width: 100%;">
				</div>
			</div>

			<!-- <div class = "row col-md-12 col-xs-12 col-md-offset-1 col-xs-offset-1">
				<img src ="img/arrow-divider.png" alt = "arrow" id="arrow" style="width: 85%;">
			</div> -->
</div>

<style type="text/css">
	.just-arrived {
	font-family: "Bebas";
	}

	.just-arrived img {
		opacity: 1.0;
	}

	.just-arrived img:hover {
		cursor: pointer;
		opacity: 0.7;
	}
</style> --}}

 <div class="container">
  <div class = "row col-md-12 col-xs-12 col-md-offset-5 col-xs-offset-2">
		<div>
			<h2 style="font-weight: 800">TRENDING NOW</h2>
		</div>
	</div>
  <div class='row'>
    <div class= "col-md-12 col-md-12 col-xs-12">
      <div class="carousel slide media-carousel" id="media">
        <div class="carousel-inner">
          <div class="item  active">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-1.png"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-2.png"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-3.png"></a>
              </div>        
            </div>
          </div>
          <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-4.png"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-5.png"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="img/thumb-6.png"></a>
              </div>        
            </div>
          </div>
          {{-- <div class="item">
            <div class="row">
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>          
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>
              <div class="col-md-4">
                <a class="thumbnail" href="#"><img alt="" src="http://placehold.it/150x150"></a>
              </div>      
            </div>
          </div> --}}
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control"><span class="fa fa-arrow-left" style="padding: 5px;"></span></a>
        <a data-slide="next" href="#media" class="right carousel-control"><span class="fa fa-arrow-right" style="padding: 5px;"></span></a>
      </div>                          
    </div>
  </div>
</div>

<style type="text/css">
body {
	margin: 0;
}

/* carousel */
.media-carousel 
{
  margin-bottom: 0;
  padding: 0 40px 30px 40px;
  margin-top: 30px;
}
/* Previous button  */
.media-carousel .carousel-control.left 
{
  left: -12px;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 80px
}
/* Next button  */
.media-carousel .carousel-control.right 
{
  right: -12px !important;
  background-image: none;
  background: none repeat scroll 0 0 #222222;
  border: 4px solid #FFFFFF;
  border-radius: 23px 23px 23px 23px;
  height: 40px;
  width : 40px;
  margin-top: 80px
}
/* Changes the position of the indicators */
.media-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the colour of the indicators */
.media-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
.media-carousel .carousel-indicators .active 
{
  background: #333333;
}
.media-carousel img
{
  width: 350px;
  height: 200px
}
/* End carousel */
</style>

<script type="text/javascript">
$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>

