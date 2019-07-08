@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('familia.index',['general' => $general]) }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('familia.update',$categoria->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="text" class="d-none" name="general_id" value="{{ $general->id }}">
            {{--ENVASADORAS--}}
            @if($general->id == 1)
                <div class="row">
                    <div class="col-md-12">
                        <image-component :galeria="{{ json_encode($categoria->plans) }}"></image-component>
                    </div>
                </div>
                <div class="row">
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" value="{{ $categoria->text{'title_es'} ?? '' }}" placeholder="Titulo - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" value="{{ $categoria->text{'title_en'} ?? '' }}" placeholder="Titulo - ingles" class="form-control">
                </div>

                <div class="md-form col-md-6">
                    <input type="text" id="type_es" name="type_es" value="{{ $categoria->text{'type_es'} ?? '' }}" placeholder="Tipo - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="type_en" name="type_en" value="{{ $categoria->text{'type_en'} ?? '' }}" placeholder="Tipo - ingles" class="form-control">
                </div>
                <div class="col-md-6 my-4">
                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="featured" {{ isset($categoria->text{'featured'}) ? 'checked' : '' }} id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Destacado?</label>
                    </div>
                </div>
            </div>
            {{--@dd($categoria->image)--}}
            <gallery-component :galeria="{{ json_encode($categoria->image) }}"></gallery-component>
            {{--<div id="form" class="">--}}
                {{--<button @click.prevent="addImage()" class="btn btn-success p-2"><i class="fas fa-plus distren-color"></i></button>--}}
                {{--<div class="row">--}}
                    {{--@for ($i=1; $i <= 3; $i++)--}}
                        {{--<div class="col-md-4"  >--}}
                            {{--<div class="custom-file">--}}
                                {{--<input type="file" class="custom-file-input" name="config[{{$i}}][img]" value="{{ $categoria->image[$i]['img'] ?? '' }}" id="customFileLang" lang="es">--}}
                                {{--<label class="custom-file-label" for="customFileLang" data-browse="Buscar">Imagen</label>--}}
                            {{--</div>--}}
                            {{--<div class="md-form">--}}
                                {{--<input type="text"  name="config[{{$i}}][order]" value="{{ $categoria->image[$i]['order'] ?? '' }}" placeholder="Orden" class="form-control">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--@endfor--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12 my-5 text-center">--}}
                    {{--<img src="{{ asset(isset($categoria->text{'image'}) ? $categoria->text{'image'} : null ) }}" alt="" class="img-fluid" style="height: 200px">--}}
                {{--</div>--}}
            {{--</div>--}}
            @endif
            {{--DOSIFICADORAS--}}
            @if($general->id == 2)

                <div class="row">
                    {{--<div class="col-md-6">--}}
                        {{--<select class="browser-default custom-select" name="familia_id">--}}
                            {{--<option selected disabled>Seleccione Categoria</option>--}}
                            {{--<option value="0">Ninguno</option>--}}
                            {{--@forelse($family as $item)--}}
                                {{--<option value="{{ $item->id }}" {{ $item->id == $categoria->family_id ? 'selected' : null}}>{{ $item->text{'title_es'} }}</option>--}}
                            {{--@empty--}}
                                {{--<option value="">No hay registro</option>--}}
                            {{--@endforelse--}}
                        {{--</select>--}}
                    {{--</div>--}}

                    <div class="md-form col-md-6">
                        <input type="text" id="order" name="order" placeholder="Orden" value="{{ $categoria->order }}" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" value="{{ $categoria->text{'title_es'} }}" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" value="{{ $categoria->text{'title_en'} }}" placeholder="Titulo - ingles" class="form-control">
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
                        {{--<img src="{{ asset($categoria->text{'image'} ?? '') }}" alt="" class="img-fluid">--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="row">
                    <div class="col-md-12">
                        <image-component :galeria="{{ json_encode($categoria->plans) }}"></image-component>
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

