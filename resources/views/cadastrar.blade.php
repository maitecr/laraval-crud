@extends('main')
@section('title', 'Cadastrar Usuário')

    <div id="join" class="cards">

            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p> {{$error}} </p>
                    @endforeach
                </div>
            @endif

            <form class="card" method="POST" action="{{route('cadastrar.usuario')}}">
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
                        <label for="password">Confimar Senha</label>
                        <input type="password" name="confirmar" id="confirmar">
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

@section('content')
@endsection