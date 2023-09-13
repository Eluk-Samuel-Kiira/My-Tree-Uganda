<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userIndex()
    {
        $users = User::whereNot('deleted', 1)->get();
        $number_of_users = $users->count();
        return view('users.index', compact('users','number_of_users'));
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
