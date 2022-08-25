<?php

namespace App\Http\Controllers\admin;

use App\Models\PortfolioSection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfoliosectios = PortfolioSection::all();
        return view('web.admin.portfolio_section.index',compact('portfoliosectios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.portfolio_section.create');
        
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
            'title'             => 'string|max:700',
            'firstdescription'  => 'string|max:1000',
            'seconddescription' => 'string|max:1000',
            'thirddescription'  => 'string|max:1000',
            'fourthdescription' => 'string|max:1000',


        ]);
        PortfolioSection::create($request->except('_token'));
        return redirect('admin/portfoliosection')->with('success' , 'PortfolioSection created successfully');
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
    public function edit(PortfolioSection $portfoliosection)
    {
        return view('web.admin.portfolio_section.edit',compact('portfoliosection'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,PortfolioSection $portfoliosection )
    {
        $request->validate([
            'title'             => 'string|max:700',
            'firstdescription'  => 'string|max:1000',
            'seconddescription' => 'string|max:1000',
            'thirddescription'  => 'string|max:1000',
            'fourthdescription' => 'string|max:1000',


        ]);
        $portfoliosection->title = $request->title;
        $portfoliosection->firstdescription = $request->firstdescription;
        $portfoliosection->seconddescription = $request->seconddescription;
        $portfoliosection->thirddescription = $request->thirddescription;
        $portfoliosection->fourthdescription = $request->fourthdescription;
        $portfoliosection->save();
        return redirect('admin/portfoliosection')->with('success' , 'PortfolioSection update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioSection $portfoliosection)
    {
        $portfoliosection->delete();
        return redirect()->back()->with('success' , 'PortfolioSection deleted successfully');

    }
}
