<?php

namespace App\Http\Controllers;
// use App\resources\view

class PageController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

}
