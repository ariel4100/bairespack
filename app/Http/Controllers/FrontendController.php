<?php

namespace App\Http\Controllers;

use App\Content;
use App\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $slider = Slider::where('section', 'home')->orderBy('order')->get();
        $contenido = Content::firstOrNew(['section' => 'home','type' => 'texto']);
        return view('page.home',compact('contenido','slider'));
    }

    public function nosotros()
    {
        $slider = Slider::where('section', 'nosotros')->orderBy('order')->get();
        $contenido = Content::firstOrNew(['section' => 'nosotros','type' => 'texto']);
        return view('page.nosotros',compact('contenido','slider'));
    }

    public function postventa()
    {

        return view('page.postventa');
    }

    public function contacto()
    {

        return view('page.contacto');
    }

}
