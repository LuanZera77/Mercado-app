@extends('layouts.create-layout')

@section('title', 'Edição')
@section('form', 'Edição de Categoria')

@section('content')

    <form enctype="multipart/form-data"  action="{{route('categoria.update', $categoria->id)}}" method="post">

        @csrf
        
        @method("PUT")
                        
        <div class="input-group mb-3">
            <input type="text" name="nome" class="form-control" placeholder="Username" aria-label="Nome" aria-describedby="NomeCategoria" value="{{$categoria->nome}}">
          </div>

        <div class="input-group mb-3">
            <input type="file" name="imagem" class="form-control" id="FotoCategoria">
            <label class="input-group-text" for="fotoCategoria">Editar imagem</label>
        </div>

        <input type="submit" value="Editar" class="btn btn-outline-success m-2">
        <a href="{{route('categoria.index')}}"class="btn btn-outline-danger">Cancelar</a>

    </form> 

@endsection