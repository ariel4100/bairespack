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
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('nosotros') ? 'activo' : '' }}" href="{{ route('nosotros') }}">{{ __('We') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('productos/1*') ? 'activo' : '' }}" href="{{ route('productos',['general' => 1]) }}">{{ __('Packaging') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('productos/2*') ? 'activo' : '' }}" href="{{ route('productos',['general' => 2]) }}">{{ __('Dosing') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('productos/3*') ? 'activo' : '' }}" href="{{ route('productos',['general' => 3]) }}">{{ __('Accessory') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('noticias') ? 'activo' : '' }}" href="{{ route('noticias') }}">{{ __('News') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('post-venta') ? 'activo' : '' }}" href="{{ route('post.venta') }}">{{ __('Post-Sale') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('videos') ? 'activo' : '' }}" href="{{ route('videos') }}">{{ __('Videos') }}</a></li>
                    <li class="nav-item"><a class="nav-link  ml-2 {{ request()->is('contacto') ? 'activo' : '' }}" href="{{ route('contacto') }}">{{ __('Contact') }}</a></li>
                    {{--<li class="nav-item"><a class="nav-link  ml-2" href=" "><i class="fas fa-search prefix rounded-pill p-1 baires-color"  style="border: 2px solid #FEB80B;"></i></a></li>--}}
                    <div class="btn-group dropleft">
                        <a href=""  class="nav-link ml-2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <i class="fas fa-search prefix rounded-pill p-1 baires-color" style="border: 2px solid #FEB80B;"></i>
                        </a>
                        <div class="dropdown-menu">
                            <div class="form-group m-0">
                                <input type="text" class="form-control" placeholder="Buscar...">
                            </div>
                        </div>
                    </div>
                    {{--<li class="nav-item">--}}
                        {{--<a href=""  class="nav-link ml-2" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">--}}
                            {{--<i class="fas fa-search prefix rounded-pill p-1 baires-color" style="border: 2px solid #FEB80B;"></i>--}}
                        {{--</a>--}}
                        {{--<form class="dropdown-menu dropdown-menu-right p-2">--}}
                            {{--<div class="form-group m-0">--}}
                                {{--<input type="text" class="form-control" placeholder="Buscar...">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </nav>
</div>