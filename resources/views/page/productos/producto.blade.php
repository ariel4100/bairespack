@extends('page.layouts.app')

@section('content')
    <div class="container" style="margin-top: 8rem">
        {{--@include('page.partials.breadcrumb')--}}

                {{--@dd($producto)--}}
        <div class="row">
            <div class="col-md-6 border text-center">
                <div class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @if($producto->image)
                                @foreach($producto->image as $k=>$item)
                                    <li data-target="#carousel-example-1z" style="background-color: darkgray;" data-slide-to="{{ $k }}" class="{{ $k == 0 ? 'active' : null }}" ></li>
                                @endforeach
                            @endif
                        </ol>
                        <div class="carousel-inner">
                            @if($producto->image)
                                @foreach($producto->image as $k=>$item)
                                    <div class="carousel-item {{ $k == 0 ? 'active' : null }}">
                                        <img class="img-fluid" style=" " src="{!! asset($item{'image'}) !!}"
                                             alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <span class="bg-dark text-white px-3">mollis interdum.</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <h4 class=" ">{!! $producto->text{'title_es'} !!}</h4>
                <h4 class="font-weight-bold mb-4 pb-2" style="border-bottom: 2px solid #FFB900">{!! $producto->subfamily->text{'title_es'} !!}</h4>
                {!! $producto->text{'text_es'} !!}
                <a href="" class="btn baires-fondo rounded-pill m-0 px-4 mb-3" style="width: 35%">Consultar</a>
                <br>
                <a href="" class="btn baires-fondo rounded-pill m-0 px-4 mb-3" style="width: 35%">FICHA TÉCNICA</a>
            </div>
            <div class="col-md-6">
                <p class="">{!! $producto->text{'titlep_es'} ?? '' !!}</p>
            </div>
            <div class="col-md-6">
                <p class="">{!! $producto->text{'titlet_es'} ?? '' !!}</p>
                {!! $producto->text{'tabla_es'} ?? '' !!}
            </div>

        </div>

        <div class="row py-5 align-items-center" style="background-color: #F9F9F9;">
            <div class="col-md-6">
                <h4 class="baires-color">Para más información,
                    mirá el video a continuación</h4>
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="300" src="https://www.youtube.com/embed/{!! $producto->text{'video'} !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        {{--Máquinas que utilizan esta dosificadora--}}
        <div class="row my-5" style="background-color: #F9F9F9;">
            <div class="col-md-12">
                <p class="text-center py-2 m-0">Máquinas que utilizan esta dosificadora</p>
            </div>
        </div>






        {{--Accesorios Relacionados--}}
        <div class="row my-5" style="background-color: #F9F9F9;">
            <div class="col-md-12">
                <p class="text-center py-2 m-0">Máquinas que utilizan esta dosificadora</p>
            </div>
        </div>
    </div>

@endsection
