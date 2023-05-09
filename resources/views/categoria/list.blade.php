

@extends('layouts.main')

@section('title', 'Categoria')

@section('content')

<section class="table-responsive">
        <table class="table table-hover ">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>nome</th>


                    <th class="text-center" colspan="3">Detalhes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoria as $item)
                    <tr>
                        <th>{{$item->id}}</th>
                        <td>{{$item->nome}}</td>

                        <td>
                            <a class="btn btn-info" href="{{route('categoria.show', $item->id)}}">Ver categoria</a>
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{route('categoria.edit', $item->id)}}">Editar</a>
                        </td>
                        <td>
                            <form action="{{route('categoria.destroy', $item->id)}}" method="post">

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
                                    <h5 class="modal-title text-center" id="Editar">Apagar Usuário</h5>
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

    <section class="btn-create float-left">
        <a href="{{route('categoria.create')}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
        </a>
    </section>


@endsection