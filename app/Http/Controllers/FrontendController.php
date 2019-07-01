<?php

namespace App\Http\Controllers;

use App\Category;
use App\Content;
use App\Family;
use App\News;
use App\Product;
use App\Slider;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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

    public function noticias()
    {
        $categorias = Category::orderBy('order')->get();
        $noticias = News::orderBy('order')->get();
        return view('page.noticias.noticias',compact('noticias','categorias'));
    }

    public function show_noticias($id) {
        $categoria = Category::find($id);
//        dd($categoria->news);
        $categorias = Category::orderBy('order')->get();
        $noticias = $categoria->news()->orderBy('order')->paginate(8);
        return view('page.noticias.show_noticias', compact('noticias', 'categoria', 'categorias'));
    }

    public function noticias_blog(News $news)
    {
        $categorias = Category::orderBy('order')->get();
        return view('page.noticias.noticias_blog',compact('news','categorias'));
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

    public function buscador(Request $request)
    {
        //dd(isset($request->name));
        if (isset($request->name))
        {
            $resultado = Product::Orwhere('text->title_'.App::getLocale(), 'LIKE', "%$request->name%")->get();
        }else{
            $resultado = [];
        }
        //$resultado = Product::whereLike(['text->title_'.App::getLocale(), 'text->text_'.App::getLocale()], $request->name)->get();
        //dd($resultado);
        return view('page.buscador',compact('resultado'));
    }

}
