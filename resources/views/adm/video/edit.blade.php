@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('video.index') }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('video.update',$video->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="md-form col-md-12">
                    <input type="text" id="order" name="order" placeholder="Orden" value="{{ $video->order }}" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" value="{{ $video->text{'title_es'} }}" placeholder="Categoria - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" value="{{ $video->text{'title_en'} }}" placeholder="Categoria - ingles" class="form-control">
                </div>
            </div>
            <video-component :galeria="{{ json_encode($video->video) }}"></video-component>
            <div class="row">
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
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

