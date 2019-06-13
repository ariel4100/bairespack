@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('galeria.index',$id) }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('galeria.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="order" name="product_id" value="{!! $id !!}" class="form-control">
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="order" name="order" class="form-control">
                    <label for="order" class="">Orden</label>
                </div>
            </div>

            <div class="col-md-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                </div>
            </div>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('subtitle');

        CKEDITOR.config.width = '100%';
    </script>
@stop
