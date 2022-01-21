@extends('dashboardApp')
@section('content')

{{-- <div class="container-fluid px-lg-5">
    <h1 class="mb-5">{{$category->title}}</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Subcategoria</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Aclaracion</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Cliente A</th>
                    <th scope="col">Cliente B</th>
                    <th scope="col">Cliente C</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  
                    @forelse ($subcategories as $subcategory)
                        @forelse ($subcategory->products as $product)
                            <tr>
                                <th>{{$product->subcategories->title}}</th>
                                <th>{{$product->title}}</th>
                                <th>{{$product->subtitle}}</th>
                                <th>{{$product->slug}}</th>
                                <th>{{$product->A}}</th>
                                <th>{{$product->B}}</th>
                                <th>{{$product->C}}</th>
                                <th><a href="{{route('dashboard.edit.product', $product->slug)}}">Editar</a></th>
                                <th>
                                    <form action="{{route('dashboard.delete.product', $product->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" style="color: rgb(207, 57, 57); text-decoration: none; background: transparent; border: none; cursor: pointer;">
                                            Eliminar
                                        </button>
                                    </form>
                                </th>
                            </tr>
                        @empty
                        <tr>
                            <th>Esta subcategoría no tiene productos</th>
                        </tr>
                    @endforelse
                    
                    @empty
                        
                    @endforelse
                  
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">  
        Crear Producto
    </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('dashboard.create.product')}}" method="POST" class="w-100">
                @csrf
                <div class="form-group m-0">
                    <label for="">Titulo</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group m-0">
                    <label for="">Aclaración</label>
                    <input type="text" class="form-control" name="subtitle">
                </div>
                <div class="form-group m-0">
                    <label for="">Cliente A</label>
                    <input type="text" class="form-control" name="A">
                </div>
                <div class="form-group m-0">
                    <label for="">Cliente B</label>
                    <input type="text" class="form-control" name="B">
                </div>
                <div class="form-group m-0">
                    <label for="">Cliente C</label>
                    <input type="text" class="form-control" name="C">
                </div>

                <input type="hidden" value="{{$category->id}}" name="category_id">
    
                <button type="submit" class="btn btn-success my-2">
                    Guardar Cambios
                </button>
            </form>
        </div>
      </div>
    </div>
  </div>
    </div>
</div> --}}
<div class="container-fluid px-lg-5">
    <div class="row">
        @forelse ($subcategories as $subcategory)
            <div class="card w-25 mx-3 mt-3 w-100">
                <a href="{{route('dashboard.show.subcategory', $subcategory->id)}}">
                    <div class="card-body">
                        {{$subcategory->title}}
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
                                <h5 class="modal-title" id="exampleModalLabel">Borrar categoria {{$subcategory->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                ¿Estás seguro de que deseas borrar la subcategoría? Se van a borrar también sus productos asociados.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary">
                                        Volver
                                    </button>
                                    <form action="{{route('dashboard.delete.category', $subcategory->id)}}" method="POST">
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
                                <h5 class="modal-title" id="exampleModalLabel">Editar categoria {{$subcategory->title}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                <form action="{{route('dashboard.edit.category', $subcategory->id)}}" method="POST" id="edit_category_form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Titulo</label>
                                        <input type="text" name="title" class="form-control" value="{{$subcategory->title}}">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">
                                            Volver
                                        </button>
                                        <button type="submit" class="btn btn-success">
                                            Actualizar
                                        </button>
                                    </div>
                                </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                
            </div>
        @empty
            No hay subcategorias
        @endforelse
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Crear Subcategoria
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
          <form action="{{route('dashboard.create.subcategory')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title2"> Titulo </label>
                <input type="text" id="title2" name="title" class="form-control" placeholder="Titulo">
            </div>
            <input type="hidden" value="{{$category->id}}" name="category_id">
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection