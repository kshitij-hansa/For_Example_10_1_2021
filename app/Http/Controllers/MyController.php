<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('blog.pages.index');
    }
    public function about()
    {
        return view('blog.pages.about');
    }
    public function menu()
    {
        return view('blog.pages.menu');
    }
    public function getData(){
        
    }
}
