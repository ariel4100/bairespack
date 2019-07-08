@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')
    <div class="bd-example">

    </div>
    <div class="container">
        <h4 class="text-center my-5">{{ __('Types of packaging') }}</h4>
        <div class="row mt-5">
            @foreach($familia as $k=>$item)
                <div class="col-md-3 mb-5">
                    <!-- Card -->

                    <div class="card shadow-none">
                        <a href="{{ route('productos.all',['familia' => $item->id,'subfamilia' => 0]) }}" class="text-decoration-none" style="color: unset;">
                            <div class="card-header border-top border-bottom-0 bg-white">
                                <p class="text-center m-0">{!! $item->general->text{'title_'.App::getLocale()} !!}</p>
                                <h4 class="text-center">
                                    {!! $item->text{'title_es'} !!}
                                </h4>
                            </div>

                            <!-- Card content -->
                            <div class="card-body d-flex align-items-center" style="height: 300px">
                                <!-- Card image -->
                                @gallery
                                @slot('gallery',$item->plans)
                                @slot('id',$k)
                                @endgallery

                            </div>
                        </a>
                        @gallery
                        @slot('gallery',$item->image)
                        @slot('id',$item->id)
                        @endgallery
                        <div class="card-footer border-0 bg-white">
                            <p class="m-0 text-center">{{ __('Type') }}</p>
                            <h4 class="text-center">
                                {!! $item->text{'type_es'} !!}
                            </h4>
                        </div>
                    </div>

                    <!-- Card -->
                </div>
            @endforeach
        </div>
    </div>
    {{--@dd($contenido)--}}
    <div class="container-flui d-flex justify-content-start align-items-center" style="background-image: url({{ asset($contenido->text{'image'}) }}); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 350px">
        <div class="container">
            {!! $contenido->text{'text_'.App::getLocale()} !!}
            <a href="{{ route('nosotros') }}" class="btn baires-fondo rounded-pill m-0 px-4 my-3">{{ __('About us') }}</a>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center my-5">
            {!! $contenido->text{'title_'.App::getLocale()} !!}
        </h4>
    </div>
    <div class="container px-5 my-4">
        <div class="row">

            @foreach($postventa->image as $item)
                <div class="col-md-3 text-center">
                    <img src="{{ asset($item{'image'}) }}" alt="" class="img-fluid">
                    <h5 class=" p-4">{!! $item{'title_'.App::getLocale()} !!}</h5>
                </div>
            @endforeach
        </div>
    </div>

@endsection
