<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\support\facades\File;

use App\Http\Controllers\Controller;

class BlogControllr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('web.admin.blog.index',compact('blogs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
         $categories = Category::all();
        return view('web.admin.blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'img'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name'       => 'required|string|max:50',
            'title'      => 'required|string',
            'image'      => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);
        
        $blog =  Blog::create($request->all());
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blog['img']= $filename;
        }
        if($request->file('image'))
        {
            $file       = $request->file('image');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blog['image']= $filename;
        }
        $blog->save();
        return redirect('admin/blog')->with('success' , 'blog created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    
    {
        $categories = Category::all();
        return view('web.admin.blog.edit',compact('categories','blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog ) 
    {
        $request->validate([
            'img'   => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name'  => 'required|string|max:50',
            'title' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',

        ]);
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blog['img']= $filename;
        }
        if($request->file('image'))
        {
            $file       = $request->file('image');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blog['image']= $filename;
        }
        $blog->name    = $request->name;
        $blog->title    = $request->title;
        $blog->categor_id    = $request->categor_id;

        $blog->save();
        return redirect('admin/blog')->with('success' , 'blog update successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog )
    {
        $destination = '/images/blog'. $blog->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $blog->delete();
        return redirect()->back()->with('success' , 'blog deleted successfully');

    }
}
