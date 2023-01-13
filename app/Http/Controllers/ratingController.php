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
            "ratingStar" => ratingStar::latest()->get()
        ]);
    }

    public function store(Request $request)
    {
        // return $request;
        $validateddata = $request->validate([
            'name' => 'required|min:3|max:255',
            'ratingStar' => 'required',
            'comment' => 'required|min:3|max:255',
        ]);
        ratingStar::create($validateddata);
        return redirect('/testimonials')->with('success', 'testimonials telah sukses ditambahkan');
    }
}