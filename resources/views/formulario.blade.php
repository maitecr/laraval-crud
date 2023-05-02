@extends('main')
@section('title', 'Enviar Currículo')

<div id="create" class="cards">

        @if(isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p> {{$error}} </p>
                @endforeach
            </div>
        @endif

        <form class="card" method="POST" action="{{route('enviar')}}"  enctype="multipart/form-data">
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
                    <label for="">Cidade</label>
                    <input type="text" name="cidade" id="cidade" size="50">
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

@section('content')
@endsection