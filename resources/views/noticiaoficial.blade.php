<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Newsbit</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
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
			
			
			<ul class="main-menu" id="main-menu">
				<li><a href="{{ url('/') }}">NOTÍCIAS</a></li>
				<li><a href="{{ url('/comosurge') }}">COMO SURGIU</a></li>
				<li><a href="{{ url('/historia') }}">HISTÓRIA</a></li>
				<li><a href="{{ url('/quemsomos') }}">QUEM SOMOS</a></li>
				<li><a href="{{ url('/contato') }}">CONTATO</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</header>

	
	
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<img src="images/slider-1-1200x900.jpg" alt="">
					<h3 class="mt-30" align="justify"><b>{{$noticia->titulo}}</b></h3>
					
					<p class="mtb-15" align="justify">{{$noticia->texto}}</p>

					<div class="brdr-ash-1 opacty-5"></div>

				</div><!-- col-md-9 -->
				
			</div><!-- row -->

		</div><!-- container -->




	</section>

	<!-- SCIPTS -->
	
	<script type="text/javascript" src="<?php echo asset('js/tether.min.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/scripts.js')?>"></script>
	
</body>
</html>