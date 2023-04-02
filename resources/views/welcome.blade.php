<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <link  rel="stylesheet" href="/css/styles.css"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    <div id="login">

            <form class="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" autocomplete="off">
                    </div>

                    <div class="card-content-area">
                        <label for="password">Senha</label>
                        <input type="password" id="password" autocomplete="off">
                    </div>

                    <div class="card=content-login">
                       <a href="/formulario"> <input type="button" value="Login" name="login"> </a>
                    </div>
                    
                    <div class="card-content-join">
                        <a href="/cadastrar">Realizar Cadastro</a>
                    </div>
                </div>

            </form>

        </div>


    </body>
</html>
