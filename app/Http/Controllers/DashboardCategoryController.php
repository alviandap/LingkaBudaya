<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('admin.category.index', [
            'categories' => Category::all()
            // 'categories' => Category::all()->orderBy('name', 'asc')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) 
    {
        $validateddata = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'gambar' => 'image|file|max:1024',
            'quotes' => 'required',
            'quiz' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validateddata['gambar'] = $request->file('gambar')->store('category-images');
        }

        Category::create($validateddata);
        return redirect('/admin/categories')->with('success', 'new post has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // return view('admin.showCat', [
        //     'category' => $category,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', [
            'category' => $category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules= [
            'name' => 'required|max:255',
            'gambar' => 'image|file|max:1024',
            'quotes' => 'required',
            'quiz' => 'required'
        ];
        

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:category';
        }

        $validateddata = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateddata['gambar'] = $request->file('gambar')->store('category-images');
        }

        Category::where('id', $category->id)
            ->update($validateddata);
        return redirect('/admin/categories')->with('success', 'Post has been Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if ($category->gambar) {
            Storage::delete($category->gambar);
        }
        Category::destroy($category->id);
        return redirect('/admin/categories')->with('success', 'post has been delete');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
