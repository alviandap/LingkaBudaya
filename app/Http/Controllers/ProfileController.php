<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $user = auth()->user();

        $rules = [
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255',
            'fotoProfile' => 'image|file|max:2048'
        ];

        $validateddata = $request->validate($rules);

        if ($request->file('fotoProfile')) {
            // if ($request->oldImage) {
            //     Storage::delete($request->oldImage);
            // }
            $validateddata['fotoProfile'] = $request->file('fotoProfile')->store('profile-images');
        }

        $user->update($validateddata);

        return redirect('/editprofile')->with('success', 'Profile Telah TerUpdate');
    }


}
