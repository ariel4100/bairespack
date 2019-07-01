<nav>
    <ol class="list-unstyled d-flex">
        @if(isset($general))
            <li class="ml-2"><a href="{{ route('productos',['general' => $general->id]) }}" style="color: unset;" class="text-decoration-none">{{ isset($general) ? $general->text{'title_'.App::getLocale()} : null }}</a></li>
        @endif
        @if(isset($f))
            {{--{{ $f->text{'title_es'} }}--}}
                <li class="ml-2"><a href="{{ route('subfamilia',['familia' => $f->id]) }}" style="color: unset;" class="text-decoration-none">{{ isset($f) ? '| '. $f->text{'title_'.App::getLocale()} : null }}</a></li>
        @endif
        @if(isset($sf))
                <li class="ml-2"><a href="{{ route('productos.all',['subfamilia' => $sf->id , 'familia' => $sf->family_id ]) }}" style="color: unset;" class="text-decoration-none">{{  '| '.$sf->text{'title_'.App::getLocale() }   }} </a></li>
        @endif
        @if(isset($producto->subfamily))
            {{--{{ $producto->subfamily->text{'title_es'} ?? $sf->text{'title_es'} }}--}}
            <li class="ml-2"><a href="{{ route('productos.all',['subfamilia' => $producto->subfamily_id, 'familia' => $producto->family_id]) }}" style="color: unset;" class="text-decoration-none">  {{  '| '.$producto->subfamily->text{'title_'.App::getLocale()}  }}</a></li>
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