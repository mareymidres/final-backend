<?php

namespace App\Http\Controllers\admin;

use App\Models\Blog;
use App\Models\Blogsection;
use Illuminate\Http\Request;
use Illuminate\support\facades\File;
use App\Http\Controllers\Controller;

class BlogsectionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogsections = Blogsection::all();
        return view('web.admin.blog_section.index',compact('blogsections'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
        
        return view('web.admin.blog_section.create');
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
   
           
            'image'             =>'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'img'               =>'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'title'             =>'required|string|max:200',
            'secondtitle'       =>'required|string|max:200',
            'thirdtitle'        =>'required|string|max:200',
            'description'       => 'required|string',
            'firstdescription'  =>'required|string',
            'seconddescription' =>'required|string',
            'thirddescription'  =>'required|string',
            'fourthdescription' =>'required|string',
            'fifthtdescription' =>'required|string',
            
        ]);
        
        $blogsection =  Blogsection::create($request->all());
        if($request->file('image'))
        {
            $file       = $request->file('image');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blogsection' ), $filename);
            $blogsection['image']= $filename;
        }
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blogsection' ), $filename);
            $blogsection['img']= $filename;
        }
       
        $blogsection->save();
        return redirect('admin/blogsection')->with('success' , 'blogsection created successfully');

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
    public function edit(Blogsection $blogsection)
    
    {
        return view('web.admin.blog_section.edit',compact('blogsection'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blogsection $blogsection ) 
    {
        $request->validate([
           
            'image'             =>'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'img'               =>'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'title'             =>'required|string|max:200',
            'secondtitle'       =>'required|string|max:200',
            'thirdtitle'        =>'required|string|max:200',
            'description'       => 'required|string',
            'firstdescription'  =>'required|string',
            'seconddescription' =>'required|string',
            'thirddescription'  =>'required|string',
            'fourthdescription' =>'required|string',
            'fifthtdescription' =>'required|string',
        ]);
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blogsection['img']= $filename;
        }
        if($request->file('image'))
        {
            $file       = $request->file('image');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/blog' ), $filename);
            $blogsection['image']= $filename;
        }

        $blogsection->title                = $request->title;
        $blogsection->secondtitle          = $request->secondtitle;
        $blogsection->thirdtitle           = $request->thirdtitle;
        $blogsection->description          = $request->description;
        $blogsection->firstdescription     = $request->firstdescription;
        $blogsection->seconddescription    = $request->seconddescription;
        $blogsection->thirddescription     = $request->thirddescription;
        $blogsection->fourthdescription    = $request->fourthdescription;
        $blogsection->fifthtdescription    = $request->fifthtdescription;

        $blogsection->save();
        return redirect('admin/blogsection')->with('success' , 'blog section update successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogsection $blogsection )
    {
        $destination = '/images/blog'. $blogsection->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $blogsection->delete();
        return redirect()->back()->with('success' , 'blog section deleted successfully');

    }
}
