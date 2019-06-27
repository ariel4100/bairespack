@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('categoria.index') }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('categoria.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="md-form col-md-6">
                <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
            </div>
            <div class="md-form col-md-6">
                <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
            </div>
            <div class="col-md-4">
                <div class="md-form">
                    <input type="text" id="order" name="order" class="form-control">
                    <label for="order" class="">Orden</label>
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
