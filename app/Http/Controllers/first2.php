<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;


class first2 extends Controller
{
    public function create()
    {
        return view('form');
    }
    public function store(StoreBlogRequest $request)
    {
        $data = Blog::create([
            'name'=>$request->input('name'),
            // 'categorory_id'=>$request->input('categorory_id'),
        ]);
        return view('form');
    }
}
