@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('slider.list', ['seccion' => $section]) }}"><< Volver</a>
        <section class=" ">
            <form class="row" method="POST" action="{{ route('slider.update',$slider->id) }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="section" value="{{$section}}">
                <div class="md-form col-md-12">
                    <input type="text" id="order" name="order" placeholder="Orden" class="form-control" value="{!! $slider->order !!}">
                </div>
                <div class="md-form col-md-6">
                    <p class="mb-0">Texto Es</p>
                    <textarea id="text_es" class="md-textarea form-control"  name="text_es" rows="3">{!! $slider->text{'text_es'} !!}</textarea>
                </div>

                <div class="md-form col-md-6">
                    <p class="mb-0">Texto En</p>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $slider->text{'text_en'} !!}</textarea>
                </div>
                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Imagen</label>
                    </div>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset($slider->image) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-12 my-4 text-right">
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </section>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush