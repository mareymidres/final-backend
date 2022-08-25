<?php

namespace App\Http\Controllers\admin;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\support\facades\File;
use App\Http\Controllers\Controller;

class TeamControllr extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('web.admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('web.admin.team.create');
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
            'img'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name'       => 'required|string|max:50',
            'position'   => 'required|string|max:50',
            'twitter'    => 'required|string|max:200',
            'facebook'   => 'required|string|max:200',
            'insta'      => 'required|string|max:200',
            'linkedin'   => 'required|string|max:200',
        ]);
        
        $teams =  Team::create($request->all());
        if($request->file('img'))
        {
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/team' ), $filename);
            $teams['img']= $filename;
        }
        $teams->save();
        return redirect('admin/team')->with('success' , 'Team created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('web.admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'img'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name'       => 'required|string|max:50',
            'position'   => 'required|string|max:50',
            'twitter'    => 'required|string|max:200',
            'facebook'   => 'required|string|max:200',
            'insta'      => 'required|string|max:200',
            'linkedin'   => 'required|string|max:200',
        ]);
        if($request->file('img'))
        {
            $destination = '/images/team'. $team->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file       = $request->file('img');
            $extenstion = $file->getClientOriginalName();
            $filename   = date('YmdHi') . $extenstion;
            $file->move(public_path('/images/team' ), $filename);
            $team['img']= $filename;
        }
       
        $team->name     = $request->name;
        $team->position = $request->position;
        $team->twitter  = $request->twitter;
        $team->facebook = $request->facebook;
        $team->insta    = $request->insta;
        $team->linkedin = $request->linkedin;


        $team->save();
        return redirect('admin/team')->with('success' , 'Team update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Team $team)
    {
        $destination = '/images/team'. $team->img;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $team->delete();
        return redirect()->back()->with('success' , 'About deleted successfully');

    }
}
