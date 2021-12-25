@extends('dashboardApp')
@section('content')

<div class="container-fluid px-5">
    <h1>TEXTOS</h1>
    <div class="row justify-content-around">
        @forelse ($texts as $text)
            <div class="card">
                <div class="card-header">
                    Cliente A
                </div>
                <div class="card-body">
                    <p>{{$text->cliente_a}}</p> 
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarModal">
                        Editar
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Cliente B
                </div>
                <div class="card-body">
                    <p>{{$text->cliente_b}}</p> 
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarModal">
                        Editar
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Cliente C
                </div>
                <div class="card-body">
                    <p>{{$text->cliente_c}}</p> 
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editarModal">
                        Editar
                    </button>
                </div>
            </div>

            <!-- Modal Editar -->
            <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Textos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('dashboard.edit.texts')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="cliente_a" class="form-control" value="{{$text->cliente_a}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cliente_b" class="form-control" value="{{$text->cliente_b}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cliente_c" class="form-control" value="{{$text->cliente_c}}">
                            </div>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        @empty
            <div class="d-flex flex-column">
                No hay textos
                <button type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#exampleModal">
                    Crear textos
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Textos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('dashboard.create.texts')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="cliente_a" class="form-control" placeholder="Cliente A">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cliente_b" class="form-control" placeholder="Cliente B">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cliente_c" class="form-control" placeholder="Cliente C">
                            </div>
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        @endforelse
    </div>
</div>

@endsection