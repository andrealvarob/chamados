@extends('layouts.app')

@section('content')
    <h1>Dados do chamado</h1>

    <ul>
        <li>{{$chamado->titulo}}</li>
        <li>{{$chamado->solicitacao}}</li>
        <li>{{$chamado->data}}</li>
        <li>{{$chamado->status}}</li>
        <li>{{$chamado->prioridade}}</li>
        <li>{{$chamado->solicitante}}</li>
        <li>{{$chamado->setor}}</li>
    </ul>

    <form action="{{route('chamados.delete', $chamado->id)}}" method="post">
        @method('DELETE');
        @csrf
        <button type="submit"> Deletar</button>
    </form>

@endsection

