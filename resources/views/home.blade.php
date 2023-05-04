@extends('layouts.main')

@section('title', 'Bom preço')

@section('content')

    <section class="card-group">
        @foreach()

            <section class="card container">

                <div class="card-header">

                    <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img src="..." alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <!-- Nome da Categoria -->
                            <h3>{{}}</h3>
                        </div>
                      </div>

                </div>

                <div class="card-body">
                    <h5 class="card-title">{{}}</h5>
                   
                        @foreach()

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">imagem</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">

                                        <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalToggleLabel">{{$produto}}</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">{{}}</li>
                                                        <li class="list-group-item">{{}}</li>
                                                      </ul>
                                                </div>
                                                <div class="modal-footer">
                                                  <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>                                     
                                          <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Editar</a>
                                          <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Apagar</a>

                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">{{}}</th>
                                    <td>{{}}</td>
                                    <td>{{}}</td>
                                    <td>{{}}</td>
                                </tr>           
                                </tbody>
                            </table>

                        @endforeach

                </div>
            </section>

        @endforeach
    </section>

@endsection