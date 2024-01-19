<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FrontendContoller extends Controller
{
    public function index()
    {
            return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function portfolio()
    {
        return view('portfolio');

    }
    public function contact()
    {
        return view('contact');
    }
    public function price()
    {
        return view('price');
    }
    public function blog()
    {
        return view('blog');
    }
}
