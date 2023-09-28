<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Http\Requests\StoreFriendRequest;
use App\Http\Requests\UpdateFriendRequest;
use File;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('friends.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('friends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFriendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFriendRequest $request)
    {
        $friend = new Friend();
        $file = $request->file('image');
        if($file != null) {
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Friends'),$fileName);
            $friend->image = $fileName;
        }
        $friend->name = $request->name;
        $friend->title = $request->title;
        $friend->message = $request->message;
        $friend->user_id = $request->user_id;
        $friend->save();
        return redirect()->route('friend.index')->with('status', 'New Friend/Donor Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function show(Friend $friend)
    {
        $friend->update(['deleted' => 1]);
        return redirect()->back()->with('status', 'The Friend\'s Details Has Been Deleted Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function edit(Friend $friend)
    {
        return view('friends.edit', compact('friend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFriendRequest  $request
     * @param  \App\Models\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFriendRequest $request, Friend $friend)
    {
        $file = $request->file('image');
        if($file != null) {
            //first delete the previous image stored if image is not null
            $fileloc1 = 'app/public/Friends/'.$friend->image;
            $filename1 = storage_path($fileloc1);
            if(File::exists($filename1)) {
                File::delete($filename1);
            }
            //Then store the current
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Friends'),$fileName);
            //$friend->image = $fileName;
            //Update Image name
            $friend->update(['image' => $fileName]);
        }

        $friend->name = $request->input('name');
        $friend->title = $request->input('title');
        $friend->message = $request->input('message');
        $friend->update();
        return redirect()->route('friend.index')->with('status', 'The Friend\'s  Details Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Friend  $friend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Friend $friend)
    {
        //
    }
}
