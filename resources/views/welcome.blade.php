@extends('main')
@section('title', 'Home')


<div id="login" class="cards">

    <form class="card" action="">
    @csrf
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

            <div class="card=content-area">
                <input type="submit" value="Logar">
            </div>
            
            <div class="card-content-area">
                <a href="cadastrar">Realizar Cadastro</a>
            </div>
        </div>

    </form>

</div>


@section('content')
@endsection
