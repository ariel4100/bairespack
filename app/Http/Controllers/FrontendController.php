<?php

namespace App\Http\Controllers;

use App\Content;
use App\Family;
use App\Slider;
use App\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $familia = Family::where('text->featured','on')->get();
        $postventa = Content::where('text->featured','on')->first();
        //dd($familia);
        $slider = Slider::where('section', 'home')->orderBy('order')->get();
        $contenido = Content::firstOrNew(['section' => 'home','type' => 'texto']);
        return view('page.home',compact('contenido','slider','familia','postventa'));
    }

    public function nosotros()
    {
        $slider = Slider::where('section', 'nosotros')->orderBy('order')->get();
        $contenido = Content::firstOrNew(['section' => 'nosotros','type' => 'texto']);
        return view('page.nosotros',compact('contenido','slider'));
    }

    public function postventa()
    {
        $contenido = Content::firstOrNew(['section' => 'venta','type' => 'texto']);
        return view('page.postventa',compact('contenido'));
    }

    public function videos()
    {
        $videos = Video::orderBy('order')->get();
        return view('page.videos',compact('videos'));
    }

    public function contacto()
    {

        return view('page.contacto');
    }

}
