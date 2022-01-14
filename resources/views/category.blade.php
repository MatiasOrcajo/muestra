@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <h1 class="mb-5">{{$category->title}}</h1>
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
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
                  
                    @forelse ($products as $product)
                    <tr>
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
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug">
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
</div>

@endsection