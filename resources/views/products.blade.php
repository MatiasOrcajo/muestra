@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Descripción</th>
                    <th scope="col">Aclaración</th>
                    <th scope="col">Cliente A</th>
                    <th scope="col">Cliente B</th>
                    <th scope="col">Cliente C</th>
                    <th scope="col">Categoria</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <th>{{$product->title}}</th> 
                            <th>{{$product->subtitle}}</th>
                            <th>{{$product->A}}</th>
                            <th>{{$product->B}}</th> 
                            <th>{{$product->C}}</th>
                            <th>{{$product->categories->title}}</th>
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
                    No hay productos
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection