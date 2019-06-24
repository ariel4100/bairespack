<?php

namespace App\Http\Controllers\Adm;

use App\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index($producto)
    {
        $configuraciones = Config::orderBy('order')->get();
        //dd($configuraciones);
        return view('adm.products.config.index',compact('configuraciones','producto'));
    }

    public function create($producto)
    {
        //dd($producto);

        return view('adm.products.config.create',compact('producto'));
    }

    public function store(Request $request)
    {
        $gallery = $request->gallery;
        if (isset($gallery))
        {
            foreach ($gallery as $k => $item) {
                $path = $item['image']->store('gallery');
                $gallery[$k]['image'] = $path;
            }
        }
        //dd($request->all());
        $config = new Config();
        $config->text = $request->except('_token','product_id','gallery');
        $config->image = $gallery;
        $config->save();

        return back()->with('status','Creado correctamente');
    }

    public function edit($id)
    {
        //dd($producto);
        $config = Config::find($id);
        return view('adm.products.config.edit',compact('config'));
    }
}
