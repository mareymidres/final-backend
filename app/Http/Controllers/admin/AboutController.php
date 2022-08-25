<?php

namespace App\Http\Controllers\admin;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\support\facades\File;
use App\Http\Controllers\Controller;


class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            $abouts = About::all();
            return view('web.admin.about.index',compact('abouts'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.about.create');
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
            'title'       => 'required|string|min:4',
            'img'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'description' => 'required|string|max:1000',
            'descriptiontow' => 'required|string|max:1000',


        ]);
        $abouts = About::create($request->all());
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/about' ), $filename);
            $abouts['img']= $filename;
        }
        $abouts->save();
        return redirect('admin/about')->with('success' , 'About created successfully');
       
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
    public function edit(About $about)
    {     
        return view('web.admin.about.edit',compact('about') );

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , About $about)
    {
        $request->validate([
            'title'       => 'required|string|min:4',
            'img'         => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'description' => 'required|string|max:1000',
            'descriptiontow' => 'required|string|max:1000',


        ]);

        if($request->file('img'))
        {
            $destination = '/images/about'. $about->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/about' ), $filename);
            $about['img']= $filename;
            }
            $about->title       = $request->title ;
            // $about->img         = $request->img;
            $about->description = $request->description;
            $about->descriptiontow = $request->descriptiontow;


        $about->update();
        return redirect('admin/about')->with('success' , 'About update successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $destination = '/images/about'. $about->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $about->delete();
        return redirect()->back()->with('success' , 'About deleted successfully');

    }
}
