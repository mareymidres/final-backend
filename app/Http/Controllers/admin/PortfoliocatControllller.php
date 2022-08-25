<?php

namespace App\Http\Controllers\admin;

use App\Models\Portfoliocat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfoliocatControllller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfoliocats = Portfoliocat::all();
      return view('web.admin.portfoliocat.index',compact('portfoliocats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.portfoliocat.create');
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
            'name' => 'required|string|min:3',
        ]);
        Portfoliocat::create($request->only('name'));

        return redirect('admin/portfoliocat')->with('success' , 'category created successfully');
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
    public function edit(Portfoliocat $portfoliocat )
    {
      return view('web.admin.portfoliocat.edit',compact('portfoliocat'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Portfoliocat $portfoliocat )
    {
        $request->validate([
            'name' => 'required|string|min:4',
        ]);
        $portfoliocat->name = $request->name;
        $portfoliocat->save();
         return redirect('admin/portfoliocat')->with('success' , 'portfoliocats updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfoliocat $portfoliocat)
    {
        $portfoliocat->delete();
        return redirect()->back()->with('success' , 'category deleted successfully');
    }
}
