@extends('adm.layouts.app')

@section('content')
<div class="container p-4">
    <a class="text-decoration-none" href="{{ route('metadatos.index') }}"><< Volver</a>
    <form action="{{ route('metadatos.store') }}" class="mt-4" method="post">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="Seccion" name="section" class="form-control">
                    <label for="Seccion">Seccion</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <input type="text" id="Keywords" name="keyword" class="form-control">
                    <label for="Keywords">Keywords</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="md-form">
                    <h6>Descripción</h6>
                    <input type="text" id="description" name="description" class="form-control">
                </div>
            </div>
            <div class="col-md-12 text-right my-4">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('description');

        CKEDITOR.config.height = '150px';

        CKEDITOR.config.width = '100%';


    </script>
@stop