@extends('adm.layouts.app')

@section('content')
    <div class="container p-4">
        <a class="text-decoration-none " href="{{ route('config.index',$config->product_id) }}"><< Volver</a>
        <form class="row" method="POST" action="{{ route('config.update',$config->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="order" name="product_id" value="{!! $config->product_id !!}" class="form-control">
            <div class="row mb-2">
                <div class="col-md-6 md-form">
                    <input type="text" name="tipo_es" value="{!! $config->text{'tipo_es'} !!}" placeholder="Tipo - español" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="tipo_en" value="{!! $config->text{'tipo_en'} !!}" placeholder="Tipo - ingles" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="title_es" value="{!! $config->text{'title_es'} !!}" placeholder="Titulo - español" class="form-control">
                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="title_en" value="{!! $config->text{'title_en'} !!}" placeholder="Titulo - ingles" class="form-control">
                </div>
                <div class="md-form col-md-6">
                    <h6>Texto - español</h6>
                    <textarea id="text_es" class="md-textarea form-control" name="text_es" rows="3">{!! $config->text{'text_es'} !!}</textarea>
                </div>
                <div class="md-form col-md-6">
                    <h6>Texto - ingles</h6>
                    <textarea id="text_en" class="md-textarea form-control" name="text_en" rows="3">{!! $config->text{'text_en'} !!}</textarea>
                </div>
                <div class="col-md-6">
                        {{--@dd($dosificadoras)--}}
                    @if($config->text{'tipo_es'} == 'Sólidos')
                    <multiple-component :related="{{ json_encode($dosificadoras) }}" :selectrelated="{{ json_encode($config->subfamily) }}"></multiple-component>
                    @else
                        <multiple-component :related="{{ json_encode($dosificadoras) }}" :selectrelated="{{ json_encode($config->product) }}"></multiple-component>
                    @endif

                </div>
                <div class="col-md-6 md-form">
                    <input type="text" name="order" value="{!! $config->order !!}" placeholder="Orden" class="form-control">
                </div>
            </div>
            {{--@dd($config)--}}
            <gallery-component :galeria="{{ json_encode($config->image) }}" ></gallery-component>
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