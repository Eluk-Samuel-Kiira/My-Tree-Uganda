<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use App\Models\Partner;
use File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('partners.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        $partner = new Partner();
        $file = $request->file('image');
        if($file != null) {
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Partners'),$fileName);
            $partner->image = $fileName;
        }
        $partner->name = $request->name;
        $partner->category = $request->category;
        $partner->message = $request->message;
        $partner->save();
        return redirect()->route('partner.index')->with('status', 'New Partner Has Been Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {

        $partner->update(['deleted' => 1]);
        return redirect()->back()->with('status', 'The Partner\'s Details Has Been Deleted Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $file = $request->file('image');
        if($file != null) {
            //first delete the previous image stored if image is not null
            $fileloc1 = 'app/public/Partners/'.$partner->image;
            $filename1 = storage_path($fileloc1);
            if(File::exists($filename1)) {
                File::delete($filename1);
            }
            //Then store the current
            $fileName = time().'.'.$file->extension();
            $file->move(storage_path('app/public/Partners'),$fileName);
            //$friend->image = $fileName;
            //Update Image name
            $partner->update(['image' => $fileName]);
        }

        $partner->name = $request->input('name');
        $partner->category = $request->input('category');
        $partner->message = $request->input('message');
        $partner->update();
        return redirect()->route('partner.index')->with('status', 'The Partner\'s  Details Has Been Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
