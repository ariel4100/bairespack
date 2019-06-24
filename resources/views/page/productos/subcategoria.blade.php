@extends('page.layouts.app')

@section('content')
    <div class="container" style="margin-top: 8rem">
        {{--@include('page.partials.breadcrumb')--}}
        @if($general->id == 2)
            <div class="row my-5">
                @foreach($subfamily as $item)
                    <div class="col-md-4 mb-5">
                        <a href="{{ route('productos.all',['subfamilia' => $item->id, 'familia' => $item->family_id]) }}" class=" " style="text-decoration: none; color: unset;">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="{{ asset($item->text{'image'} ?? '') }}" alt="Card image cap">
                                </div>
                                <div class="card-footer bg-white">
                                    <p class="m-0">{!! $item->family->text{'title_es'} ?? '' !!}</p>
                                    <h4 class="">
                                        {!! $item->text{'title_es'} ?? '' !!}
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
