@extends('layouts.app')

@section('content')
    <h1>Chamados
        (<a href="{{route('chamados.create')}}">+</a>)
    </h1>

    <ul>
        @foreach ($chamados as $chamado)
            <li>
                {{$chamado->titulo}} - 
                {{$chamado->solicitacao}} -
                {{$chamado->solicitante}} -
                {{$chamado->setor}}
                | <a href="{{ route('chamados.show', $chamado->id)}}">Ver mais</a> 
            </li>
    @endforeach
</ul>
@endsection

