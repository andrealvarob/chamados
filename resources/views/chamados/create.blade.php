@extends('layouts.app')

@section('content')
    <h1>Novo chamado</h1>

    <form action="{{route('chamados.store')}}" method="post">
        @csrf
        <input type="text" name="titulo" placeholder="título">
        <input type="text" name="solicitacao" placeholder="solicitação">
        <input type="date" name="data" placeholder="data" required pattern="\d{4}-\d{2}-\d{2}">
        
        <label for="status">status:</label>
        <select name="status">
            <option value="1">ativo</option>
            <option value="0">inativo</option>
        </select>

        <label for="prioridade">prioridade:</label>
        <select name="status">
            <option value="3">alto</option>
            <option value="2">medio</option>
            <option value="1">baixo</option>
        </select>

        <input type="text" name="solicitante" placeholder="solicitante">
        <input type="text" name="setor" placeholder="setor">

        <button type="submit">Enviar</button>
    </form>
@endsection