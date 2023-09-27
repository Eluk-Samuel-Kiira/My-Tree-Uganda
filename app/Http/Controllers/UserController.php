<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userIndex()
    {
        return view('users.index');
    }

    public function userDestroy(Request $request)
    {
        User::where('id', $request->id)->update(['deleted' => 1]);
        return redirect()->back()->with('status', 'The User Has Been Deleted Successfully');

    }

    public function accountStatus()
    {
        return view('users.account');
    }

}
