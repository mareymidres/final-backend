<?php

namespace App\Http\Controllers\Admin;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\CategoryController;

class CategoryController extends Controller
{
  public function index()
  {
      $categories = Category::all();
      return view('web.admin.category.index',compact('categories'));
  }
  
  public function create()
    {
    return view('web.admin.category.create');
    }

  public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
        ]);
        Category::create($request->only('name'));

        return redirect('admin/category')->with('success' , 'category created successfully');

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


    public function edit(Category $category)
    {
      return view('web.admin.Category.edit' ,compact('category') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , Category $category )
    {
        $request->validate([
            'name' => 'required|string|min:4',
        ]);
        $category->name = $request->name;
        $category->save();
         return redirect('admin/category')->with('success' , 'category updated successfully');
    }
   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('success' , 'category deleted successfully');

    }


}
