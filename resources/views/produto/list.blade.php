
@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<section class="table-responsive">
        <table class="table table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>

                    <th class="text-center" colspan="3">Detalhes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <th>{{$produto->id}}</th>
                        <td>{{$produto->nome}}</td>
                        <td>R$ {{$produto->preco}}</td>
                        <td>{{$produto->categoria->nome}}</td>

                        <td>
                            <a class="btn btn-info" href="{{route('produtos.show', $produto->id)}}">Ver usuário</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('produtos.edit', $produto->id)}}">Editar</a>
                        <td>
                            <form action="{{route('produtos.destroy', $produto->id)}}" method="post">

                                @csrf
                                
                                @method("DELETE")
        
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Apagar
                                </button>
        
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="Editar" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-center" id="Editar">Apagar Produto</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                    <p>
                                        Lembre-se de que, após o apagamento, não será possível recuperar esses dados.
                                    </p>
        
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                        <input type="submit" class="btn btn-danger" value="Apagar">
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </form> 
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </section>


@endsection