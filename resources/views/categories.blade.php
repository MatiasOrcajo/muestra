@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <div class="row">
        @forelse ($categories as $category)
            
                <div class="card w-25 mx-3 mt-3">
                    <a href="{{route('dashboard.show.category', $category->id)}}">
                        <div class="card-body">
                            {{$category->title}}
                        </div>
                    </a>
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