<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
  public function index()
  {
    $categories = Category::count();
    $admin = User::where('role_as','admin')->count();
    $users = User::where('role_as','user')->count();

     return view('web.admin.dashboard',compact('categories','users' , 'admin'));
  }

}
