@extends('page.layouts.app')

@section('content')

<div class="container" style="margin-top: 8rem">
    <h2 class="text-uppercase">Noticias</h2>
    <hr align="left" class="" style="border-top: 2px solid #FEB80B; width: 150px">
    <div class="row my-5">
        <div class="col-md-8">
            <!--Carousel Wrapper-->
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                @forelse($news->image as $k=>$item)
                        <li data-target="#carousel-example-1z" data-slide-to="{{ $k }}" ></li>
                @empty
                @endforelse
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    @forelse($news->image as $k=>$item)
                    <div class="carousel-item {{ $k==0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{!! asset($item{'image'}) !!}"
                             alt="First slide">
                    </div>
                    @empty

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
            <h5>
                <span class="p-2 my-3 text-uppercase font-weight-bold badge baires-fondo">{!! $news->Category->text{'title_'.App::getLocale()} !!}</span>
            </h5>
            <h3 class="mb-4 font-weight-bold">{!! $news->text{'title_'.App::getLocale()} !!}</h3>
            <div style="/*font-family: Montserrat Light;*/">
                {!! $news->text{'text_'.App::getLocale()} !!}
            </div>
        </div>
        <div class="col-md-4 ">
            <div class="p-5" style="background-color: #F9F9F9">
                <h5 class="text-uppercase">Categorías</h5>
                <hr align="left" class="" style="background-color: #595959; width: 70px">
                @forelse($categorias as $c)
                    <p class="m-0"><a href="{{ route('show_noticias',$c->id) }}" class="" style="text-decoration: none; color: unset;"> {!! $c->text{'title_es'} !!}</a></p>
                @empty
                    <p>No hay registros</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
@endsection
