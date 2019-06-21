<?php


namespace App\Http\ViewComposers;


use App\Content;
use Illuminate\View\View;

//use Illuminate\Support\Facades\View;

class ViewComposer
{

    public  function compose(View $view){
        $logos = Content::seccionTipo('logos', 'texto')->first();
        $view->with('logos',$logos);
    }
}