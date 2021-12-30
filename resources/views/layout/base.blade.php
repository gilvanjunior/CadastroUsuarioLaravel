<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config( 'app.name' )}} :: @yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            .logo img{
                width: 50px;
                height: 50px;
            }
            .logo{
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                background-color: black;
            }
            label{
                width: 50px;
            }
        </style>
        
    </head>
    <body>
        <div class="logo">
            <img src="{{ asset('img/icon_branco.png') }}" >
        </div>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <div class="title m-b-md">
                    @yield('conteudo')
                </div>
            </div>
        </div>
    </body>

    <footer>
        <p>Digital - 2019</p>
    </footer>
</html>
