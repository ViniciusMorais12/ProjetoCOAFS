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
			<h2 class="mt-30"  ><b>Historia</b></h2>

			<p class="pt-30" align="justify">O Serviço Nacional de Aprendizagem do Cooperativismo (Sescoop) foi criado pela Medida Provisória nº 1.715, de 3 de setembro de 1998. A partir daí, as cooperativas passaram a receber em serviços a contribuição que antes recolhiam ao governo em benefício das instituições nacionais Senai, Sesc, Sesi, Senac, Senat, Sest, Sebrae e Senar..</p>

			<p class="pt-30" align="justify">
			
					A quantidade de profissionais capacitados pelo Sescoop para atuar no setor saiu de 81 mil, em dezembro de 2000, para mais de 1 milhão, no acumulado até 2007. Com isso, tornou-se o principal estimulador da autogestão, da formação profissional, do monitoramento e da promoção social das cooperativas. O conjunto dessas ações contribui fortemente para o desenvolvimento sustentável do cooperativismo.

					O Sescoop também colabora para a melhoria da qualidade de vida da população. Tanto, que o Índice de Desenvolvimento Humano (IDH) – criado para medir o nível de desenvolvimento de um país, a partir de indicadores de educação, longevidade e renda – dos municípios onde existem cooperativas é sempre mais alto que os dos municípios sem cooperativa. Uma das explicações para isso é o caráter social dessas sociedades que, por não objetivarem o lucro, possibilitam a fixação dos recursos obtidos para o desenvolvimento da economia e da população locais.  ( fonte: www.brasilcooperativo.coop.br )

					Destaques
					 Agenda
					 Credenciamento
					 Transparência Sescoop-RN
					</p>
									
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