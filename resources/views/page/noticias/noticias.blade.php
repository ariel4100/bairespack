@extends('page.layouts.app')
@push('style')
    <style>
        .card{
            border-top: unset;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
            /*color: #000000 !important;*/
        }
        .card:hover{
            border-top: unset;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15) !important;
            /*color: #000000 !important;*/
        }
    </style>

@endpush
@section('content')
<div class="container" style="margin-top: 8rem">
    <h2 class="text-uppercase">{{ __('News') }}</h2>
    <hr align="left" class="" style="border-top: 2px solid #FEB80B; width: 150px">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
            @forelse($noticias as $n)
                    <div class="col-md-6 mb-5 wow fadeIn">
                        <a href="{{ route('noticias_blog',$n) }}" class="" style="text-decoration: none; color: unset;">
                            <div class="card shadow-none">
                                <img src="{{ asset($n->image[0]{'image'}) }}" alt="" class="img-fluid">
                                <div class="card-footer" style="background-color: unset; height: 170px">
                                    <span class="baires-fondo badge text-uppercase p-2 my-2">{!! $n->Category->text{'title_'.App::getLocale()} !!}</span>
                                    <h5 class="tpn-blue font-weight-bold">{!! $n->text{'title_'.App::getLocale()} !!}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
            @empty
                    <p>{{ __('No records') }}</p>
            @endforelse
            </div>
        </div>
        <div class="col-md-4 wow fadeIn">
            <div class="p-5" style="background-color: #F9F9F9">
                <h5 class="text-uppercase">{{ __('CATEGORIES') }}</h5>
                <hr align="left" class="" style="background-color: #595959; width: 70px">
                @forelse($categorias as $c)
                    <p class="m-0"><a href="{{ route('show_noticias',$c->id) }}" class="" style="text-decoration: none; color: unset;"> {!! $c->text{'title_'.App::getLocale()} !!}</a></p>
                @empty
                    <p>{{ __('No records') }}</p>
                @endforelse
            </div>
        </div>
    </div>

</div>
@endsection
