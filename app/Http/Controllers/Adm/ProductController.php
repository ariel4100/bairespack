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

//        $familia = Family::where('general_id',$general->id)->first();
//
//        $familia_id = isset($familia) ? $familia->id : null;
//        $subfamilia = Subfamily::where('general_id',$general->id)->where('family_id',$familia_id)->first();
//
//        $subfamilia_id = isset($subfamilia) ? $subfamilia->id : null;
        $productos = Product::where('general_id',$general->id)->orderBy('order')->get();
        //dd($productos);
        return view('adm.products.index',compact('productos','general'));
    }

    public function create(General $general)
    {
        $categorias = Family::where('general_id',$general->id)->orderBy('order')->get();
        $subcategorias = Subfamily::where('general_id',$general->id)->orderBy('order')->get();

        return view('adm.products.create',compact('categorias','subcategorias','general'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $gallery = $request->gallery;
        if (isset($gallery))
        {
            foreach ($gallery as $k => $item) {
                $path = $item['image']->store('gallery');
                $gallery[$k]['image'] = $path;
            }
        }
        $producto = new Product();
        $producto->text = $request->except('_token','category_id','subcategory_id','order','config');
        $producto->image = $gallery;
        $producto->order = $request->order;
        $producto->subfamily_id = $request->subcategory_id;
        $producto->family_id = $request->category_id;
        $producto->general_id = $request->general_id;
        $producto->save();

        return back()->with('status','Producto creado correctamente');
    }

    public function edit($id, General $general)
    {
        $categorias = Family::where('general_id',$general->id)->orderBy('order')->get();
        $subcategorias = Subfamily::where('general_id',$general->id)->orderBy('order')->get();
        $producto = Product::find($id);

        //productos relacionados envasadoras
        $envasadoras = Product::where('general_id',1)->orderBy('order')->get();
        //productos relacionados dosificadoras
        $dosificadoras = Product::where('general_id',2)->orderBy('order')->get();
        //productos relacionados accesorios
        $accesorios = Product::where('general_id',3)->orderBy('order')->get();

        return view('adm.products.edit',compact('producto','categorias','subcategorias','general','envasadoras','dosificadoras'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $gallery = $request->gallery;
        $producto = Product::find($id);
        $producto->related()->sync($request->related_id);
        //dd($producto->related);
        //dd($producto->image[0]['image']);
        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $producto->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);
        $producto = Product::find($id);
        $producto->text = $request->except('_token','category_id','subcategory_id','order','config');
        $producto->image = $gallery;
        $producto->order = $request->order;
        $producto->subfamily_id = $request->subcategory_id;
        $producto->family_id = $request->category_id;
        $producto->general_id = $request->general_id;
        $producto->save();


        return back()->with('status','Se actualizó correctamente');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
