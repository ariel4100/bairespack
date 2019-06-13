@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('galeria.index',$producto->id) }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('galeria.update',$galery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="product_id" name="product_id" value="{!! $producto->id !!}" class="form-control">
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="order" name="order" class="form-control" value="{!! $galery->order !!}">
                    <label for="order" class="">Orden</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                </div>
            </div>
            <div class="col-md-12 my-5 text-center">
                <img src="{{ asset($galery->image) }}" alt="" class="img-fluid" style="height: 200px">
            </div>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection

