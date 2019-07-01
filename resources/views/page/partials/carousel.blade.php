<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade carrousel-sm" data-ride="carousel" >
    <!--Indicators-->
    <ol class="carousel-indicators">
        @foreach($slider as $key=>$s)
            <li data-target="#carousel-example-2" data-slide-to="{{$key}}" class="{{ $key == 0 ? 'active' : null }}"></li>
        @endforeach
    </ol>
    <!--/.Indicators-->
    <!--Slides-->

    <div class="carousel-inner" role="listbox">
        @foreach($slider as $key=>$s)
            <div class="carousel-item  {{ $key == 0 ? 'active' : null }}">
                <div class="view">
                    <img class="d-block w-100" src="{{ asset($s->image) }}"
                         alt="First slide">
                    <div class="mask" style=""></div>
                </div>
                <div class="carousel-caption d- none d-md-block wow fadeInLeft" style="right: 0px; left: 0px; text-align: left; top: 30%">
                    <div class="container" >
                         {!! $s->text{'text_'.App::getLocale()} !!}
                        {{--<p>{!! $s->text{'text_es'} !!}</p>--}}
                        @if($s->section == 'home')
                            <a href="{{ route('nosotros') }}" class="btn baires-fondo rounded-pill m-0 px-4 my-3">{{ __('Learn more') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->