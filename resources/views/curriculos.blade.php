@extends('main')
@section('title', 'Currículos')

@foreach($curriculos as $curriculo)
    <div id="curriculos" class="cards">
        <div class="card">
            <div class="card-header" >
                <h1>Currículo nº: {{$curriculo['id']}}</h1>
            </div> 
            <div class="card-content">
                <div class="card-content-area">
                    <h2 class="titulos">Nome:</h2>
                    <h3>{{$curriculo['nome']}} {{$curriculo['sobrenome']}}</h3>
                </div>

                <div class="card-content-area">
                    <h2 class="titulos">Cidade: </h2>
                    <h3>{{$curriculo['cidade']}}</h3>
                </div>

                @if(isset($curriculo['nome_arquivo']))
                    <div class="card-content-area">
                    <h3 class="titulos">Currículo: </h3>
                    <a href='{{ asset("storage/{$curriculo->nome_arquivo}") }}' class="pdf" target="_blank">Abrir PDF</a>
                    </div>
                @endif

                <div class="card-content-area">
                    <a href="{{route('editar', $curriculo->id)}}" class="editar">Editar</a>
                </div>

                <div class="paginacao">
                    {{$curriculos->links()}}
                </div>
                
            </div>
        </div>
    </div>
@endforeach

@section('content')
@endsection
