<?php

namespace App\Http\Controllers;

use App\Models\ratingStar;
use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function index()
    {
        return view('testimonials', [
            "title" => "testimonials",
            "ratingStar" => ratingStar::all()
        ]);
    }

    public function store(Request $request)
    {
        // return $request;
        $validateddata = $request->validate([
            'name' => 'required|min:3|max:255',
            'ratingStar' => 'required|min:1|max:5',
            'comment' => 'required|min:3|max:255',
        ]);
        ratingStar::create($validateddata);
        return redirect('/testimonials')->with('success', 'testimonials sukses');
    }
}