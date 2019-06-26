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
        return view('page.productos.categorias',compact('family','general'));
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

        //dd($subfamily);
        return view('page.productos.subcategoria',compact('subfamily','general','productos'));
    }

    public function productos($family,$subfamily)
    {
        //dd($family);
        $sf = Subfamily::find($subfamily);
        $f = Family::find($family);
        $general = General::find($sf->general_id ?? $f->general_id);
        //dd($f);
//        if ($sf)
//        {
            $productos = Product::where('subfamily_id',$sf ? $sf->id : null)
                ->where('family_id',$f->id)->orderBy('order')
                ->get();
//        }
//        if ($f)
//        {
//            $productos = Product::where('family_id',$f->id)
//                ->where('subfamily_id',null)->orderBy('order')
//                ->get();
//        }
        //dd($productos);
        return view('page.productos.productos',compact('productos','general'));
    }

    public function producto(Product $producto)
    {
        $f = Family::find($producto->family_id);
        $general = General::find($f->general_id);
        //dd($general);

        return view('page.productos.producto',compact('producto','general'));
    }
}
