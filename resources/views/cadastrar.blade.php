<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <link  rel="stylesheet" href="{{asset('css/styles.css')}}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    <div id="join" class="cards">

            <form class="card" method="POST" action="{{route('usuario.store')}}">
            @csrf
                <div class="card-header">
                    <h2>Cadastrar</h2>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Insira Usuário</label>
                        <input type="text" name="usuario" id="usuario" >
                    </div>

                    <div class="card-content-area">
                        <label for="password">Insira Senha</label>
                        <input type="password" name="senha" id="password">
                    </div>

                    <div class="card-content-area">
                        <label for="password">Repita a Senha</label>
                        <input type="password" name="senha2" id="password">
                    </div>

                    <div class="card=content-area">
                        <input type="submit" value="Cadastrar">
                    </div>

                    <div class="card-content-area">
                        <a href="./">Voltar</a>
                    </div>
                </div>

            </form>

        </div>


    </body>
</html>