<?php

namespace App\Http\Controllers;
// In the blow line we import the Models (MyBlog)
use App\Models\MyBlog;
use App\Http\Requests\StoreMyBlogRequest;
use App\Http\Requests\UpdateMyBlogRequest;

class MyBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    
    {
        $data= MyBlog::paginate(20);
        return view('admin.page.blog.dashboard')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.blog.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMyBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyBlogRequest $request)
    {
// This is 1st method Name is Create Method
        $data = MyBlog::create([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'number'=>$request->input('number'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);

        return redirect()->route('myblog.index');

// The blow Method Name is Force Method This is 2nd type of method;
        // $data = new MyBlog;
        // $data->name = $request['name'];
        // $data->address = $request['address'];
        // $data->number = $request['number'];
        // $data->email = $request['email'];
        // $data->password = $request['password'];
        // $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyBlog  $myBlog
     * @return \Illuminate\Http\Response
     */
    public function show(MyBlog $myBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyBlog  $myBlog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myBlog = MyBlog::find($id);
        // dd($myBlog);
        return view('admin.page.blog.update')->with('myblog',$myBlog);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyBlogRequest  $request
     * @param  \App\Models\MyBlog  $myBlog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyBlogRequest $request, $id)
    {
        $myBlog = MyBlog::find($id);
        $myBlog->update([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'number'=>$request->input('number'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        return redirect()->route('myblog.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyBlog  $myBlog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myBlog = MyBlog::find($id);
        $myBlog->delete();
        return redirect()->route('myblog.index');
    }
   
}
