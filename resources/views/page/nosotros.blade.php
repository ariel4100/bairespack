@extends('page.layouts.app')
@section('style')

@stop
@section('content')
    @include('page.partials.carousel')
    @if($contenido)
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="">{!! $contenido->text{'title_es'} !!}</h2>
                {!! $contenido->text{'text_es'} !!}
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6" style="background-color: #f2f2f2">
                <h2 class="baires-color">{!! $contenido->text{'mision_es'} !!}</h2>
                {!! $contenido->text{'misiontext_es'} !!}
            </div>
            <div class="col-md-6 " style="background-color: #f2f2f2">
                <div class="">
                    <h2 class="baires-color pt-3">{!! $contenido->text{'valores_es'} !!}</h2>
                    {!! $contenido->text{'valorestext_es'} !!}
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
