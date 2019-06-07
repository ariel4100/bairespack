@extends('page.layouts.app')
@section('style')

@stop
@section('content')
    @include('page.partials.carousel')
    @if($empresa)
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase distren-color distren-bold">{!! $empresa->title !!}</h2>
                {!! $empresa->text !!}
            </div>
        </div>
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-uppercase distren-color distren-bold">{!! $empresa->valores !!}</h2>
                {!! $empresa->text_valores !!}
            </div>
            <div class="col-md-6">
                <div class="">
                    <h2 class="text-uppercase distren-color distren-bold">{!! $empresa->mision !!}</h2>
                    {!! $empresa->text_mision !!}
                    <h2 class="text-uppercase distren-color distren-bold pt-3">{!! $empresa->vision !!}</h2>
                    {!! $empresa->text_vision !!}
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection
