<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro</title>

        <link  rel="stylesheet" href="/css/styles.css"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    <div id="join">

            <form class="card">
                <div class="card-header">
                    <h2>Cadastrar</h2>
                </div>

                <div class="card-content">
                    <div class="card-content-area">
                        <label for="usuario">Insira Usuário</label>
                        <input type="text" id="usuario" autocomplete="off">
                    </div>

                    <div class="card-content-area">
                        <label for="password">Insira Senha</label>
                        <input type="password" id="password" autocomplete="off">
                        <label for="password">Repita a Senha</label>
                        <input type="password" id="password" autocomplete="off">
                    </div>

                    <div class="card=content-submit">
                        <input type="submit" value="Cadastrar" name="cadastrar">
                    </div>

                    <div class="card-content-previous">
                        <a href="/">Voltar</a>
                    </div>
                </div>

            </form>

        </div>


    </body>
</html>