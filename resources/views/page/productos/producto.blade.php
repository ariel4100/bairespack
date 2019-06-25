@extends('page.layouts.app')
@push('style')
    <style>
        #myClassicTab .nav-link{
            color: #000 !important;
        }
    </style>
@endpush
@section('content')
    <div class="container" style="margin-top: 8rem">
        {{--@include('page.partials.breadcrumb')--}}
        @if($general->id == 1)
            <div class="row">
                <div class="col-md-6 border text-center">

                    @gallery
                    @slot('gallery',$producto->image)
                    @slot('id',$producto->id)
                    @endgallery

                </div>
                <div class="col-md-6">
                    <h4 class=" ">{!! $producto->text{'title_'.App::getLocale()} ?? '' !!}</h4>
                    <h4 class="font-weight-bold mb-4 pb-2" style="border-bottom: 2px solid #FFB900">{!! $producto->text{'subtitle_'.App::getLocale()} ?? '' !!}</h4>
                    {!! $producto->text{'text_'.App::getLocale()} ?? '' !!}
                    <a href="{{ route('contacto') }}" class="btn baires-fondo rounded-pill m-0 px-4 mb-3" style="width: 35%">Consultar</a>
                    <br>
                    @if(isset($producto->text{'file_'.App::getLocale()}))
                    <a href="" class="btn baires-fondo rounded-pill m-0 px-4 mb-3" style="width: 35%">FICHA TÉCNICA</a>
                    @endif
                </div>
            </div>
            {{--CARACTERISTICAS Y TABLAS DE VARIANTES--}}
            <div class="row my-5">
                <div class="col-md-6">
                    <h4 class="p-3" style="background-color: #F9F9F9">{!! $producto->text{'titlec_'.App::getLocale()} ?? '' !!}</h4>
                    <p class="">{!! $producto->text{'caracteristica_'.App::getLocale()} ?? '' !!}</p>
                </div>
                <div class="col-md-6">
                    <h4 class="p-3" style="background-color: #F9F9F9">{!! $producto->text{'titlet_'.App::getLocale()} ?? '' !!}</h4>
                    {!! $producto->text{'tabla_es'} ?? '' !!}
                </div>
            </div>
            @if(isset($producto->text{'video'}))
            <div class="container-fluid " style="background-color: #F9F9F9;">
                <div class="row py-5 align-items-center">
                    <div class="col-md-6">
                        <h3 class="baires-color">Para más información,
                            mirá el video a continuación</h3>
                    </div>
                    <div class="col-md-6">
                        <iframe width="100%" height="250" src="https://www.youtube.com/embed/{!! $producto->text{'video'} !!}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            @endif
            {{--CONFIGURACIONES--}}
            {{--@dd($producto->configuraciones)--}}
            @if(isset($producto->text{'title_es'}))
                <h4 class="py-3 text-center my-5" style="background-color: #F9F9F9">Configuraciones</h4>
                <div class="row my-5">
                    <div class="col-md-12">
                        <div class="classic-tabs">
                                <ul class="nav mb-5" id="myClassicTab" role="tablist">
                                    @forelse($producto->configuraciones as $k=>$item)
                                        {{--@dd($item->text{'tipo_es'})--}}
                                        <li class="nav-item">
                                            <a class="nav-link waves-light {{ $k==0 ? 'active': '' }} show" id="profile-tab-classic" data-toggle="tab" href="#config-{{$k}}"
                                               role="tab" aria-controls="profile-classic" aria-selected="true">{!! $item->text{'tipo_'.App::getLocale()} !!}</a>
                                        </li>
                                    @empty
                                        <li class="nav-item">
                                            <a class="nav-link  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#config"
                                               role="tab" aria-controls="profile-classic" aria-selected="true">Todos</a>
                                        </li>
                                    @endforelse
                                </ul>
                                <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
                                    @foreach($producto->configuraciones as $k=>$item)
                                        <div class="tab-pane fade {{ $k==0 ? 'active': '' }} show" id="config-{{$k}}" role="tabpanel" aria-labelledby="profile-tab-classic">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    {{--@dd($item)--}}
                                                    @gallery
                                                    @slot('gallery',$item->image)
                                                    @slot('id',$item->id)
                                                    @endgallery
                                                </div>
                                                <div class="col-md-8">
                                                    <h3 class="">{!! $item->text{'title_'.App::getLocale()} ?? '' !!}</h3>
                                                    <h4 class="">{!! $item->text{'tipo_'.App::getLocale()} ?? '' !!}</h4>
                                                    <p class="">{!! $item->text{'text_'.App::getLocale()} ?? '' !!}</p>
                                                    <a href="#modal_{{$k}}" data-toggle="modal"  class="btn baires-fondo rounded-pill m-0 px-5 my-3" >Ingresar</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal_{{$k}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0">

                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                @gallery
                                                                @slot('gallery',$item->image)
                                                                @slot('id',$item->order)
                                                                @endgallery
                                                            </div>
                                                            <div class="col-md-6">
                                                                <h3 class="">{!! $item->text{'title_'.App::getLocale()} ?? '' !!}</h3>
                                                                <h4 class="pb-2" style="border-bottom: 2px solid #FFB900">{!! $item->text{'tipo_'.App::getLocale()} ?? '' !!}</h4>
                                                                <p class="">{!! $item->text{'text_'.App::getLocale()} ?? '' !!}</p>
                                                                <a href="{{ route('contacto') }}" class="btn baires-fondo rounded-pill m-0  mb-3" style="width: 35%">Consultar</a>
                                                            </div>
                                                            @forelse($item->product as $dosificadora)
                                                                <div class="col-md-4">
                                                                    <a href="{{ route('producto',['producto' => $dosificadora->id]) }}" class=" " style="text-decoration: none; color: unset;">
                                                                        <div class="card">
                                                                            <div class="card-body text-center p-0">
                                                                                <img class="img-fluid" src="{{ asset($dosificadora->image[0]['image'] ?? '') }}" alt="Card image cap">
                                                                            </div>
                                                                            <div class="card-footer bg-white">
                                                                                <p class="m-0">{!! $dosificadora->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                                                                <h4 class="">
                                                                                    {!! $dosificadora->text{'subtitle_'.App::getLocale()} ?? '' !!}
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            @empty

                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                    </div>
                </div>
            @endif

        @endif



        {{--DOSIFICADORAS--}}
        @if($general->id == 2)
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

        @endif
        {{--ACCESORIOS--}}
        @if($general->id == 3)
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

        @endif

    </div>

@endsection
