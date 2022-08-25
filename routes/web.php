<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BlogControllr;
use App\Http\Controllers\admin\TeamControllr;
use App\Http\Controllers\admin\BrandControllr;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\QuestionControllr;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\BloghomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\front\ProtfolioController;
use App\Http\Controllers\admin\TestimonialControllr;
use App\Http\Controllers\admin\BlogsectionController;
use App\Http\Controllers\Front\BlogdetailsController;
use App\Http\Controllers\admin\PortfoliocatControllller;
use App\Http\Controllers\admin\PortfolioSectionController;

Route::get('/', function () {
    return view('auth.login');
}); 
Route::get('/home', [HomeController::class, 'index'])->name('home.index');


Auth::routes();
// front
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::get('/blog', [BloghomeController::class, 'index'])->name('bloghome.index');;

Route::get('/blogdetails', [BlogdetailsController::class, 'index'])->name('blogdetail.index');;

Route::get('/portfolio-details', [ProtfolioController::class, 'index'])->name('protfolio.index');;


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
     
    Route::resource('dashboard', DashboardController::class);
    // category
    Route::resource('category',CategoryController::class);
    // user
    Route::resource('user', UserController::class);
    // about
    Route::resource('about', AboutController::class);
    // Brand
    Route::resource('brand', BrandControllr::class);
    // Question
    Route::resource('question', QuestionControllr::class);
    // service
    Route::resource('service', ServiceController::class);
    // Team
    Route::resource('team', TeamControllr::class);
    // Testimonial
    Route::resource('testimonial', TestimonialControllr::class);
    // blog
    Route::resource('blog', BlogControllr::class);
    // portfolio
    Route::resource('portfolio', PortfolioController::class);
    // portfoliocat
    Route::resource('portfoliocat', PortfoliocatControllller::class);
    // portfolio_section
    Route::resource('portfoliosection', PortfolioSectionController::class);
    // blogsection
    Route::resource('blogsection', BlogsectionController::class);



});