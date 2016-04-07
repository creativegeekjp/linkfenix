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
	<title>Tab Design 1</title>

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

<table id="table-data" class="table table-striped">

	<thead class="text-uppercase">
		<tr>
			<th width="40%">Link </th>
			<th width="18%">Age</th>
			<th width="40%">Quality</th>
		</tr>
	</thead>

	<tbody>

	
			
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
					    
					  echo '	<tr class="text-center">
								<td class="text-left">
									<a href="#" class="icon-link" target="_blank">
										<img class="img-responsive img-thumbnail" src="'.$icons.'" alt="icon: V-Vids">
									</a>
									<a href="'.$link.'" class="text-link" target="_blank">'.$name.'</a>
								</td>
				
								<td>
									'.$age.'
								</td>
				
								<td>
									<div class="quality rating">
										<i class="fa fa-thumbs-o-up"></i>100%
									</div>
									<div class="quality video">
										<i class="fa fa-video-camera"></i>'. $video.'
									</div>
									<div class="quality audio">
										<i class="fa fa-volume-up"></i>'.$audio.'
									</div>		
								</td>
						</tr>';
					    
					    if (++$i >= ( $count ) ) break;
					  
					}
			
			?>
			
	
	

	
	

	</tbody>

</table>

<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/app.js"></script>

</body>
</html>