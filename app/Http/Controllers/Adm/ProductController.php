<?php

namespace App\Http\Controllers\Adm;

use App\Family;
use App\General;
use App\Product;
use App\Subfamily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(General $general)
    {
        $familia = Family::where('general_id',$general->id)->first();

        $familia_id = isset($familia) ? $familia->id : null;
        $subfamilia = Subfamily::where('general_id',$general->id)->where('family_id',$familia_id)->first();

        $subfamilia_id = isset($subfamilia) ? $subfamilia->id : null;
        $productos = Product::where('subfamily_id',$subfamilia_id)->where('family_id',$familia_id)->get();

        return view('adm.products.index',compact('productos','general'));
    }

    public function create(General $general)
    {
        $categorias = Family::all();
        $subcategorias = Subfamily::all();

        return view('adm.products.create',compact('categorias','subcategorias','general'));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $producto = new Product();
        $producto->text = $request->except('_token','category_id','subcategory_id','order','galery');
        $producto->image = $request->galery;
        $producto->order = $request->order;
        $producto->subfamily_id = $request->subcategory_id;
        $producto->family_id = $request->category_id;
        $producto->save();

        return back()->with('status','Se creó correctamente');
    }

    public function edit($id, General $general)
    {

        $categorias = Family::all();
        $producto = Product::find($id);
        $subcategorias = Subfamily::all();

        return view('adm.products.edit',compact('producto','categorias','subcategorias','general'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->gallery);
        $gallery = $request->gallery;
        foreach ($gallery as $k=>$item)
        {
            $path = $item['img']->store('gallery');
            $gallery[$k]['img'] = $path;
        }
        dd($gallery);
        $producto = Product::find($id);
        $producto->text = $request->except('_token','category_id','subcategory_id','order','galery');
        $producto->image = $request->galery;
        $producto->order = $request->order;
        $producto->subfamily_id = $request->subcategory_id;
        $producto->family_id = $request->category_id;
        $producto->save();


        return back()->with('status','Se actualizó correctamente');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
