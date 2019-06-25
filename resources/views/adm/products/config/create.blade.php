@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('config.index',$producto) }}"><< Volver</a>
        <form class="row my-5" method="POST" action="{{ route('config.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="order" name="product_id" value="{!! $producto !!}" class="form-control">

            <div class="row mb-2"  >
                <div class="col-md-6 md-form">
                    <input type="text" name="tipo_es" placeholder="Tipo - español" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="tipo_en" placeholder="Tipo - ingles" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="title_es" placeholder="Titulo - español" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="title_en" placeholder="Titulo - ingles" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <h6>Texto - español</h6>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3"></textarea>
                </div>
                <div class="md-form col-md-6">
                    <h6>Texto - ingles</h6>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    {{--@dd($dosificadoras)--}}
                    <multiple-component :related="{{ json_encode($dosificadoras) }}"></multiple-component>
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="order"   placeholder="Orden" class="form-control">
                </div>
            </div>
            <gallery-component></gallery-component>
            <div class="col-md-12 my-4 text-right">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>
    </div>
@endsection
@push('script')
    <script>
        CKEDITOR.replace('text_es');
        CKEDITOR.replace('text_en');

        CKEDITOR.config.width = '100%';
    </script>
@endpush
