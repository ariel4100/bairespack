@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('subfamilia.index',['general' => $general]) }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('subfamilia.store') }}" enctype="multipart/form-data">
            @csrf
            {{--ENVASADORAS--}}
            <input type="text" class="d-none" name="general_id" value="{{ $general->id }}">
            @if($general->id == 1)
                <div class="row">
                    <div class="col-md-6">
                        <p class="m-0">Seleccionar Categoria</p>
                        <select class="browser-default custom-select" name="familia_id">
                            <option value="0">Ninguno</option>
                            @forelse($family as $item)
                                <option value="{{ $item->id }}">{{ $item->text{'title_es'} }}</option>
                            @empty
                                <option value="">No hay registro</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="md-form   col-md-6">
                        <input type="text" id="order" name="order" placeholder="Orden" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <gallery-component  ></gallery-component>
                    </div>
                </div>
            @endif
            {{--DOSIFICADORAS--}}
            @if($general->id == 2)
                <div class="row">
                    <div class="col-md-6">
                        <p class="m-0">Seleccionar Categoria</p>
                        <select class="browser-default custom-select" name="familia_id">
                            <option value="0">Ninguno</option>
                            @forelse($family as $item)
                            <option value="{{ $item->id }}">{{ $item->text{'title_es'} }}</option>
                            @empty
                                <option value="">No hay registro</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="md-form   col-md-6">
                        <input type="text" id="order" name="order" placeholder="Orden" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                    </div>
                    <div class="md-form col-md-6">
                        <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <gallery-component  ></gallery-component>
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
        CKEDITOR.replace('Texto');

        CKEDITOR.config.width = '100%';


    </script>
@stop
