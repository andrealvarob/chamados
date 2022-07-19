@extends('layouts.app')

@section('content')
    <h1>Dados do chamado</h1>

    <ul>
        <li>Título: {{$chamado->titulo}}</li>
        <li>Solicitção: {{$chamado->solicitacao}}</li>
        <li>Data: {{$chamado->data}}</li>
        <li>Status: {{$chamado->status}}</li>
        <li>Prioridade: {{$chamado->prioridade}}</li>
        <li>Solicitante: {{$chamado->solicitante}}</li>
        <li>Setor: {{$chamado->setor}}</li>
    </ul>

    <form action="{{route('chamados.delete', $chamado->id)}}" method="post">
        @method('DELETE');
        @csrf
        <button type="submit"> Deletar</button>
    </form>

@endsection

