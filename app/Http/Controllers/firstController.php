<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;

class firstController extends Controller
{
    public function create()
    {
        return view('form');
    }
    public function store(StoreBlogRequest $request)
    {
    
        $data = Blog::create([
            'name'=>$request->input('name'),
            // 'categorie_id'=>$request->input('categorie_id'),
        ]);
        return view('form');
    }
}
