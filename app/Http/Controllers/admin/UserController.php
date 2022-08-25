<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;


class UserController extends Controller
{
    public function index()
  {
      $users = User::all();
      return view('web.admin.users.index',compact('users'));
  }

  

  public function edit(User $user)
  {
    Auth::user();
    return view('web.admin.users.edit',compact('user'));
   
  }

}
