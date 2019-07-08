@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('familia.index',['general' => $general]) }}"><< Volver</a>
        <form class="my-5" method="POST" action="{{ route('familia.store') }}" enctype="multipart/form-data">
            @csrf
            {{--@dd($general)--}}
            <input type="text" class="d-none" name="general_id" value="{{ $general->id }}">
            @if($general->id == 1)
                <div class="row">
                    <div class="col-md-12">
                        <image-component  ></image-component>
                    </div>
                </div>
            <div class="row">
                <div class="md-form col-md-12">
                    <input type="text" id="order" name="order" placeholder="Orden" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="md-form col-md-6">
                    <input type="text" id="title_es" name="title_es" placeholder="Titulo - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="title_en" name="title_en" placeholder="Titulo - ingles" class="form-control">
                </div>

                <div class="md-form col-md-6">
                    <input type="text" id="type_es" name="type_es" placeholder="Tipo - español" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <input type="text" id="type_en" name="type_en" placeholder="Tipo - ingles" class="form-control">
                </div>
                <div class="col-md-6 my-4">
                    <!-- Default unchecked -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="featured" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Destacado?</label>
                    </div>
                </div>
            </div>
            <gallery-component></gallery-component>
            @endif

            @if($general->id == 2)
                <div class="row">
                    <div class="md-form col-md-12">
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
                        <image-component  ></image-component>
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
