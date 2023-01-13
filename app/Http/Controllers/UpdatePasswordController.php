<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation;

class UpdatePasswordController extends Controller
{
    public function update(Request $request){

        $user = auth()->user();

        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:6|max:30|confirmed',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => Hash::make($request->password)]);
            return redirect('/editprofile')->with('success', 'Your password has been update');
        }
    }
}
