@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('productos.index') }}"><< Volver</a>
        <form class="" method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="md-form">
                            <input type="text" id="title" name="title" class="form-control">
                            <label for="title" class="">Titulo</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="md-form">
                            <input type="text" id="order" name="order" class="form-control">
                            <label for="order" class="">Orden</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form">
                            <h6>Texto</h6>
                            <textarea id="subtitle" class="md-textarea form-control" name="text" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                            <label class="custom-file-label" for="customFileLang">Seleccionar Imagen Principal</label>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" name="featured">
                            <label class="custom-control-label" for="customSwitch1">Destacado</label>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center justify-content-center">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="Oferta" name="offer">
                            <label class="custom-control-label" for="Oferta">Oferta</label>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Categoria</p>
                    <select class="custom-select form-control select2" name="category_id">
                        @forelse($categorias as $item)
                            <option value="{!! $item->id !!}">{!! $item->title !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Subcategoria</p>
                    <select class="custom-select form-control select2" name="subcategory_id">
                        @forelse($subcategorias as $item)
                            <option value="{!! $item->id !!}">{!! $item->title !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
            </div>
            <capacidad-component :terminaciones="{{ json_encode($terminaciones) }}" :capacidades="{{ json_encode($capacidades) }}" :cierres="{{ json_encode($cierres) }}"></capacidad-component>
            </form>
    </div>
@endsection
@section('script')
    <script>
        /*$(document).ready(function() {
            $('.select2').select2();
        });*/

        CKEDITOR.replace('subtitle');

        CKEDITOR.config.width = '100%';
    </script>
@stop
