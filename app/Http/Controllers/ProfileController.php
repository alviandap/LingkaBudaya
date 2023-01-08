<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile', [
            'title' => 'Profile',
        ]);
    }

    public function update(Request $request)
    {

        $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
        ]);

        $user = auth()->user();
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email

        ]);

        return redirect('/editprofile')->with('success', 'Profile tlah TerUpdate');
    }


}
