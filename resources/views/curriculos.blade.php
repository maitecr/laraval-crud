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
        @foreach($curriculos as $curriculo)
            <div id="curriculos" class="cards">
                <div class="card">
                    <div class="card-header" >
                        <h1>Currículo nº: {{$curriculo['id']}}</h1>
                    </div> 
                    <div class="card-content">
                        <div class="card-content-area">
                            <h2>{{$curriculo['nome']}} {{$curriculo['sobrenome']}}</h2>
                        </div>

                        <div class="card-content-area">
                            <h2>{{$curriculo['cidade']}}</h3>
                        </div>

                        @if(isset($curriculo['nome_arquivo']))
                            <div class="card-content-area">
                            <a href='{{ asset("storage/{$curriculo->nome_arquivo}") }}' target="_blank">Abrir PDF</a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </body>
</html>