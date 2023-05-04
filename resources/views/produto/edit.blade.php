@extends('layouts.create-layout')

@section('title', 'Edição')
@section('form', 'Edição de produtos')

@section('content')

    <form action="{{route('produtos.update', $produto->id)}}" method="post">

        @csrf
        
        @method("PUT")

        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Informe o nome" aria-label="Nomne" aria-describedby="NomeProduto" value="">
          </div>

        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
            <input type="text" class="form-control" aria-label="Valor do produto" value="">
        </div>  

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="FotoProduto" value="">
            <label class="input-group-text" for="fotoProduto">Upload</label>
        </div>

        <input type="submit" value="Editar" class="btn btn-outline-success m-2">
        <input type="button" value="Cancelar" class="btn btn-outline-danger">

    </form> 

@endsection