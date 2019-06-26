@extends('page.layouts.app')

@section('content')
    <div class="container " style="margin-top: 8rem">
        {{--ENVASADORAS--}}
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

                            <div class="card shadow-none">
                                <a href="{{ route('productos.all',['familia' => $item->id,'subfamilia' => 0]) }}" class="text-decoration-none" style="color: unset;">
                                    <div class="card-header border-top border-bottom-0 bg-white">
                                        <p class="text-center m-0">{!! $item->general->text{'title_es'} !!}</p>
                                        <h4 class="text-center">
                                            {!! $item->text{'title_es'} !!}
                                        </h4>
                                    </div>

                                    <!-- Card content -->
                                    <div class="card-body d-flex align-items-center" style="height: 300px">
                                        <!-- Card image -->
                                        <img class="img-fluid" src="{{ asset($item->text{'image'}) }}" alt="Card image cap" style="">

                                    </div>
                                </a>
                                @gallery
                                @slot('gallery',$item->image)
                                @slot('id',$item->id)
                                @endgallery
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
        {{--DOSIFICADORAS--}}
        @if($general->id == 2)
        <div class="row">
            <div class="col-md-12">
                <h2 class="baires-color">Seleccioná una dosificadora</h2>
            </div>
        </div>

        <div class="row mt-5">
            @foreach($family as $item)
                <div class="col-md-4 mb-5">
                    <a href="{{ route('subfamilia',['familia' => $item->id]) }}" class="text-decoration-none" style="color: unset;">
                        @card
                        @slot('item',$item)
                        @slot('height','200px')
                        @endcard
                    </a>
                </div>
            @endforeach
        </div>
    @endif

        {{--ACCESORIOS--}}
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
