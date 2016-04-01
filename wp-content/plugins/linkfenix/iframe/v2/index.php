<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-4').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-5').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-6').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-7').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-8').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-9').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-10').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-11').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-12').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

                        $('#demo-pie-13').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-14').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-15').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-16').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-17').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-18').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

                        $('#demo-pie-19').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-20').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-21').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
            $('#demo-pie-22').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-23').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-24').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 2,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });
        });

    </script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
	<style>
sup {
    font-size: 10px;
    font-weight: 400;
}
.header {
    font-size: 20px;
    font-weight: 600;
}
hr {
    margin-top: 5px;
    margin-bottom: 3px;
    border: 0;
    border-top: 1px solid #eee;
}

.lower{
	margin-top:10px;
}


.pie-title-center {
  display: inline-block;
  position: absolute;
  text-align: center;
	padding: 0px;

}
.pie-value {
  display: block;
  position: absolute;
  font-size: 14px;
  height: 40px;
  top: 50%;
  left: 0;
  right: 0;
  margin-top: -22px;
  line-height: 40px;
}
canvas#pie {
    width: 300px !important;
    height: 187px !important;
}

.col-xs-8.col-lg-5 {
    float: right;
}

@media (min-width: 1200px){
.col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 8%;
}
.col-xs-3.col-sm-3.col-md-3.col-lg-3.no-pad {
   /* padding: 0px !important;*/
    width: 33%;
}
}


@media (max-width:500px){
.col-xs-3.col-sm-3.col-md-3.col-lg-3.no-pad {
    padding: 0px !important;
    width: 33%;
}
.header {
    font-size: 16px;
    font-weight: 600;
}
.col-xs-6.col-sm-6.col-md-6.col-lg-6.no-pad {
    padding: 0px;
}
}
@media (max-width:499px){
.col-xs-3.col-sm-3.col-md-3.col-lg-3.no-pad {
    padding: 0px !important;
}
.col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 25%;
}
.header {
    font-size: 16px;
    font-weight: 600;
}
.col-xs-6.col-sm-6.col-md-6.col-lg-6.no-pad {
    padding: 0px !important;
}
}






@media (width:640px){
    .col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 16% ;
}
.col-xs-3.col-sm-3.col-md-3.col-lg-3.no-pad {
    padding: 0px !important;
    width: 33%;
}
.col-xs-6.col-sm-6.col-md-6.col-lg-6.no-pad {
    padding: 0px;
}
}

/*desktop*/
@media (min-width:769px){
    .col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 16% ;
}

}
@media (min-width: 992px){
    .col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 11% ;
}
}

@media (min-width: 1024px){
    .col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 11% ;
}

}
@media (min-width: 1280px){
    .col-xs-3.col-sm-3.col-md-3.col-lg-3.col-3 {
    width: 8% ;
}

}
/*huge*/
/*@media (min-width: 1280px) {


}*/
</style>

</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12 col-lg-12">
			<div class="header-link row" style="background-color:#ff6418; height:50px; border-radius:5px 5px 0px 0px;" >
				<h3 id="center text-white" style="color:white; text-align:center; line-height: 0.1;">LINKS</h3>
			</div>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/6.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">HDStream</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-1" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-2" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-3" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/7.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">V-vids</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-4" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-5" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-6" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/8.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">FlashX</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-7" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-8" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-9" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/9.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">FileHoot</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-10" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-11" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-12" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/6.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">HDStream</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-13" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-14" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-15" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/7.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">V-vids</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-16" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-17" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-18" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/8.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">FlashX</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-19" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-20" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-21" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="link-content row" style="padding:5px 0px 5px 0px;">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-3">
					<a href="#"><img src="images/9.png" class="img-responsive" alt=""></a>
				</div>
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<div class="row">
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<a href="#"><h4 style="color:black; text-align:left; line-height: 0.1;">FileHoot</h4></a>
							<span>1y ago</span>
						</div>						
						<div class="col-xs-8 col-lg-5">
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-22" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">RATING</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-23" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">VIDEO</sup>
							</div>
							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								<div id="demo-pie-24" class="pie-title-center" data-percent="60"> 
									<span class="pie-value"></span> 
								</div>
								<sup style="top: 4.5em; right:-5px; font-size:9px;">AUDIO</sup>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
		<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<script src="js/bootstrap.min.js"> </script>
</body>
</html>