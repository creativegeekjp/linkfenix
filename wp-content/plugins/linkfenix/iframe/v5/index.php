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
	<title>Tab Design 2</title>

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

<div id="panel-data" class="panel panel-primary">
	<div class="panel-heading">
		<h4 class="panel-title text-uppercase text-center">Links</h4>
	</div><!-- /.panel-heading -->

	<div class="panel-body">
        	<?php 
			
				$i = 0;
	
					foreach($rs[0] as $key => $values)
					{
					     
					    $name = $rs[0][$i]['name'];
					    $icon_type= $rs[0][$i]['icon'];  
					    $link = $rs[0][$i]['link'];  
					    $source = $rs[0][$i]['source'];  
					    $age = $rs[0][$i]['age'];  
					    $vote = $rs[0][$i]['vote'];  
					    $video = $rs[0][$i]['video'];  
					    $audio = $rs[0][$i]['audio'];      
					   
					    switch($icon_type)
					    {
					    
					    	case 1:
					    		$icons = "assets/img/icon-vvids.jpg";
					    	break;
					    	
					    	case 2:
					    		 $icons = "assets/img/icon-flashx.jpg";
					    	break;
					    	
					    	case 3:
					    		$icons = "assets/img/icon-filehoot.jpg"; 
					    	break;
					    	
					    	case 4:
					    		 $icons = "assets/img/icon-hdstream.jpg"; 
					    	break;
					    	
					    }
					    
					  echo '<div class="row">
								<div class="col-xs-12 col-sm-6">
									<div class="item">
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-2 no-rpad">
												<a href="#" class="icon-link" target="_blank">
													<img class="img-circle" src="'.$icons.'" alt="icon: HDStrem">
												</a>
											</div><!-- /.col -->
					
											<div class="col-xs-9 col-sm-9 col-md-10">
												
												<h3 class="text-link">
													<a href="'.$link.'" target="_blank">HDStream</a>
													<small class="text-muted pull-right">'.$age.' ago</small>
												</h3>
					
												<div class="quality">
													<span class="badge big">'.$vote.'</span>
													<span class="text-uppercase">rating</span>
												</div><!-- /.quality -->
					
												<div class="quality">
													<span class="badge big">'.$video.'</span>
													<span class="text-uppercase">video</span>
												</div><!-- /.quality -->
					
												<div class="quality">
													<span class="badge big">'.$audio.'</span>
													<span class="text-uppercase">audio</span>
												</div><!-- /.quality -->
											</div><!-- /.col -->
										</div><!-- /.row -->
									</div><!-- /.item -->
								</div><!-- /.col -->
					
							</div><!-- /.row -->';
					    
					    if (++$i >= ( $count ) ) break;
					  
					}
			
			?>
	</div><!-- ./panel-body -->
</div><!-- /.panel -->
<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/app.js"></script>

</body>
</html>