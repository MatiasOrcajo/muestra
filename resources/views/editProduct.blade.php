@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <h1 class="mb-5 text-center">{{$product->title}}</h1>
    <div class="row justify-content-center">
        <form action="{{route('dashboard.update.product')}}" method="POST" class="w-50">
            @csrf
            <div class="form-group m-0">
                <label for="">Titulo</label>
                <input type="text" class="form-control" name="title" value="{{$product->title}}">
            </div>
            <div class="form-group m-0">
                <label for="">Aclaración</label>
                <input type="text" class="form-control" name="subtitle" value="{{$product->subtitle}}">
            </div>
            <div class="form-group m-0">
                <label for="">Cliente A</label>
                <input type="text" class="form-control" name="A" value="{{$product->A}}">
            </div>
            <div class="form-group m-0">
                <label for="">Cliente B</label>
                <input type="text" class="form-control" name="B" value="{{$product->B}}">
            </div>
            <div class="form-group m-0">
                <label for="">Cliente C</label>
                <input type="text" class="form-control" name="C" value="{{$product->C}}">
            </div>

            <input type="hidden" name="id" value="{{$product->id}}">

            <button type="submit" class="btn btn-success my-2">
                Guardar Cambios
            </button>
            
            <a href="{{route('dashboard.show.category', $product->subcategories->id)}}">
                <button type="button" class="btn btn-danger my-2">
                    Descartar
                </button>
            </a>
        </form>
    </div>
</div>

@endsection