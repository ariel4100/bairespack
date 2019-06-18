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
        return view('adm.family.index',compact('categorias','general'));
    }

    public function create(General $general)
    {

        return view('adm.family.create',compact('general'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','galery','_method');
        $galery = $request->galery;

        $family = new Family();
        $family->text = $data;
        $family->image = $galery;
        $family->order = $request->order;
        $family->general_id = $request->general_id;
        $family->save();

        return back()->with('status','Producto creadó correctamente');
    }

    public function edit($id,General $general)
    {
        $categoria = Family::find($id);
        return view('adm.family.edit',compact('categoria','general'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token','galery','_method');
        $galery = $request->galery;

        $family = Family::find($id);
        $family->text = $data;
        $family->image = $galery;
        $family->order = $request->order;
        $family->general_id = 1;
        $family->update();

        return back()->with('status','Categoria actualizado correctamente');
    }

    public function delete($id)
    {
        Family::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
