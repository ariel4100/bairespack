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
         //dd($request->all());
        $data = $request->except('_token','config','_method');
        $gallery = $request->gallery;
        $image = $request->image;
        //dd($request->all());

        if (isset($image))
        {
            foreach ($image as $k => $item) {
                $path = $item['image']->store('plans');
                $image[$k]['image'] = $path;
            }
        }
//

//        if (isset($data['image']))
//        {
//            $path = $data['image']->store('uploads/familia');
//            $data['image'] = $path;
//        }
        if (isset($gallery))
        {
            foreach ($gallery as $k=>$item)
            {
                $path = $item['image']->store('uploads/familia/bag');
                $gallery[$k]['image'] = $path;
            }
        }
//        dd($gallery);
        $family = new Family();
        $family->text = $data;
        $family->image = $gallery;
        $family->plans = $image;
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
        //dd($request->all());
        $data = $request->except('_token','config','_method','general_id');
        $gallery = $request->gallery;
        $image = $request->image;
        $family = Family::find($id);
        //dd($data['image']);
        if (isset($image))
        {
            //dd($gallery);
            foreach ($image as $k => $item) {
                //dd($item['image']);
                if (is_string($item['image']))
                {
                    //dd($item['image']);
                    $image[$k]['image'] = $family->plans[$k]['image'];
                }else{
                    //dd($item['image']);
                    $path = $item['image']->store('plans');
                    $image[$k]['image'] = $path;
                }
            }
        }
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
                    $path = $item['image']->store('gallery');
                    $gallery[$k]['image'] = $path;
                }
            }
        }
        //dd($gallery);

        $family->text = $data;
        $family->image = $gallery;
        $family->plans = $image;
        $family->order = $request->order;
        $family->general_id = $request->general_id;
        $family->update();

        return back()->with('status','Categoria actualizado correctamente');
    }

    public function delete($id)
    {
        Family::find($id)->delete();
        return back()->with('status','Se eliminó correctamente');
    }
}
