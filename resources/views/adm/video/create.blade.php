@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('video.index') }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('video.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="md-form col-md-12">
                    <input type="text" id="order" name="order" placeholder="Orden" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Categoria - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Categoria - ingles" class="form-control">
                </div>
            </div>
            <video-component></video-component>
            <div class="row">
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        // CKEDITOR.replace('title_es');
        // CKEDITOR.replace('title_en');
        //
        // CKEDITOR.config.width = '100%';


    </script>
@endpush
