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
//mtype -> mov or tv
//scode -> episode_id or movie_id
$shortcode = isset($_GET['scode']) ? $_GET['scode'] : 0 ;
$type = isset($_GET['mtype']) ? $_GET['mtype'] : 0 ;

echo $shortcode;
echo $type;
?>




<table id="table-data" class="table table-striped">

	<thead class="text-uppercase">
		<tr>
			<th width="40%">Link </th>
			<th width="20%">Age</th>
			<th width="40%">Quality</th>
		</tr>
	</thead>

	<tbody>

		<tr class="text-center">
				<td class="text-left">
					<a href="#" class="icon-link" target="_blank">
						<img class="img-responsive img-thumbnail" src="assets/img/icon-hdstream.jpg" alt="icon: HDStrem">
					</a>
					<a href="#" class="text-link" target="_blank">HDStream</a>
				</td>

				<td>
					1 year
				</td>

				<td>
					<div class="quality rating">
						<i class="fa fa-thumbs-o-up"></i>100%
					</div>
					<div class="quality video">
						<i class="fa fa-video-camera"></i>100%
					</div>
					<div class="quality audio">
						<i class="fa fa-volume-up"></i>100%
					</div>		
				</td>
		</tr>

		<tr class="text-center">
				<td class="text-left">
					<a href="#" class="icon-link" target="_blank">
						<img class="img-responsive img-thumbnail" src="assets/img/icon-vvids.jpg" alt="icon: V-Vids">
					</a>
					<a href="#" class="text-link" target="_blank">V-Vids</a>
				</td>

				<td>
					2 years
				</td>

				<td>
					<div class="quality rating">
						<i class="fa fa-thumbs-o-up"></i>100%
					</div>
					<div class="quality video">
						<i class="fa fa-video-camera"></i>100%
					</div>
					<div class="quality audio">
						<i class="fa fa-volume-up"></i>100%
					</div>		
				</td>
		</tr>

		<tr class="text-center">
				<td class="text-left">
					<a href="#" class="icon-link" target="_blank">
						<img class="img-responsive img-thumbnail" src="assets/img/icon-flashx.jpg" alt="icon: FlashX">
					</a>
					<a href="#" class="text-link" target="_blank">FlashX</a>
				</td>

				<td>
					1 year
				</td>

				<td>
					<div class="quality rating">
						<i class="fa fa-thumbs-o-up"></i>100%
					</div>
					<div class="quality video">
						<i class="fa fa-video-camera"></i>100%
					</div>
					<div class="quality audio">
						<i class="fa fa-volume-up"></i>100%
					</div>		
				</td>
		</tr>

		<tr class="text-center">
				<td class="text-left">
					<a href="#" class="icon-link" target="_blank">
						<img class="img-responsive img-thumbnail" src="assets/img/icon-filehoot.jpg" alt="icon: FileHoot">
					</a>
					<a href="#" class="text-link" target="_blank">FielHoot</a>
				</td>

				<td>
					&lt;1 year
				</td>

				<td>
					<div class="quality rating">
						<i class="fa fa-thumbs-o-up"></i>100%
					</div>
					<div class="quality video">
						<i class="fa fa-video-camera"></i>100%
					</div>
					<div class="quality audio">
						<i class="fa fa-volume-up"></i>100%
					</div>		
				</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-hdstream.jpg" alt="icon: HDStrem">
				</a>
				<a href="#" class="text-link" target="_blank">HDStream</a>
			</td>

			<td>
				1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-vvids.jpg" alt="icon: V-Vids">
				</a>
				<a href="#" class="text-link" target="_blank">V-Vids</a>
			</td>

			<td>
				2 years
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-flashx.jpg" alt="icon: FlashX">
				</a>
				<a href="#" class="text-link" target="_blank">FlashX</a>
			</td>

			<td>
				1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-filehoot.jpg" alt="icon: FileHoot">
				</a>
				<a href="#" class="text-link" target="_blank">FielHoot</a>
			</td>

			<td>
				&lt;1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-hdstream.jpg" alt="icon: HDStrem">
				</a>
				<a href="#" class="text-link" target="_blank">HDStream</a>
			</td>

			<td>
				1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-vvids.jpg" alt="icon: V-Vids">
				</a>
				<a href="#" class="text-link" target="_blank">V-Vids</a>
			</td>

			<td>
				2 years
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-flashx.jpg" alt="icon: FlashX">
				</a>
				<a href="#" class="text-link" target="_blank">FlashX</a>
			</td>

			<td>
				1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

		<tr class="text-center">
			<td class="text-left">
				<a href="#" class="icon-link" target="_blank">
					<img class="img-responsive img-thumbnail" src="assets/img/icon-filehoot.jpg" alt="icon: FileHoot">
				</a>
				<a href="#" class="text-link" target="_blank">FielHoot</a>
			</td>

			<td>
				&lt;1 year
			</td>

			<td>
				<div class="quality rating">
					<i class="fa fa-thumbs-o-up"></i>100%
				</div>
				<div class="quality video">
					<i class="fa fa-video-camera"></i>100%
				</div>
				<div class="quality audio">
					<i class="fa fa-volume-up"></i>100%
				</div>		
			</td>
		</tr>

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