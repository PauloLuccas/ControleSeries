@extends('layout')

@section('cabecalho')
    Adicionar Séries
@endsection

@section('conteudo')

    <form methods="post">
        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn btn-primary mt-2">Adicionar</button>
    </form>
@endsection