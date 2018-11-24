<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>COOPERATIVA</title>
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
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10">

					</ul>
					<ul class="float-right float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5">
						<div class="flex-center position-ref full-height">
            				@if (Route::has('login'))
                				<div class="top-right links">
                    				@if (Auth::check())
                        				<a href="{{ url('/home') }}">Início</a>
                    				@else
                        				<a href="{{ url('/login') }}">Entrar</a>
                        				<br><a href="{{ url('/register') }}">Cadastre-se</a>
                    				@endif
                				</div>
            				@endif

					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div><!-- bg-191 -->


		
		<div class="container">
			<a class="logo"><img src="images/cooperativa.jpg" alt="Logo"></a>

			
			<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
			
			<ul class="main-menu" id="main-menu">
				<li><a href="{{ url('/') }}">NOTÍCIAS</a></li>
				<li><a href="{{ url('/comosurge') }}">COMO SURGIU</a></li>
				<li><a href="{{ url('/historia') }}">HISTÓRIA</a></li>
				<li><a href="{{ url('/quemsomos') }}">QUEM SOMOS</a></li>
				<li><a href="{{ url('/contato') }}">CONTATO</a></li>
			</ul>
			<div class="clearfix"></div>
	</header>

	<div class="container">
		<div class="row">
			@foreach ($noticias as $obj)

			<div class="col-4" style="margin-bottom: 15px">
				<a href="{{route('noticia', ['id'=>$obj->id])}}">
					<div class="card">
						<img src="{{ asset('img/'.$obj->fotoname) }}">
						<div class="card-header">
							<h3>
								{{$obj->titulo}}
							</h3>
						</div>
						<div class="card-body" style="padding: 15px">
							<p>
								{{$obj->descricao}}
							</p>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>	
	
	<br><br><br><br>
	
	
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
				
			</div><!-- oflow-hidden -->
		</div><!-- container -->
	</footer>
	
	<!-- SCIPTS -->
	
	<script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.min.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/tether.min.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
	
	<script type="text/javascript" src="<?php echo asset('js/scripts.js')?>"></script>
	
</body>
</html>