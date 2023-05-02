<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link  rel="stylesheet" href="{{asset('css/styles.css')}}"/>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">

    @section('content')
    <section class="menu">
        <div class="menu-div">
            <nav class="dp-menu">
                <ul>
                    <li> <a href="{{route('login')}}"> Login </a> </li>
                    <li> <a href="{{route('cadastrar')}}"> Cadastrar </a> </li>
                    <li> <a href="{{route('cadastrar.curriculo')}}"> Enviar Currículo </a> </li>
                    <li> <a href="{{route('curriculos')}}"> Currículos </a> </li>
                    <li> <a href=""> Logout </a> </li>   
                </ul>
            </nav>
        </div>
    </section>
  

    </body>
</html>
