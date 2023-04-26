<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Visualizar Currículos</title>

        <link  rel="stylesheet" href="{{asset('css/styles.css')}}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    <div id="view" class="cards">

    <div class="card-header" >

                <div class="card-content">
                    <div class="card-content-area">
                        <h1>NOME + SOBRENOME</h1>
                    </div>

                    <div class="card-content-area">
                        <h1>CIDADE</h1>
                    </div>

                    <div class="card-content-area">
                        <h4>LINK CURRICULO</h4>
                    </div>
    </div>


    </body>
</html>