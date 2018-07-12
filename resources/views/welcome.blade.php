<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COAFS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000000;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 150px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Início</a>
                    @else
                        <a href="{{ url('/login') }}">Entrar</a>
                        <a href="{{ url('/register') }}">Cadastre-se</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    COAFS
                </div>

                <div class="links">
                    <a href="{{ url('/comosurge') }}">Como Surgiu</a>
                    <a href="{{ url('/noticias') }}">Notícias</a>
                    <a href="{{ url('/historia') }}">História</a>
                    <a href="{{ url('/quemsomos') }}">Quem Somos</a>
                    <a href="{{ url('/contato') }}">Contato</a>
                </div>
            </div>
        </div>
    </body>
</html>
