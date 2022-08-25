<?php

namespace App\Http\Controllers\front;

use App\Models\Portfolio;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\PortfolioSection;
use App\Http\Controllers\Controller;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $portfolios        = Portfolio::paginate(4);
       $testimonials      = Testimonial::paginate(1);
       $portfolioSections = PortfolioSection::all();
        return view('web.front.portfolio.index', compact('portfolios','testimonials','portfolioSections'));

    }

  
   
}
