<?php

namespace App\Http\Controllers\Adm;

use App\Config;
use App\Product;
use App\Subfamily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ConfigController extends Controller
{
    public function index($producto)
    {
        $configuraciones = Config::where('product_id',$producto)->orderBy('order')->get();
        //dd($configuraciones);
        return view('adm.products.config.index',compact('configuraciones','producto'));
    }

    public function create($producto)
    {
        //dd($producto);
        $dosificadoras = Subfamily::where('general_id',2)->get();
        return view('adm.products.config.create',compact('producto','dosificadoras'));
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
        //dd($request->all());
        $config = new Config();
        $config->text = $request->except('_token','product_id','gallery');
        $config->image = $gallery;
        $config->order = $request->order;
        $config->product_id = $request->product_id;
        $config->save();
        $config->product()->sync($request->related_id);

        return back()->with('status','Creado correctamente');
    }

    public function edit($id)
    {
        $config = Config::find($id);
         //dd($config->text{'tipo_es'});
        if ($config->text{'tipo_es'} == 'Sólidos')
        {
            $dosificadoras = Subfamily::where('general_id',2)->get();
        }else{
            $dosificadoras = Product::where('general_id',2)->get();
        }
//        $dosificadoras = DB::table('subfamilies')
//            ->join('products', 'subfamilies.id', '=', 'products.subfamily_id')
//            ->select('products.', 'subfamilies.text', 'subfamilies.image')
//            ->where('products.general_id',2)
//            ->get();

        return view('adm.products.config.edit',compact('config','dosificadoras'));
    }

    public function update(Request $request,$id)
    {
         //dd($request->all());
        $config = Config::find($id);

        if ($config->text{'tipo_es'} == 'Sólidos')
        {
            //dd($config->subfamily());
            $config->subfamily()->sync($request->related_id);
        }else{
            $config->product()->sync($request->related_id);
        }


        //dd($config->product);
        $gallery = $request->gallery;
        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $config->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);

        $config->text = $request->except('_token','product_id','gallery','_method','order');
        $config->image = $gallery;
        $config->order = $request->order;
        $config->product_id = $request->product_id;
        $config->save();

        return back()->with('status','Actualizado correctamente');
    }


    public function delete($id)
    {
        //dd($producto);
        Config::find($id)->delete();
        return back()->with('status','Eliminado correctamente');
    }

}
