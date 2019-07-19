@extends('page.layouts.app')

@section('content')
    <div class="container " style="margin-top: 8rem">
        {{--ENVASADORAS--}}
        @if($general->id == 1)
            <div class="row">
                <div class="col-md-12">
                    <h2 class="baires-color">{{ __('I discovered the machine') }}<br>
                        {{ __('behind each type of container') }}</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($family as $k=>$item)
                    <div class="col-md-3 mb-5">
                        <!-- Card -->

                            <div class="card shadow-none">
                                <a href="{{ route('subfamilia',['familia' => $item->id]) }}" class="text-decoration-none" style="color: unset;">
                                    <div class="card-header border-top border-bottom-0 bg-white">
                                        <p class="text-center m-0">{!! $item->general->text{'title_'.App::getLocale()} !!}</p>
                                        <h4 class="text-center">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </h4>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body d-flex align-items-center" style="height: 300px; z-index: 111;">
                                        @gallery
                                        @slot('gallery',$item->plans)
                                        @slot('id',$k)
                                        @endgallery
                                        {{--<img class="img-fluid" src="{{ asset($item->text{'image'}) }}" alt="Card image cap" style="">--}}

                                    </div>
                                </a>
                                @gallery
                                @slot('gallery',$item->image)
                                @slot('id',$item->id)
                                @endgallery
                                <div class="card-footer border-0 bg-white">
                                    <p class="m-0 text-center">{{ __('Type') }}</p>
                                    <h4 class="text-center">
                                        {!! $item->text{'type_'.App::getLocale()} !!}
                                    </h4>
                                </div>
                            </div>

                        <!-- Card -->
                    </div>
                @endforeach
            </div>
        @endif
        {{--DOSIFICADORAS--}}
        @if($general->id == 2)
        <div class="row">
            <div class="col-md-12">
                <h2 class="baires-color">{{ __('Select a dispenser') }}</h2>
            </div>
        </div>

        <div class="row mt-5">
            @foreach($family as $k=>$item)
                <div class="col-md-4 mb-5">
                    <a href="{{ route('subfamilia',['familia' => $item->id]) }}" class="text-decoration-none" style="color: unset;">
                        {{--@card--}}
                        {{--@slot('item',$item)--}}
                        {{--@slot('height','200px')--}}
                        {{--@slot('footerheight','100px')--}}
                        {{--@endcard--}}
                        {{--@gallery--}}
                        {{--@slot('gallery',$item->plans)--}}
                        {{--@slot('id',$k)--}}
                        {{--@endgallery--}}
                        <div class="card shadow-none">
                            @if(isset($item->plans[0]['image']))
                                <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                                    @gallery
                                    @slot('gallery',$item->plans)
                                    @slot('id',$k)
                                    @slot('alto','200px')
                                    @endgallery
                                </div>
                            @endif

                            <div class="card-footer bg-white {{ $style ?? '' }}" style="height: 100px">
                                @if(isset($item->general->text))
                                    <p class="m-0">{!! $item->general->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                @endif

                                @if(isset($item->general))
                                    <h4 class="">
                                        {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                    </h4>
                                @else
                                    <p class="m-0">
                                        {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                    </p>
                                @endif
                            </div>
                        </div>


                    </a>
                </div>
            @endforeach
        </div>
    @endif

        {{--ACCESORIOS--}}
        @if($general->id == 3)
            {{--@dd($family)--}}
            <div class="row">
                <div class="col-md-12">
                    <h2 class="baires-color">{{ __('Select an Accessory') }}</h2>
                </div>
            </div>
            <div class="row mt-5">
                @foreach($productos as $item)

                    <div class="col-md-4 mb-5">
                        <a href="{{ route('producto',['producto' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">

                            <div class="card shadow-none">
                                @if(isset($item->image[0]['image']))
                                    <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                                        {{--@dd($item->general)--}}
                                        @gallery
                                        @slot('gallery',$item->image)
                                        @slot('id',$item->id)
                                        @endgallery
                                    </div>
                                @endif

                                <div class="card-footer bg-white  " style="height: 110px">
                                    @if(isset($item->general->text))
                                        <p class="m-0">{!! $item->general->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                    @endif

                                    @if(isset($item->general))
                                        <h4 class="">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </h4>
                                    @else
                                        <p class="m-0">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </p>
                                    @endif

                                </div>
                            </div>

                            {{--<div class="card">--}}
                                {{--<div class="card-body text-center">--}}
                                    {{--<img class="img-fluid" src="{{ asset($item->image[0]{'image'}) }}" alt="Card image cap">--}}
                                {{--</div>--}}
                                {{--<div class="card-footer bg-white">--}}
                                    {{--<p class="m-0">{!! $item->general->text{'title_es'} !!}</p>--}}
                                    {{--<h4 class="">--}}
                                        {{--{!! $item->text{'title_es'} !!}--}}
                                    {{--</h4>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
@endsection
