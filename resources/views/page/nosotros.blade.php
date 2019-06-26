@extends('page.layouts.app')
@section('style')

@stop
@section('content')
    @include('page.partials.carousel')
    @if($contenido)
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="py-2" >{!! $contenido->text{'title_'.App::getLocale()} !!}</h2>
                <hr align="left" class="w-25" style="border-top: 2px solid #FEB80B;">
                <p class="">
                    {!! $contenido->text{'text_'.App::getLocale()} !!}
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset($contenido->text{'image'}) }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <div class="p-4" style="background-color: #f2f2f2">
                    <h2 class="baires-color">{!! $contenido->text{'mision_'.App::getLocale()} !!}</h2>
                    {!! $contenido->text{'misiontext_'.App::getLocale()} !!}
                </div>
            </div>
            <div class="col-md-6 " >
                <div class="p-4" style="background-color: #f2f2f2">
                    <h2 class="baires-color">{!! $contenido->text{'valores_'.App::getLocale()} !!}</h2>
                    {!! $contenido->text{'valorestext_'.App::getLocale()} !!}
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
