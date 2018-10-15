<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Newsbit</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet">
	
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
			<a class="logo" href="{{ url('/inicio') }}"><img src="images/cooperativa.jpg" alt="Logo"></a>
			
			
			
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
			<h2 class="mt-30"><b>Como Surgiu</b></h2>

			<p class="pt-30" align="justify">Para se constituir uma cooperativa é necessário que haja um grupo, de no mínimo 20 pessoas físicas. O ideal é procurar a OCB/RN que presta assistência aos interessados, dentro do Programa de Constituição Orientada.</p>

			<p class="pt-30" align="justify">
			Órgão supremo da cooperativa que, conforme o prescrito da legislação e no Estatuto Social, tomará toda e qualquer decisão de interesse da sociedade. Além da responsabilidade coletiva que se expressa pela reunião de todos, ou da maioria, nas discussões e nas deliberações. A reunião da Assembléia Geral dos cooperados ocorre, nas seguintes ocasiões:

			Assembleia Geral Ordinária (AGO) – realizada obrigatoriamente uma vez por ano, no decorrer dos três primeiros meses, após o encerramento do exercício social, para deliberar sobre prestações de contas, relatórios, planos de atividades, destinações de sobras, fixação de honorários, cédula de presença, eleição do Conselho de Administração e Fiscal, e quaisquer assuntos de interesse dos cooperados; e
			Assembleia Geral Extraordinario (AGE) – realizada sempre que necessário e poderá deliberar sobre qualquer assunto de interesse da cooperativa. É de competência exclusiva da AGE a deliberação sobre reforma do estatuto, fusão, incorporação, desmembramento, mudança de objetivos e dissolução voluntária.</p>
									
		</div><!-- container -->
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