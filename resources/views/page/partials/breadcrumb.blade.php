<nav>
    <ol class="list-unstyled d-flex">
        @if(isset($general))
            <li class="ml-2">{{ isset($general) ? ucwords(strtolower($general->text{'title_'.App::getLocale()})) : null }}</li>
        @endif
        @if(isset($f))
                <li class="ml-2">{{ isset($f) ? '| '.ucwords(strtolower($f->text{'title_'.App::getLocale()})) : null }}</li>
        @endif
        @if(isset($sf) || isset($producto->subfamily))
                <li class="ml-2">{{ isset($sf) ? '| '.ucwords(strtolower($sf->text{'title_'.App::getLocale()})) : null }}  {{ isset($producto->subfamily) ? '| '.ucwords(strtolower($producto->subfamily->text{'title_'.App::getLocale()})) : null }}</li>
        @endif
        @if(isset($producto->text))

                <li class="ml-2">| {{ $producto->text{'title_'.App::getLocale()} }}</li>
        @endif
        {{--<li class="ml-2">{{ isset($general) ? ucwords(strtolower($general->text{'title_'.App::getLocale()})) : null }}</li>--}}
        {{--<li class="ml-2">{{ isset($f) ? '| '.ucwords(strtolower($f->text{'title_'.App::getLocale()})) : null }}</li>--}}
        {{--<li class="ml-2">{{ isset($sf) ? '| '.ucwords(strtolower($sf->text{'title_'.App::getLocale()})) : null }}  {{ isset($producto->subfamily) ? '| '.ucwords(strtolower($producto->subfamily->text{'title_'.App::getLocale()})) : null }}</li>--}}
        {{--<li class="ml-2">{{ isset($producto->text) ? '| '.ucwords(strtolower($producto->text{'title_'.App::getLocale()})) : null }}</li>--}}
        {{--@dd($producto->text{'title_es'})--}}
    </ol>
</nav>