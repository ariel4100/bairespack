@extends('page.layouts.app')

@section('content')
    <div class="container my-5">
        @include('page.partials.breadcrumb')
        <div class="row">
            @include('page.partials.botonera')
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                @if($producto->image)
                                    <li data-target="#carousel-example-1z" style="background-color: darkgray;" data-slide-to="0" class="active"></li>
                                @endif
                                @forelse($galery as $k=>$item)
                                    <li data-target="#carousel-example-1z" style="background-color: darkgray;" data-slide-to="{{ $k+1 }}"  ></li>
                                @empty
                                @endforelse
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                @if($producto->image)
                                    <div class="carousel-item  active">
                                        <img class="d-block w-100" style="height: 297px" src="{!! asset($producto->image) !!}"
                                             alt="First slide">
                                    </div>
                                @endif
                                @forelse($galery as $k=>$item)
                                    <div class="carousel-item">
                                        <img class="d-block w-100" style="height: 297px" src="{!! asset($item->image) !!}"
                                             alt="First slide">
                                    </div>
                                @empty
                                    <img src="{!! asset($producto->image) !!}" alt="" class="img-fluid">
                                @endforelse
                            </div>
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--/.Carousel Wrapper-->
                    </div>
                    <div class="col-md-6">
                        <h4 class="distren-color font-weight-bold">{!! $producto->title !!}</h4>
                        {!! $producto->text !!}
                        <a href="" class="btn distren-fondo shadow-none m-0 px-4 py-2 p-0">Consultar</a>
                    </div>
                </div>
                @if(count($producto->closure) > 0)
                <h4 class="distren-color mt-5">Cierres Posibles</h4>
                <div class="row">
                    {{--@dd($productos->closure)--}}
                    @forelse($producto->closure as $cierre)
                        <div class="col-md-2 mb-4">
                            <img src="{{ asset($cierre->image) }}" alt="" class="img-fluid" style="height: 100px;">
                        </div>
                    @empty

                    @endforelse
                </div>
                @endif
                @if(count($producto->termination) > 0)
                <h4 class="distren-color mt-5">Terminaciones</h4>
                <div class="row">
                    {{--@dd($productos->closure)--}}
                    @forelse($producto->termination as $terminacion)
                        <div class="col-md-2 mb-4">
                            <img src="{{ asset($terminacion->image) }}" alt="" class="img-fluid" style="height: 100px;">
                        </div>
                    @empty

                    @endforelse
                </div>
                @endif
                <product-component :terminaciones="{{ json_encode($producto->termination) }}" :producto="{{ $producto->capacity }}" :cierres="{{ $producto->closure }}" :nombreproducto="{{ json_encode($producto->title) }}" :nombrecategoria="{{ json_encode($producto->category->title) }}" :precio="{{ json_encode($precio) }}"></product-component>

            </div>
        </div>
    </div>

@endsection
