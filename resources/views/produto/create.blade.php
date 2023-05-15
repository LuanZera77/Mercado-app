@extends('layouts.create-layout')

@section('title', 'Cadastro')
@section('form', 'Cadastro de Produto')

@section('content')

        <form enctype="multipart/form-data" action="{{route('produtos.store')}}" method="post">

            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" name="nome" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="text" name="preco" class="form-control" aria-label="Valor do produto">
            </div>  

            <div class="input-group mb-3">
                <input type="file" name="imagem" class="form-control" id="Foto">
                <label class="input-group-text" for="foto">Upload</label>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Categorias</label>
                <select name="categoria" class="form-select" id="inputGroupSelect01">
                    @foreach ($categoria as $item)
                        <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                </select>
              </div>

            <input type="submit" value="Cadastrar" class="btn btn-outline-success m-2">
            <a href="{{route('produtos.index')}}"class="btn btn-outline-danger">Cancelar</a>
        </form>

@endsection