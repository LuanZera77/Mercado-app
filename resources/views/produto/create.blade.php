@extends('layouts.create-layout')

@section('title', 'Cadastro')
@section('form', 'Cadastro de Produto')

@section('content')

        <form action="{{route('usuario.store')}}" method="post">

            @csrf

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
              </div>

            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="text" class="form-control" aria-label="Valor do produto">
            </div>  

            <div class="input-group mb-3">
                <input type="file" class="form-control" id="Foto">
                <label class="input-group-text" for="foto">Upload</label>
            </div>

            <input type="submit" value="Cadastrar" class="btn btn-outline-success m-2">
            <input type="button" value="Cancelar" class="btn btn-outline-danger">
        </form>

@endsection