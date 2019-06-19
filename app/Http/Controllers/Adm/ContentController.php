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
            $contenido = Content::firstOrCreate($section, $type)->get();
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

        $content->type = $request->type;
        $content->text = $datos;
        $content->order = $request->order;
        $content->save();

        //dd($datos);


        
        return back()->with('status','Actualizado correctamente');
    }
}
