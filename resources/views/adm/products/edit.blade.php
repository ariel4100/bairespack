@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('productos.index') }}"><< Volver</a>
        <form class="" method="POST" action="{{ route('productos.update',$producto->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="md-form">
                        <input type="text" id="title" name="title" class="form-control" value="{!! $producto->title !!}">
                        <label for="title" class="">Titulo</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="md-form">
                        <input type="text" id="order" name="order" class="form-control" value="{!! $producto->order !!}">
                        <label for="order" class="">Orden</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form">
                        <h6>Texto</h6>
                        <textarea id="subtitle" class="md-textarea form-control" name="text" rows="3">{!! $producto->text !!}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">
                        <label class="custom-file-label" for="customFileLang">Seleccionar Imagen Principal</label>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" {!! $producto->featured ? 'checked': null !!} id="customSwitch1" name="featured">
                        <label class="custom-control-label" for="customSwitch1">Destacado</label>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" {!! $producto->offer ? 'checked': null !!} id="Oferta" name="offer">
                        <label class="custom-control-label" for="Oferta">Oferta</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 my-4 d-flex align-items-center justify-content-center">
                    <img src="{{ asset($producto->image) }}" alt="" class="img-fluid" style="height: 200px">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Categoria</p>
                    <select class="custom-select form-control select2" name="category_id">
                        @forelse($categorias as $item)
                            <option value="{!! $item->id !!}" {{ $producto->category_id == $item->id  ? 'selected' : null }}>{!! $item->title !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
                {{--@dd($producto->subcategory()->first())--}}
                <div class="col-md-6 mt-4">
                    <p>Seleccionar Subcategoria</p>
                    <select class="custom-select form-control select2" name="subcategory_id">
                        @forelse($subcategorias as $item)
                            <option value="{!! $item->id !!}" {{ $producto->subcategory()->first()->id == $item->id  ? 'selected' : null }}>{!! $item->title !!}</option>
                        @empty
                            <option value="" selected disabled>No hay registros</option>
                        @endforelse
                    </select>
                </div>
            </div>
            {{--@dd($producto->closure)--}}
            <cierres-component :capacidad="{{ json_encode($producto->capacity()->select('capacities.id','cc')->get()) }}" :precio="{{ json_encode($precio) }}" :terminacion="{{ json_encode($producto->termination) }}" :cierre="{{ json_encode($producto->closure) }}"></cierres-component>
        </form>
    </div>
@endsection
@section('script')
    <script>
        CKEDITOR.replace('subtitle');

        CKEDITOR.config.width = '100%';
    </script>
@stop

