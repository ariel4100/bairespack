<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {

        return view('page.home');
    }

    public function nosotros()
    {

        return view('page.nosotros');
    }

    public function postventa()
    {

        return view('page.postventa');
    }

    public function contacto()
    {

        return view('page.contacto');
    }

}
