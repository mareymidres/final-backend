<?php

namespace App\Http\Controllers\admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\support\facades\File;
use App\Http\Controllers\Controller;

class TestimonialControllr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('web.admin.testimonial.index',compact('testimonials'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.testimonial.create');

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
            'position'   => 'required|string|max:50',
            'description'=> 'required|string|max:1000',
        ]);
        
        $testimonial =  Testimonial::create($request->all());
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/testimonial' ), $filename);
            $testimonial['img']= $filename;
        }
        $testimonial->save();
        return redirect('admin/testimonial')->with('success' , 'testimonial created successfully');

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
    public function edit(Testimonial $testimonial)
    {
        return view('web.admin.testimonial.edit',compact('testimonial'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'img'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name'       => 'required|string|max:50',
            'position'   => 'required|string|max:50',
            'description'=> 'required|string|max:1000',
        ]);
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/testimonial' ), $filename);
            $testimonial['img']= $filename;
        }
        $testimonial->name    = $request->name;
        $testimonial->position = $request->position;
        $testimonial->description  = $request->description;
        $testimonial->save();
        return redirect('admin/testimonial')->with('success' , 'testimonial update successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Testimonial $Testimonial)
    {
        $destination = '/images/team'. $Testimonial->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $Testimonial->delete();
        return redirect()->back()->with('success' , 'About deleted successfully');

    }
    
}
