<?php

namespace App\Http\Controllers\Adm;

use App\Family;
use App\General;
use App\Subfamily;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubfamilyController extends Controller
{
    public function index(General $general)
    {
        $categorias = Subfamily::where('general_id',$general->id)->orderBy('order')->get();
        return view('adm.subfamily.index',compact('categorias','general'));
    }

    public function create(General $general)
    {
        $family = Family::where('general_id',$general->id)->orderBy('order')->get();
        return view('adm.subfamily.create',compact('general','family'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','general_id','familia_id','order');
         //dd($request->all());
        $gallery = $request->gallery;
//        if (isset($data['image']))
//        {
//            $path = $data['image']->store('uploads/familia');
//            $data['image'] = $path;
//        }
        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('gallery/subfamilies');
                $gallery[$k]['image'] = $path;
            }
        }

        $family = new Subfamily();
        $family->text = $data;
        $family->image = $gallery;
        $family->order = $request->order;
        $family->general_id = $request->general_id;
        $family->family_id = $request->familia_id;
        $family->save();
        return back()->with('status','Subcategoria creadó correctamente');
    }

    public function edit($id,General $general)
    {
        $subcategoria = Subfamily::find($id);
        $family = Family::where('general_id',$general->id)->orderBy('order')->get();
        return view('adm.subfamily.edit',compact('subcategoria','general','family'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data = $request->except('_token','config','_method','general_id');
        $gallery = $request->gallery;
        $family = Subfamily::find($id);
        //dd($data['image']);
//        if (isset($data['image']))
//        {
//            $path = $data['image']->store('uploads/familia');
//            $data['image'] = $path;
//        }else{
//            $data['image'] = $family->text{'image'};
//        }
        if (isset($gallery))
        {
            //dd($gallery);
            foreach ($gallery as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $gallery[$k]['image'] = $family->image[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('gallery/subfamilies');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);

        $family->text = $data;
        $family->image = $gallery;
        $family->order = $request->order;
        $family->general_id = $request->general_id;
        $family->family_id = $request->familia_id;
        $family->update();

        return back()->with('status','Categoria actualizado correctamente');
    }

    public function delete($id)
    {
        Subfamily::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
