@extends('layouts.create-layout')

@section('title', 'Edição')
@section('form', 'Edição de produtos')

@section('content')

    <form enctype="multipart/form-data"  action="{{route('produtos.update', $produto->id)}}" method="post">

        @csrf
        
        @method("PUT")

        <div class="input-group mb-3">
            <input type="text" name="nome" class="form-control" placeholder="Informe o nome" aria-label="nome" aria-describedby="NomeProduto" value="{{$produto->nome}}">
          </div>

        <div class="input-group mb-3">
            <span class="input-group-text">R$</span>
            <input type="text" name="preco" class="form-control" aria-label="Valor do produto" value="{{$produto->preco}}">
        </div>  

        <div class="input-group mb-3">
            <input type="file" name="imagem" class="form-control" id="FotoProduto" value="">
            <label class="input-group-text" for="fotoProduto">Upload</label>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
            <select name="categoria" class="form-select" id="inputGroupSelect01">
                <option selected value="{{$produto->categoria->id}}">{{$produto->categoria->nome}}</option>
                
                @foreach ($categorias as $item)
                    <option value="{{$item->id}}">{{$item->nome}}</option>
                @endforeach
            </select>
          </div>

        <input type="submit" value="Editar" class="btn btn-outline-success m-2">
        <a href="{{route('produtos.index')}}"class="btn btn-outline-danger">Cancelar</a>

    </form> 

@endsection