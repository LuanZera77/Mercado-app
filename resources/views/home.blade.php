@extends('layouts.main')

@section('title', 'Bom preço')

@section('content')

    <!-- Card group -->
    <div class="row">
        @foreach($categoria as $setor)
            
            <!-- Card -->
            <div class="card my-4 col-10">

                <!-- Card header -->
                <div class="card-header">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="..." alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <!-- Nome da Categoria -->
                            <h3>{{$setor->nome}}</h3>
                        </div>
                    </div>
                </div>
                <!-- End Card header -->

                <!-- Card body -->
                <div class="card-body">
                   
                        @foreach($setor->produtos as $item)

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">imagem</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Detalhes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                  <th scope="row"><img src="/categorias/{{$item->imagem}}" alt=""></th>
                                    <td>{{$item->nome}}</td>
                                    <td>{{$item->preco}}</td>
                                    <td>
                                      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDetalhes">
                                          Detalhes
                                      </button>
                                      <div class="modal fade" id="modalDetalhes" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalToggleLabel">{{$item->nome}}</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul class="list-group">
                                                  <li class="list-group-item"><b>ID do produto:</b>{{$item->id}}</li>
                                                  <li class="list-group-item"><b>Nome:</b> {{$item->nome}}</li>
                                                  <li class="list-group-item"><b>Preço:</b> R$ {{$item->preco}}</li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                              <a class="btn btn-primary" data-bs-toggle="modal" href="{{route('produtos.edit', $item->id)}}" role="button">Editar</a>
                                                <form action="{{route('produtos.destroy', $item->id)}}" method="post">

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
                                            </div>
                                          </div>
                                        </div>
                                      </div>                                                                 
                                    </td>
                                </tr>           
                              </tbody>
                          </table>    
                      @endforeach
                </div>
                <!-- End card body -->
                
              
            </div>
            <!--End card-->

        @endforeach
    </div>
    <!--End Card group-->

@endsection