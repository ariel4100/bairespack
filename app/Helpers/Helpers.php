<?php

function active($path)
{
    if (request()->segment(1) == 'es' || request()->segment(1) == 'en') {
        return request()->path() == App::getLocale() . '/' . $path ? 'activo' : null;
    } else {
        //dd('ds');
        return request()->path() == $path ? 'activo' : null;
    }
}