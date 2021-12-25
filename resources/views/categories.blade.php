@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <div class="row">
        @forelse ($categories as $category)
            <div class="card w-25 mx-3 mt-3 w-100">
                <a href="{{route('dashboard.show.category', $category->id)}}">
                    <div class="card-body">
                        {{$category->title}}
                    </div>
                </a>
                    <div class="d-flex">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar{{$loop->iteration}}">
                            Editar
                        </button>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">
                            Borrar
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Borrar categoria {{$category->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                ¿Estás seguro de que deseas borrar la categoria? Se van a borrar también sus productos asociados.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">
                                        Volver
                                    </button>
                                    <form action="{{route('dashboard.delete.category', $category->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Eliminar
                                        </button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    {{-- editar --}}

                    <div class="modal fade" id="editar{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar categoria {{$category->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{route('dashboard.edit.category', $category->id)}}" method="POST" id="edit_category_form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" name="title" class="form-control" value="{{$category->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                    </div>
                                </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">
                                        Volver
                                    </button>
                                    <button type="submit" class="btn btn-success" form="edit_category_form">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            </div>
        @empty
            No hay categorias
        @endforelse
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Crear Categoria
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{route('dashboard.create.category')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Titulo">
            </div>
            <div class="form-group">
                <input type="text" name="slug" class="form-control" placeholder="Slug">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection