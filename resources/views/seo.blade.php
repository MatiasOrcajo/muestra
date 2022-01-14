@extends('dashboardApp')
@section('content')

<div class="container-fluid px-lg-5">
    <div class="col-12">
        <form action="{{route('dashboard.add.seo')}}" method="POST" class="w-100">
            @csrf
            <div class="form-group m-0">
                <label for=""><strong>HEADER</strong></label>
                <textarea type="text" rows="10" class="form-control" name="head">{{$head}}</textarea>
            </div>
            <div class="form-group m-0">
                <label for=""><strong>BODY</strong></label>
                <textarea type="text" rows="10" class="form-control" name="body">{{$body}}</textarea>
            </div>

            <button type="submit" class="btn btn-success my-2">
                Guardar Cambios
            </button>
        </form>
    </div>
</div>

@endsection