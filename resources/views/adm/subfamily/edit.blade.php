@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('subfamilia.index',['general' => $general]) }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('subfamilia.update',$subcategoria->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" class="d-none" name="general_id" value="{{ $general->id }}">
            @if($general->id == 1)
                {{--@dd($subcategoria)--}}
                <div class="row">
                    <div class="col-md-6">
                        <p class="m-0">Seleccionar Categoria</p>
                        <select class="browser-default custom-select" name="familia_id">
                            <option value="0">Ninguno</option>
                            @forelse($family as $item)
                                <option value="{{ $item->id }}" {{$item->id == $subcategoria->family_id ? 'selected' : ''}}>{{ $item->text{'title_es'} }}</option>
                            @empty
                                <option value="">No hay registro</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="order" name="order" placeholder="Orden" value="{{ $subcategoria->order }}" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" value="{{ $subcategoria->text{'title_es'} }}" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" value="{{ $subcategoria->text{'title_en'} }}" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <gallery-component :galeria="{{ json_encode($subcategoria->image) }}"></gallery-component>
                    </div>
                </div>
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="custom-file">--}}
                            {{--<input type="file" class="custom-file-input" id="customFileLang" name="image" lang="es">--}}
                            {{--<label class="custom-file-label" for="customFileLang" data-browse="Buscar">Seleccionar Imagen Principal</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12">--}}
                        {{--<img src="{{ asset($subcategoria->text{'image'} ?? '') }}" alt="" class="img-fluid">--}}
                    {{--</div>--}}
                {{--</div>--}}
            @endif
            @if($general->id == 2)

                <div class="row">
                    <div class="col-md-6">
                        <p class="m-0">Seleccionar Categoria</p>
                        <select class="browser-default custom-select" name="familia_id">
                            <option value="0">Ninguno</option>
                            @forelse($family as $item)
                                <option value="{{ $item->id }}" {{$item->id == $subcategoria->family_id ? 'selected' : ''}}>{{ $item->text{'title_es'} }}</option>
                            @empty
                                <option value="">No hay registro</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="order" name="order" placeholder="Orden" value="{{ $subcategoria->order }}" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" value="{{ $subcategoria->text{'title_es'} }}" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" value="{{ $subcategoria->text{'title_en'} }}" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <gallery-component :galeria="{{ json_encode($subcategoria->image) }}"></gallery-component>
                    </div>
                </div>
            @endif
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

