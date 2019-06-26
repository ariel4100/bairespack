@extends('page.layouts.app')
@push('style')
    <style>
        #myClassicTab .nav-link{
            color: #000 !important;
        }
        .active{
            border-bottom: 2px solid #FFB900 !important;
        }
        li a{
            border-bottom: 2px solid #B0B0B0;
        }
    </style>
@endpush
@section('content')
    <div class="container" style="margin-top: 8rem">
        <div class="row">
            <div class="col-md-12">
                <h2 class="py-2" style="border-bottom: 2px solid #FEB80B; width: 10%">Videos</h2>

            </div>
        </div>
    </div>
    <!-- Classic tabs -->
    <div class="container">

        <div class="clas sic-tabs">
            {{--@dd($videos)--}}
            <ul class="nav mb-5" id="myClassicTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link px-5  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#video-0"
                       role="tab" aria-controls="profile-classic" aria-selected="true">Todos</a>
                </li>
                @forelse($videos as $k=>$item)
                    <li class="nav-item">
                        <a class="nav-link px-5  waves-light  show" id="profile-tab-classic" data-toggle="tab" href="#video-{{$k+1}}"
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
                <div class="tab-pane fade active  show" id="video-0" role="tabpanel" aria-labelledby="profile-tab-classic">
                    <div class="row">
                        {{--@dd($item->video)--}}

                    </div>
                </div>
                @forelse($videos as $k=>$item)
                    <div class="tab-pane fade  show" id="video-{{$k+1}}" role="tabpanel" aria-labelledby="profile-tab-classic">
                        <div class="row">
                            {{--@dd($item->video)--}}
                            @forelse($item->video ?? [] as $video)
                            <div class="col-md-4 mb-4">
                                <iframe width="100%" height="200" src="https://www.youtube.com/embed/{{ $video{'video'} ?? '' }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <p>{!! $video{'title_'.App::getLocale()} ?? '' !!}</p>
                            </div>
                            @empty
                                <p>No hay registro</p>
                            @endforelse
                        </div>
                    </div>
                @empty
                    <h4 class="">No hay videos </h4>
                @endforelse
            </div>

        </div>
    </div>
    <!-- Classic tabs -->

@endsection
