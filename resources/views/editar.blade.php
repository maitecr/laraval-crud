@extends('main')
@section('title', 'Editar Dados')

<div id="update" class="cards">

    <form class="card" method="POST" action="{{route('atualizaProduto', $curriculo->id)}}" enctype="multipart/form-data">
    @method('POST')
    @csrf
            <div class="card-header">
                <h2>Atualizar Currículo</h2>
            </div> 

            <div class="card-content">
                <div class="card-content-area">
                        <label for="">Nome</label>
                        <input type="text" name="nome" id="nome" value="{{$curriculo['nome']}}" size="50">
                    </div>

                    <div class="card-content-area">
                        <label for="">Sobrenome</label>
                        <input type="text" name="sobrenome" id="sobrenome" value="{{$curriculo['sobrenome']}}"  size="50">
                    </div>

                    <div class="card-content-area">
                        <label for="">Cidade</label>
                        <input type="text" name="cidade" id="cidade" value="{{$curriculo['cidade']}}" size="50">
                    </div>

                    <div class="card-content-area">
                        <label for="pdf">Arquivo PDF</label>
                        <input type="file" name="pdf" id="pdf">
                    </div>

                    <div class="card-content-area">
                        <input type="submit" name="submit" value="Atualizar">
                        <a href="{{route('deletar', $curriculo->id)}}" class="deletar">Deletar</a>
                    </div>
                </div>
            </div>
    </form>

</div>

@section('content')
@endsection
