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
        //dd($subfamily);
        return view('page.productos.subcategoria',compact('subfamily','general'));
    }

    public function productos($subfamily)
    {
        $sf = Subfamily::find($subfamily);
        $general = General::find($sf->general_id);
        //dd($sf);
        $productos = Product::where('subfamily_id',$sf->id)
            ->where('family_id',$sf->id)->orderBy('order')
            ->get();
        //dd($productos);
        return view('page.productos.productos',compact('productos','general'));
    }

    public function producto(Product $producto)
    {
        $sf = Subfamily::where('family_id',$producto->family_id)->first();
        $general = General::find($sf->general_id);
        //dd($general);

        return view('page.productos.producto',compact('producto','general'));
    }
}
