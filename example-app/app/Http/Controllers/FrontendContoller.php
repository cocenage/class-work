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
}
