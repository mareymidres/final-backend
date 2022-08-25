<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Team;
use App\Models\About;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Category;
use App\Models\Question;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Portfoliocat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $services      = Service::all();
        $abouts        = About::all();
        $brands        = Brand::all();
        $testimonials  = Testimonial::all();
        $teams         = Team::all();
        $questions     = Question::all();
        $blogs         = Blog::paginate(3);
        $categories    = Category::all();
        $portfolios    = Portfolio::all();
        $portfoliocats = Portfoliocat::all();
        return view('web.front.home.index', compact('services','abouts','brands','testimonials','teams','questions','categories','blogs','portfolios','portfoliocats'));
    }

}