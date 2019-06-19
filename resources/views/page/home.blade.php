@extends('page.layouts.app')

@section('content')
    @include('page.partials.carousel')
    <div class="bd-example">

    </div>
    <div class="container">
        <h4 class="text-center my-5">Tipos de envases</h4>
        <div class="row">
            <div class="col-md-3">
                <!-- Card -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            Envasadoras
                            Verticales
                        </h4>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">
                        <!-- Card image -->
                        <img class="card-img-top mb-4" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

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
                    <div class="card-footer">
                        <h4 class="text-center">
                            Tipo
                            Bolsa
                        </h4>
                    </div>
                </div>
                <!-- Card -->
            </div>
        </div>
    </div>
    {{--@dd($contenido)--}}
    <div class="container-flui d-flex justify-content-start align-items-center" style="background-image: url({{ asset($contenido->text{'image'}) }}); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 350px">
        <div class="container">
            {!! $contenido->text{'text_es'} !!}
            <a href="" class="btn baires-fondo rounded-pill m-0 px-4 my-3">Nosotros</a>
        </div>
    </div>

    <div class="container">
        <h4 class="text-center my-5">
            {!! $contenido->text{'title_es'} !!}
        </h4>
        <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg">
                <p>
                    Asistencia
                    técnica
                </p>
            </div>
        </div>
    </div>

@endsection
