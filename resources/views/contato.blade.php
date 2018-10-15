<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Newsbit</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


	
	<!-- Stylesheets -->
	
	<link rel="icon" href="images/cooperativa.ico" type="image/x-icon" />
	
	<!-- Stylesheets -->
	
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 

	<link href="{{ asset('css/ionicons.css') }}" rel="stylesheet"> 
	
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 

	
	
</head>
<body>
	
	<header>
		<div class="bg-191">
			<div class="container">	
				<div class="oflow-hidden color-ash font-9 text-sm-center ptb-sm-5">
				
				<br>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->
		
		<div class="container">
			<a class="logo" href="index.html"><img src="images/cooperativa.jpg" alt="Logo"></a>
			
			
			
			<ul class="main-menu" id="main-menu">
				<li><a href="{{ url('/') }}">NOTÍCIAS</a></li>
				<li><a href="{{ url('/comosurge') }}">COMO SURGIU</a></li>
				<li><a href="{{ url('/historia') }}">HISTÓRIA</a></li>
				<li><a href="{{ url('/quemsomos') }}">QUEM SOMOS</a></li>
				<li><a href="{{ url('/contato') }}">CONTATO</a></li>
			</ul>

			<div class="clearfix"></div>
		</div><!-- container -->
	</header>
	
	
	<section>
		<div class="container">
				<h3 class="mt-30 mt-sm-50"><b>Contato</b></h3>
					
				<ul class="font-11 list-relative list-li-pl-30 list-block list-li-mb-15">
					<li><i class="fas fa-location-arrow"></i>  São João do Sabugi</li>
					<li><i class="fas fa-envelope"></i>  cooperativa@hotmail.com</li>
					<li><i class="fas fa-phone"></i>  (84)99672-9303</li>
				</ul>
				
		</div><!-- col-md-6 -->
	</section>
	
	
	
	<footer class="bg-191 color-ccc">
		
		<div class="container">
			<div class="pt-50 pb-20 pos-relative">
				<div class="abs-tblr pt-50 z--1 text-center">
					<div class="h-80 pos-relative"><img class="opacty-1 h-100 w-auto" src="images/map.png" alt=""></div>
				</div>
				<div class="row">
				
					<div class="col-sm-4">
						<br><br><br><br><br><br><br>
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<br><br><br><br><br><br><br>
					</div><!-- col-md-4 -->
					
					<div class="col-sm-4">
						<br><br><br><br><br><br><br>
					</div><!-- col-md-4 -->
					
				</div><!-- row -->
			</div><!-- ptb-50 -->
			
			<div class="brdr-ash-1 opacty-2"></div>
			
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	<script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.min.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/tether.min.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/scripts.js')?>"></script>
</body>
</html>