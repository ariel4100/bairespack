<?php

namespace App\Http\Controllers;

use App\Family;
use App\General;
use App\Product;
use App\Subfamily;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function familia(General $general)
    {
        //dd($general);
        $family = Family::where('general_id',$general->id)->orderBy('order')->get();
        $productos = Product::where('general_id',$general->id)
            ->where('family_id',null)->where('subfamily_id',null)->orderBy('order')
            ->get();
        return view('page.productos.categorias',compact('family','general','productos'));
    }

    public function subfamilia($family)
    {
        $f = Family::find($family);
        $general = General::find($f->general_id);
        $subfamily = Subfamily::where('general_id',$f->general_id)
            ->where('family_id',$f->id)->orderBy('order')
            ->get();
        $productos = Product::where('general_id',$f->general_id)
            ->where('family_id',$f->id)->where('subfamily_id',null)->orderBy('order')
            ->get();

        //dd($productos);
        return view('page.productos.subcategoria',compact('subfamily','general','productos','f'));
    }

    public function productos($family,$subfamily)
    {
        //dd($family);
        $sf = Subfamily::find($subfamily);
        $f = Family::find($family);
        $general = General::find($sf->general_id ?? $f->general_id);

//        if ($sf)
//        {
            $productos = Product::where('subfamily_id',$sf ? $sf->id : null)
                ->where('family_id',$f->id)->orderBy('order')
                ->get();
//            $subfamily = Subfamily::where('general_id',$general->id)
//            ->where('family_id',$f->id)->orderBy('order')
//            ->get();

//        }
//        $productos = Product::where('general_id',$f->general_id)
//            ->where('family_id',$f->id)->where('subfamily_id',$sf->general_id)->orderBy('order')
//            ->get();
//        if ($f)
//        {
//            $productos = Product::where('family_id',$f->id)
//                ->where('subfamily_id',null)->orderBy('order')
//                ->get();
//        }
        //dd($productos);
        return view('page.productos.productos',compact('productos','general','sf','f'));
    }

    public function producto(Product $producto)
    {
        $f = Family::find($producto->family_id);
        $general = General::find($producto->general_id);
        //dd($general);

        return view('page.productos.producto',compact('producto','general','f'));
    }
}
