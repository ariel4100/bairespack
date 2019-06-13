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
            $contenido = Content::seccionTipo($section, $type)->get();
            return view('adm.content.lista', compact('contenido', 'section','type'));
        }else {
            $contenido = Content::seccionTipo($section, $type)->first();
            $data = $contenido ? $data = json_decode($contenido->text, true) : $data = [];
        }
        return view('adm.content.index',compact('type','section','data'));
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
//
//        $datos = $request->except('_token','_method');
//
//        $content = Content::firstOrNew(['section' => $section]);
//
//
//        //dd($data);


        
        return back()->with('status','Actualizado correctamente');
    }
}
