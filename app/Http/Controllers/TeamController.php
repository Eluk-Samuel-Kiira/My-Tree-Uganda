<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use File;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('team.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $team = new Team();
        $file = $request->file('image');
        if($file != null) {
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Team'),$fileName);
            $team->image = $fileName;
        }
        $team->name = $request->name;
        $team->title = $request->title;
        if($request->facebook){
            $team->facebook = $request->facebook;
        }
        if($request->twitter){
            $team->twitter = $request->twitter;
        }
        if($request->instagram){
            $team->instagram = $request->instagram;
        }
        $team->save();
        return redirect()->route('team.index')->with('status', 'New Team member Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $team->update(['deleted' => 1]);
        return redirect()->back()->with('status', 'The Member\'s Details Has Been Deleted Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $file = $request->file('image');
        if($file != null) {
            //first delete the previous image stored if image is not null
            $fileloc1 = 'app/public/Team/'.$team->image;
            $filename1 = storage_path($fileloc1);
            if(File::exists($filename1)) {
                File::delete($filename1);
            }
            //Then store the current
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Team'),$fileName);
            //$friend->image = $fileName;
            //Update Image name
            $team->update(['image' => $fileName]);
        }

        $team->name = $request->input('name');
        $team->title = $request->input('title');

        if($request->facebook){
            $team->facebook = $request->input('facebook');
        }
        if($request->twitter){
            $team->twitter = $request->input('twitter');
        }
        if($request->instagram){
            $team->instagram = $request->input('instagram');
        }
        $team->update();
        return redirect()->route('team.index')->with('status', 'The Member\'s  Details Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
