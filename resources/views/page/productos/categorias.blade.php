@extends('page.layouts.app')

@section('content')
    <div class="container " style="margin-top: 8rem">

        @if($general->id == 1)
            <div class="row">
                <div class="col-md-12">
                    <h2 class="baires-color">Descubrí la máquina <br>
                        detrás de cada tipo de envase</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($family as $item)
                    <div class="col-md-3 mb-5">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-header border-0 bg-white">
                                <h4 class="text-center my-3">
                                    {!! $item->general->text{'title_es'} !!}
                                    {!! $item->text{'title_es'} !!}
                                </h4>
                            </div>

                            <!-- Card content -->
                            <div class="card-body">
                                <!-- Card image -->
                                <img class="card-img-top mb-4" src="{{ asset($item->text{'image'}) }}" alt="Card image cap">

                                <!--Carousel Wrapper-->
                                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                                    <!--Indicators-->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                                    </ol>
                                    <!--/.Indicators-->
                                    <!--Slides-->
                                    <div class="carousel-inner" role="listbox">
                                        <!--First slide-->
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
                                                 alt="First slide">
                                        </div>
                                        <!--/First slide-->
                                        <!--Second slide-->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
                                                 alt="Second slide">
                                        </div>
                                        <!--/Second slide-->
                                        <!--Third slide-->
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                                                 alt="Third slide">
                                        </div>
                                        <!--/Third slide-->
                                    </div>
                                    <!--/.Slides-->
                                    <!--Controls-->
                                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <!--/.Controls-->
                                </div>
                                <!--/.Carousel Wrapper-->
                            </div>
                            <div class="card-footer border-0 bg-white">
                                <p class="m-0 text-center">Tipo</p>
                                <h4 class="text-center">
                                    {!! $item->text{'type_es'} !!}
                                </h4>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                @endforeach
            </div>
        @endif

        @if($general->id == 2)
        <div class="row">
            <div class="col-md-12">
                <h2 class="baires-color">Seleccioná una dosificadora</h2>
            </div>
        </div>
        <div class="row mt-5">
            @foreach($family as $item)
                <div class="col-md-4 mb-5">
                    <a href="{{ route('subfamilia',['familia' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="img-fluid" src="{{ asset($item->text{'image'}) }}" alt="Card image cap">
                            </div>
                            <div class="card-footer bg-white">
                                <p class="m-0">{!! $item->general->text{'title_es'} !!}</p>
                                <h4 class="">
                                    {!! $item->text{'title_es'} !!}
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

        @if($general->id == 3)
            <div class="row">
                <div class="col-md-12">
                    <h2 class="baires-color">Seleccioná un Accesorio</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($family as $item)
                    <div class="col-md-4 mb-5">
                        <a href="" class=" " style="text-decoration: none; color: unset;">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="{{ asset($item->text{'image'}) }}" alt="Card image cap">
                                </div>
                                <div class="card-footer bg-white">
                                    <p class="m-0">{!! $item->general->text{'title_es'} !!}</p>
                                    <h4 class="">
                                        {!! $item->text{'title_es'} !!}
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection
