<div class="fixed-top">
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

    <nav class="navbar navbar-expand-lg navbar-light py-0" style="box-shadow: unset;">
        <div class="container" style="background-color: #333333">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset($logos->text{'header'}) }}" alt="" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-md-column" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="text-white ml-2" href=" "> <i class="fab fa-whatsapp mr-2" style="color: #25d366;"></i>54 9 11 6050-7809</a></li>
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
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('nosotros') ? 'activo' : '' }}" href="{{ route('nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('envasadoras*') ? 'activo' : '' }}" href="{{ route('productos',['general' => 1]) }}">Envasadoras</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('dosificadoras') ? 'activo' : '' }}" href="{{ route('productos',['general' => 2]) }}">Dosificadoras</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href="{{ route('productos',['general' => 3]) }}">Accesorios</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href=" ">Noticias</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href="{{ route('post.venta') }}">Post-Venta</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href="{{ route('videos') }}">Videos</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('accesorios') ? 'activo' : '' }}" href="{{ route('contacto') }}">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2" href=" "><i class="fas fa-search prefix rounded-pill p-1 baires-color"  style="border: 2px solid #FEB80B;"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>