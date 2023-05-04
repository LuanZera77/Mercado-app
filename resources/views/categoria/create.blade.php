@extends('layouts.create-layout')

@section('title', 'Edição')
@section('form', 'Cadastro de Categoria')

@section('content')

    <form action="{{route('produtos.store', $produto->id)}}" method="post">

        @csrf
        
        @method("PUT")
                        
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" aria-label="Nome" aria-describedby="NomeCategoria">
          </div>

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="FotoCategoria">
            <label class="input-group-text" for="fotoCategoria">Adicionar imagem</label>
        </div>

        <input type="submit" value="Editar" class="btn btn-outline-success m-2">
        <input type="button" value="Cancelar" class="btn btn-outline-danger">

    </form> 

@endsection