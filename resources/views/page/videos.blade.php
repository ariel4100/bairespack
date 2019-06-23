@extends('page.layouts.app')
@push('style')
    <style>
        #myClassicTab .nav-link{
            color: #000 !important;
        }
    </style>
@endpush
@section('content')
    @title
    @slot('title','videos')
    @endtitle
    <!-- Classic tabs -->
    <div class="container">

        <div class="classic-tabs">

            <ul class="nav mb-5" id="myClassicTab" role="tablist">
                @forelse($videos as $k=>$item)
                    <li class="nav-item">
                        <a class="nav-link  waves-light {{ $k==0 ? 'active': '' }} show" id="profile-tab-classic" data-toggle="tab" href="#video-{{$k}}"
                           role="tab" aria-controls="profile-classic" aria-selected="true">{!! $item->text{'title_'.App::getLocale()} !!}</a>
                    </li>
                @empty
                    <li class="nav-item">
                        <a class="nav-link  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#video"
                           role="tab" aria-controls="profile-classic" aria-selected="true">Todos</a>
                    </li>
                @endforelse
            </ul>
            <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
                @foreach($videos as $k=>$item)
                    <div class="tab-pane fade {{ $k==0 ? 'active': '' }} show" id="video-{{$k}}" role="tabpanel" aria-labelledby="profile-tab-classic">
                        <div class="row">
                            @forelse($item->video as $video)
                            <div class="col-md-4 mb-4">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $video{'video'} }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>{!! $video{'title_'.App::getLocale()} !!}</p>
                            </div>
                            @empty
                                <p>No hay registro</p>
                            @endforelse
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Classic tabs -->

@endsection
