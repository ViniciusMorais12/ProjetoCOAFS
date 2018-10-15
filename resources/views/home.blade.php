@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div >

                <div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        <head>
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
                
                <div class="container">
                    <a class="logo"><img src="images/cooperativa.jpg" alt="Logo"></a>
                    
                    
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
                    <div class="row">
                    
                        <div class="col-sm-12 col-md-8">
                            <h3><b>Criar Noticias</b></h3>
                            <form class="form-block form-bold form-mb-20 form-h-35 form-brdr-b-grey pr-50 pr-sm-0" method="POST" action="{{route('salvar_noticia')}}">
                                {!! csrf_field() !!}
                                <div class="row">
                                
                                    <div class="col-sm-6">
                                        <br><h4><b>Titulo</b></h4>
                                        <div class="pos-relative">
                                            <input class="pr-20" type="text" placeholder="Título"  name="titulo" >
                                        </div><!-- pos-relative -->
                                    </div><!-- col-sm-6 -->
                                    
                                    <div class="col-sm-12">
                                        <div class="pos-relative pr-80">
                                            <h4><b>Descrição</b></h4>
                                            <input type="textarea" placeholder="Descreva a notícia em uma frase " class="mb-0" name="descricao"></input>
                                            <br>
                                        </div><!-- pos-relative -->
                                    </div><!-- col-sm-6 -->

                                    <div class="col-sm-12">
                                        <div class="pos-relative pr-80">
                                            <h4><b>Texto</b></h4>
                                            <textarea  name="texto" > </textarea>
                                            <br><br><br>
                                            <button class="abs-br font-20 plr-15 btn-fill-primary" type="submit">Criar</button>
                                        </div><!-- pos-relative -->
                                    </div><!-- col-sm-6 -->
                                    
                                </div><!-- row -->
                            </form>
                        </div><!-- col-md-6 -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>

    
    <!-- SCIPTS -->
    
    <script type="text/javascript" src="<?php echo asset('js/jquery-3.2.1.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo asset('js/tether.min.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo asset('js/bootstrap.js')?>"></script>
    
    <script type="text/javascript" src="<?php echo asset('js/scripts.js')?>"></script>
    
</body>
</html>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
