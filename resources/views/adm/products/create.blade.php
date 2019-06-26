@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('productos.index',['general' => $general]) }}"><< Volver</a>
        <form class="mb-5" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" class="d-none" name="general_id" value="{{ $general->id }}">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Categoria</p>
                    <select class="custom-select form-control select2" name="category_id">
                        <option value="">Ninguno</option>
                        @forelse($categorias as $item)
                            <option value="{!! $item->id !!}">{!! $item->text{'title_es'} !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Subcategoria</p>
                    <select class="custom-select form-control select2" name="subcategory_id">
                        <option value="">Ninguno</option>
                        @forelse($subcategorias as $item)
                            <option value="{!! $item->id !!}">{!! $item->text{'title_es'} !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
            </div>
            @if($general->id == 1)
                <div class="row">
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="subtitle_es" name="subtitle_es" placeholder="Subtitulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="subtitle_en" name="subtitle_en" placeholder="Subtitulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="md-form col-md-6">
                        <h6>Texto - español</h6>
                        <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Texto - ingles</h6>
                        <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_es" name="titlec_es" placeholder="Titulo Caracteristicas - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_en" name="titlec_en" placeholder="Titulo Caracteristicas - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Caracteristicas - español</h6>
                        <textarea id="caracteristica_es" class="md-textarea form-control" name="caracteristica_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Caracteristicas - ingles</h6>
                        <textarea id="caracteristica_en" class="md-textarea form-control" name="caracteristica_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_es" name="titlet_es" placeholder="Titulo Tabla - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_en" name="titlet_en" placeholder="Titulo Tabla - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - español</h6>
                        <textarea id="tabla_es" class="md-textarea form-control" name="tabla_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - ingles</h6>
                        <textarea id="tabla_en" class="md-textarea form-control" name="tabla_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_es" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - español</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_en" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - ingles</label>
                        </div>
                    </div>
                    <div class="md-form input-group col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="material-addon3">Video URL : https://www.youtube.com/watch?v=</span>
                        </div>
                        <input type="text" class="form-control" name="video" placeholder="L5817RH26ZM" aria-describedby="material-addon3" value="">
                    </div>
                    <div class="md-form col-md-4">
                        <input type="text" id="order" name="order" placeholder="Orden" class="form-control m-0">
                    </div>
                    {{--<div class="col-md-3 d-flex align-items-center justify-content-center">--}}
                    {{--<div class="custom-control custom-switch">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured">--}}
                    {{--<label class="custom-control-label" for="customSwitch1" >Destacado</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <gallery-component></gallery-component>
                </div>
            @endif
            @if($general->id == 2)
                <div class="row">
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="md-form col-md-6">
                        <h6>Texto - español</h6>
                        <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Texto - ingles</h6>
                        <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_es" name="titlec_es" placeholder="Titulo Caracteristicas - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_en" name="titlec_en" placeholder="Titulo Caracteristicas - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Planos - español</h6>
                        <textarea id="caracteristica_es" class="md-textarea form-control" name="caracteristica_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Planos - ingles</h6>
                        <textarea id="caracteristica_en" class="md-textarea form-control" name="caracteristica_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_es" name="titlet_es" placeholder="Titulo Tabla - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_en" name="titlet_en" placeholder="Titulo Tabla - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - español</h6>
                        <textarea id="tabla_es" class="md-textarea form-control" name="tabla_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - ingles</h6>
                        <textarea id="tabla_en" class="md-textarea form-control" name="tabla_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_es" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - español</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_en" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - ingles</label>
                        </div>
                    </div>
                    <div class="md-form input-group col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="material-addon3">Video URL : https://www.youtube.com/watch?v=</span>
                        </div>
                        <input type="text" class="form-control" name="video" placeholder="L5817RH26ZM" aria-describedby="material-addon3" value="">
                    </div>
                    <div class="md-form col-md-4">
                        <input type="text" id="order" name="order" placeholder="Orden" class="form-control m-0">
                    </div>
                    {{--<div class="col-md-3 d-flex align-items-center justify-content-center">--}}
                    {{--<div class="custom-control custom-switch">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured">--}}
                    {{--<label class="custom-control-label" for="customSwitch1" >Destacado</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
                <select-component></select-component>
                <gallery-component></gallery-component>
            @endif
            @if($general->id == 3)
                <div class="row">
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="md-form col-md-6">
                        <h6>Texto - español</h6>
                        <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Texto - ingles</h6>
                        <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_es" name="titlec_es" placeholder="Titulo Caracteristicas - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlec_en" name="titlec_en" placeholder="Titulo Caracteristicas - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Planos - español</h6>
                        <textarea id="caracteristica_es" class="md-textarea form-control" name="caracteristica_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Planos - ingles</h6>
                        <textarea id="caracteristica_en" class="md-textarea form-control" name="caracteristica_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_es" name="titlet_es" placeholder="Titulo Tabla - español" class="form-control">
                    </div>
                    <div class="md-form m-0 col-md-6">
                        <input type="text" id="titlet_en" name="titlet_en" placeholder="Titulo Tabla - ingles" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - español</h6>
                        <textarea id="tabla_es" class="md-textarea form-control" name="tabla_es" rows="3"></textarea>
                    </div>
                    <div class="md-form col-md-6">
                        <h6>Tabla - ingles</h6>
                        <textarea id="tabla_en" class="md-textarea form-control" name="tabla_en" rows="3"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file ">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_es" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - español</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="ficha_en" lang="es">
                            <label class="custom-file-label" for="customFileLang" data-browse="Subir">Ficha Tecnica - ingles</label>
                        </div>
                    </div>
                    <div class="md-form input-group col-md-8">
                        <div class="input-group-prepend">
                            <span class="input-group-text md-addon" id="material-addon3">Video URL : https://www.youtube.com/watch?v=</span>
                        </div>
                        <input type="text" class="form-control" name="video" placeholder="L5817RH26ZM" aria-describedby="material-addon3" value="">
                    </div>
                    <div class="md-form col-md-4">
                        <input type="text" id="order" name="order" placeholder="Orden" class="form-control m-0">
                    </div>
                    {{--<div class="col-md-3 d-flex align-items-center justify-content-center">--}}
                    {{--<div class="custom-control custom-switch">--}}
                    {{--<input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured">--}}
                    {{--<label class="custom-control-label" for="customSwitch1" >Destacado</label>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <gallery-component></gallery-component>
                </div>
            @endif
            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        /*$(document).ready(function() {
            $('.select2').select2();
        });*/

        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');
        CKEDITOR.replace('tabla_en');
        CKEDITOR.replace('tabla_es');
        CKEDITOR.replace('caracteristica_es');
        CKEDITOR.replace('caracteristica_en');
        CKEDITOR.config.width = '100%';
    </script>
@endpush
