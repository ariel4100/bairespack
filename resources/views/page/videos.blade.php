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

            <ul class="nav" id="myClassicTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#profile-classic"
                       role="tab" aria-controls="profile-classic" aria-selected="true">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-light" id="follow-tab-classic" data-toggle="tab" href="#follow-classic" role="tab"
                       aria-controls="follow-classic" aria-selected="false">Follow</a>
                </li>
            </ul>
            <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
                <div class="tab-pane fade active show" id="profile-classic" role="tabpanel" aria-labelledby="profile-tab-classic">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                        dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                        incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <div class="tab-pane fade" id="follow-classic" role="tabpanel" aria-labelledby="follow-tab-classic">
                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                        aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                        quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                </div>

            </div>

        </div>
    </div>
    <!-- Classic tabs -->

@endsection
