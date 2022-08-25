<?php

namespace App\Http\Controllers\admin;


use App\Models\Portfolio;
use App\Models\Portfoliocat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\support\facades\File;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('web.admin.portfolio.index',compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portfoliocats = Portfoliocat::all();
        return view('web.admin.portfolio.create',compact('portfoliocats'));
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
        
        $portfolio =  Portfolio::create($request->all());
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/portfolio' ), $filename);
            $portfolio['img']= $filename;
        }
        $portfolio->save();
        return redirect('admin/portfolio')->with('success' , 'portfolio created successfully');
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
    public function edit(Portfolio $portfolio)
    {
        $portfoliocats = Portfoliocat::all();
        return view('web.admin.portfolio.edit',compact('portfoliocats','portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
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
            $file->move(public_path('/images/portfolio' ), $filename);
            $portfolio['img']= $filename;
        }
        
        $portfolio->name       = $request->name;
        $portfolio->title      = $request->title;
        $portfolio->categor_id = $request->categor_id;

        $portfolio->save();
        return redirect('admin/portfolio')->with('success' , 'portfolio update successfully');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $destination = '/images/blog'. $portfolio->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $portfolio->delete();
        return redirect()->back()->with('success' , 'portfolio deleted successfully');

    }
}
