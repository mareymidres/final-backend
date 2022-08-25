<?php

namespace App\Http\Controllers\Front;

use App\Models\Blogsection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BloghomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogsections = Blogsection::all();
        return view('web.front.blog.index', compact('blogsections'));
       
    }

 
}
