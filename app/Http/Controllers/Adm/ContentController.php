<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Content;

class ContentController extends Controller
{
    public $idioma = ["es","en"];

    public function index($section)
    {
        $content = Content::where("section",$section)->first();
        $data = $content->toArray();
        return view('adm.content.index',compact('section','data'));
    }

    public function edit($section)
    {
        return $section;
    }

    public function update(Request $request,$section)
    {
        $datos = $request->all();
//        dd($datos['list'][0]);
        $content = Content::firstOrNew(['section' => $section]);
    
        $contenido = [];
        foreach($this->idioma as $key=>$item)
        {
            $contenido["data"][$item] = [
                "title" => $datos['title_'.$item],
                "text" => $datos['text_'.$item],
            ];
            //la lista
            foreach ($datos['list'] as $lista)
            {
                $contenido["data"][$item]["lista"][] = ["title" => $lista['title_'.$item],"order" => $lista['order']];

            }
        }

        //dd($data);

        $content->fill($contenido)->save();
        
        return back()->with('status','Actualizado correctamente');
    }
}
