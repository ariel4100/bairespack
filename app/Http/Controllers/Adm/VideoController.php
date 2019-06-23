<?php

namespace App\Http\Controllers\Adm;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function index()
    {
        $videos =  Video::orderBy('order')->get();
        return view('adm.video.index',compact('videos'));
    }

    public function create()
    {
        return view('adm.video.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $video  = new Video();
        $video->text = $request->only('title_es','title_en');
        $video->order = $request->order;
        $video->video = $request->gallery;
        $video->save();


        return back()->with('status', 'Creado correctamente');
    }

    public function edit($id)
    {
        $video = Video::find($id);
        return view('adm.video.edit',compact('video'));
    }

    public function update(Request $request,$id)
    {
        //dd($request->all());
        $video = Video::find($id);
        $video->text = $request->only('title_es','title_en');
        $video->order = $request->order;
        $video->video = $request->gallery;
        $video->save();
        return back()->with('status', 'Actualizado correctamente');
    }
}
