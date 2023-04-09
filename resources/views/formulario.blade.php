<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registrar Informação</title>

        <link  rel="stylesheet" href="/css/styles.css"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    <div id="create" class="cards">

            <form class="card" method="POST" action="{{route('registro.store')}}">
            @csrf
                <div class="card-header" >
                    <h2>Enviar Currículo</h2>
                </div> 

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="">Nome</label>
                        <input type="text" name="nome" id="nome" size="50">
                    </div>

                    <div class="card-content-area">
                        <label for="">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" size="50">
                    </div>

                    <div class="card-content-area">
                        <label for="pdf">Arquivo PDF</label>
                        <input type="file" name="pdf" id="pdf">
                    </div>

                    <div class="card-content-area">
                        <input type="submit" value="Registrar">
                    </div>
                </div>

            </form>

        </div>


    </body>
</html>