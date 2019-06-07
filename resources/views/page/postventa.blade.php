@extends('page.layouts.app')

@section('content')
    <div class="container my-5">
        <h3 class="distren-color text-uppercase font-weight-bold">Ofertas</h3>
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="row">
                    @forelse($ofertas as $item)
                        <div class="col-md-3">
                            <a href="{{ route('producto',$item->id) }}" class="position-relative" style="color: #9FA3A5;">
                                <div class="view overlay">
                                    <div class="img position-relative">
                                        <img class="position-absolute img-fluid " style="z-index: 1; left: -8px; top: -8px;" src="http://osolelaravel.com/partscam/images/general/ofertas.fw.png" alt="">
                                    </div>
                                    <img src="{{ asset($item->image) }}" class="img-fluid " alt="smaple image"  >
                                    <div class="mask flex-center rgba-black-strong">
                                        <span class="text-white">+</span>
                                    </div>
                                </div>
                                <h4 class="text-center py-1 m-0">{!! $item->title !!} </h4>
                                <h5 class="text-center">Desde <del>${{ $item->price->min('price') }} </del> <span class="distren-color"> ${{ $item->price->min('offer_price') }}</span></h5>
                            </a>
                        </div>
                    @empty
                        <h4>No hay registros</h4>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
@endsection
