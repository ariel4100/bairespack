@extends('page.layouts.app')

@section('content')
    <div class="container" style="margin-top: 8rem">
        @include('page.partials.breadcrumb')
        @if($general->id == 1)
            <div class="row my-5">
                {{--@dd($subfamily)--}}
                @if(count($subfamily))
                    @foreach($subfamily as $item)
                        <div class="col-md-4 mb-5">
                            <a href="{{ route('productos.all',['subfamilia' => $item->id, 'familia' => $item->family_id]) }}" class=" " style="text-decoration: none; color: unset;">

                                <div class="card shadow-none">
                                    <div class="card-body justify-content-center d-flex align-items-center" style="height: 320px;">
                                        @gallery
                                        @slot('gallery',$item->image)
                                        @slot('id',$item->id)
                                        @endgallery
                                    </div>
                                    <div class="card-footer bg-white" >
                                        <p class="m-0">{!! $item->family->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                        <h4 class="">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
                @if(count($productos))
                    {{--@dd($productos)--}}
                    @foreach($productos as $item)

                        <div class="col-md-4 mb-5">
                            <a href="{{ route('producto',['producto' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">
                                {{--@card--}}
                                {{--@slot('item',$item)--}}
                                {{--@slot('style','text-center')--}}
                                {{--@endcard--}}

                                <div class="card shadow-none">
                                    @if(isset($item->image[0]['image']))
                                        <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                                            @gallery
                                            @slot('gallery',$item->image)
                                            @slot('id',$item->id)
                                            @endgallery
                                        </div>
                                    @endif
                                    @if(isset($item->text{'image'}))
                                        <div class="card-body justify-content-center d-flex align-items-center" style="height: {{$height ?? 'auto'}};">
                                            <img class="img-fluid" src="{{ asset($item->text{'image'} ?? '') }}" alt="Card image cap">
                                        </div>
                                    @endif
                                    <div class="card-footer bg-white" style="height: 150px">
                                        @if(isset($item->general->text))
                                            <p class="m-0">{!! $item->general->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                        @endif
                                            <h4 class="">
                                                {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                            </h4>
                                        <p class="">
                                            {!! $item->text{'subtitle_'.App::getLocale()} ?? '' !!}
                                        </p>
                                    </div>
                                </div>

                            </a>
                        </div>
                    @endforeach
                @endif

            </div>
        @endif
        @if($general->id == 2)
            <div class="row my-5">
                {{--@dd($subfamily)--}}
                @if(count($subfamily))
                    @foreach($subfamily as $item)
                        <div class="col-md-4 mb-5">
                            <a href="{{ route('productos.all',['subfamilia' => $item->id, 'familia' => $item->family_id]) }}" class=" " style="text-decoration: none; color: unset;">

                                <div class="card">
                                    <div class="card-body justify-content-center d-flex align-items-center" style="height: 320px;">
                                        @gallery
                                        @slot('gallery',$item->image)
                                        @slot('id',$item->id)
                                        @endgallery
                                    </div>
                                    <div class="card-footer bg-white">
                                        <p class="m-0">{!! $item->family->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                        <h4 class="">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
                @if(count($productos))
                    @foreach($productos as $item)

                        <div class="col-md-4 mb-5">
                            <a href="{{ route('producto',['producto' => $item->id]) }}" class=" " style="text-decoration: none; color: unset;">
                                <div class="card">
                                    <div class="card-body justify-content-center d-flex align-items-center" style="height: 320px;">
                                        @gallery
                                        @slot('gallery',$item->image)
                                        @slot('id',$item->id)
                                        @endgallery
                                    </div>
                                    <div class="card-footer bg-white"  style="height: 100px">
                                        <p class="m-0">{!! $item->family->text{'title_'.App::getLocale()} ?? '' !!}</p>
                                        <h4 class="">
                                            {!! $item->text{'title_'.App::getLocale()} ?? '' !!}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                @endif
            </div>
        @endif
    </div>
@endsection
