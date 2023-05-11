@extends('layouts.create-layout')

@section('title', 'Cadastro')
@section('form', 'Cadastro de Categoria')

@section('content')

    <form action="{{route('categoria.store')}}" method="post">

        @csrf                      
        <div class="input-group mb-3">
            <input type="text" name="nome" class="form-control" placeholder="Username" aria-label="Nome" aria-describedby="NomeCategoria">
          </div>

        <div class="input-group mb-3">
            <input type="file" name="imagem" class="form-control" id="FotoCategoria">
        </div>

        <input type="submit" value="Cadastrar" class="btn btn-outline-success m-2">
        <input type="button" value="Cancelar" class="btn btn-outline-danger">

    </form> 

@endsection