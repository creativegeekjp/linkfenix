<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tab Design 3</title>

	<meta name="desciption" content="">
	<meta name="keywords" content="">

	<!-- Compiled Bootstrap and custom CSS -->
	<link href="assets/css/app.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
</head>
<body>

<?php 
	include '../links.php';
?>


<div id="table-data">
		<?php 
			
				$i = 0;
	
					foreach($rs[0] as $key => $values)
					{
					     
					    $name = $rs[0][$i]['name'];
					    $icons= $rs[0][$i]['icon'];  
					    $link = $rs[0][$i]['link'];  
					    $source = $rs[0][$i]['source'];  
					    $age = $rs[0][$i]['age'];  
					    $vote = $rs[0][$i]['vote'];  
					    $video = $rs[0][$i]['video'];  
					    $audio = $rs[0][$i]['audio'];      
					   
					  
					    
					  echo '<div class="wrap">
								<div class="half half-1">
									<div class="b1">
										<a href="#" class="icon-link" target="_blank">
											<img class="img-responsive" src="'.$icons.'" alt="icon: '.$name.'">
										</a>
										<a href="'.$link.'" class="text-link" target="_blank">'.$name.'</a>
									</div><!-- /.b1 -->
						
									<div class="b2">
										<span class="text-muted">'.$age.' ago</span>
									</div><!-- /.b2 -->
								</div><!-- /.half -->
						
								<div class="half half-2">
									<div class="b3">
										<div class="quality rating">
											<img src="assets/img/icon-rating.png" alt="icon: rating">'.$vote.'<sup></sup>
										</div>
										<div class="quality video">
											<img src="assets/img/icon-video.png" alt="icon: video">'.$video.'%
										</div>
										<div class="quality audio">
											<img src="assets/img/icon-audio.png" alt="icon: audio">'.$audio.'%
										</div>
									</div><!-- /.b3 -->
								</div><!-- /.half -->
							</div><!-- /.wrap -->';
					    
					    if (++$i >= ( $count ) ) break;
					  
					}
			
			?>

</div><!-- /#table-data -->


<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/app.js"></script>

</body>
</html>