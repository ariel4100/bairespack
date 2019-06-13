<?php

namespace App\Http\Controllers\Adm;

use App\Family;
use App\General;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamilyController extends Controller
{
    public function index(General $general)
    {

        $categorias = Family::where('general_id',$general->id)->orderBy('order')->get();
        return view('adm.family.index',compact('categorias'));
    }

    public function create()
    {
        return view('adm.family.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','galery');
        $galery = $request->galery;

        $family = new Family();
        $family->text = $data;
        $family->image = $galery;
        $family->order = $request->order;
        $family->general_id = 1;
        $family->save();

        return back()->with('status','Producto creadó correctamente');
    }

    public function edit($id)
    {
        $categoria = Family::find($id);
        return view('adm.family.edit',compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token','galery');
        $galery = $request->galery;

        $family = Family::find($id);
        $family->text = $data;
        $family->image = $galery;
        $family->order = $request->order;
        $family->general_id = 1;
        $family->update();

        return back()->with('status','Categoria actualizado correctamente');
    }
}
