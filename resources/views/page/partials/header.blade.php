<div class="fixed-top fixed-top-sm">
    {{--<div class="container" style="background-color: #333333">--}}
        {{--<div class="row">--}}
            {{--<div class="container">--}}
                {{--<div class="d-flex justify-content-end align-items-center">--}}
                    {{--<i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>--}}
                    {{--<p class="m-0 p-0">54 9 11 6050-7809</p>--}}
                    {{--<div class="form-group m-0 ml-3">--}}
                        {{--<select class="custom-select-sm" name="" id="">--}}
                            {{--<option value="">ES</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <nav class="navbar navbar-expand-lg navbar-dark py-0" style="box-shadow: unset;background-color: #333333">
        <div class="container" style="background-color: #333333">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($logos->text{'header'}) }}" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-md-column" id="navbarNav">
                <ul class="navbar-nav ml-auto d-flex flex-row justify-content-between">
                    <li class="nav-item"><a class="text-white ml-2" href="https://wa.me/5491160507809" target="_blank"> <i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>54 9 11 6050-7809</a></li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-sm m-0 p-0 ml-2 text-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ App::getLocale() }}
                            </button>
                            <div class="dropdown-menu m-0 py-0 dropdown-menu-right" style="min-width: 2rem" aria-labelledby="dropdownMenuButton">
                                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)
                                    <a class="dropdown-item m-0 p-0 {{ LaravelLocalization::getCurrentLocale()==$key?'active':'' }}" href="{{ LaravelLocalization::getLocalizedURL($key) }}">{{ ucwords($key) }}</a>
                                @endforeach
                            </div>
                        </div>
{{--                        <div class="form-group m-0 ml-3">--}}
{{--                            <select class="lang" name=""onchange="location = this.value;">--}}
{{--                                @foreach (LaravelLocalization::getSupportedLocales() as $key => $lang)--}}
{{--                                    <option value="{{ $key }}" {{ LaravelLocalization::getCurrentLocale()==$key?'selected':'' }}><a href="{{ LaravelLocalization::getLocalizedURL($key) }}">{{ ucwords($key) }}</a></option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                        </div>--}}

                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('nosotros') }}" href="{{ route('nosotros') }}">{{ __('About us') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/1') }}" href="{{ route('productos',['general' => 1]) }}">{{ __('Packaging') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/2') }}" href="{{ route('productos',['general' => 2]) }}">{{ __('Dosing') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('productos/3') }}" href="{{ route('productos',['general' => 3]) }}">{{ __('Accessory') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('noticias') }}" href="{{ route('noticias') }}">{{ __('News') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('post-venta') }}" href="{{ route('post.venta') }}">{{ __('Post-Sale') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('videos') }}" href="{{ route('videos') }}">{{ __('Videos') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ active('contacto') }}" href="{{ route('contacto') }}">{{ __('Contact') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2" href="#buscar" data-toggle="modal"><i class="fas fa-search prefix rounded-pill p-1 baires-color"  style="border: 2px solid #FEB80B;"></i></a></li>
                    {{--<div class="btn-group dropleft">--}}
                        {{--<a href=""  class="nav-link ml-2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">--}}
                            {{--<i class="fas fa-search prefix rounded-pill p-1 baires-color" style="border: 2px solid #FEB80B;"></i>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu">--}}
                            {{--<div class="form-group m-0">--}}
                                {{--<input type="text" class="form-control" placeholder="Buscar...">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- Modal -->
<div class="modal fade" id="buscar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Buscador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('buscador') }}" method="get">

                    <div class="md-form">
                        <i class="fas fa-search prefix " style="color: black!important;"></i>
                        <input type="text" name="name" class="form-control" placeholder="Buscar...">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>