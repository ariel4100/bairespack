<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class ContentController extends Controller
{
    public $idioma = ["es","en"];

    public function index($section, $type)
    {
        if ($type == 'imagen') {
            $contenido = Content::firstOrCreate(['section' => $section,'type' => $type]);
            //dd($contenido);
            return view('adm.content.lista', compact('contenido', 'section','type'));
        }else {
            $contenido = Content::firstOrCreate(['section' => $section,'type' => $type]);
            //$contenido = Content::seccionTipo($section, $type)->first();
            //$data = $contenido ? $data = json_decode($contenido->text, true) : $data = [];
        }
        return view('adm.content.index',compact('type','section','contenido'));
    }

    public function create($section, $type) {
        return view('adm.content.create', compact('section','type'));
    }

    public function edit($section, Content $contenido) {
        if ($section) {
            return view('adm.content.edit', compact('contenido','section'));
        }
    }

    public function update(Request $request,$section)
    {
        //dd($request->all());
        $gallery = $request->gallery;
        $datos = $request->except('_token','_method','section','type');
        $content = Content::firstOrNew(['section' => $section]);
        if (isset($datos['favicon']))
        {
            $path = $datos['favicon']->store("uploads/$section/img");
            $datos['favicon'] = $path;
        }else{
            $datos['favicon'] = $content->text{'favicon'};
        }
        if (isset($datos['header']))
        {
            $path = $datos['header']->store("uploads/$section/img");
            $datos['header'] = $path;
        }else{
            $datos['header'] = $content->text{'header'};
        }
        if (isset($datos['footer']))
        {
            $path = $datos['footer']->store("uploads/$section/img");
            $datos['footer'] = $path;
        }else{
            $datos['footer'] = $content->text{'footer'};
        }
        if (isset($datos['image']))
        {
            $path = $datos['image']->store("uploads/$section/img");
            $datos['image'] = $path;
        }else{
            $datos['image'] = $content->text{'image'};
        }
        //galeria
        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $content->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($content);
        $content->type = $request->type;
        $content->text = $datos;
        $content->order = $request->order;
        $content->image = $gallery;
        $content->save();

        //dd($datos);

        return back()->with('status','Actualizado correctamente');
    }
}
