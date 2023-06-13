<?php

use App\Models\Category;
use App\Models\ratingStar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardTestiController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\ratingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/login-register', function () {
    return view('logReg', [
        "title" => "Login Register"
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/testi', function () {
    return view('review', [
        "title" => "Testimonials",
        "ratingStar" => ratingStar::latest()->get()
    ]);
});



Route::get('/edit', [ProfileController::class, 'index']);
Route::post('/edit', [ProfileController::class, 'update']);

Route::put('/updatepassword', [UpdatePasswordController::class, 'update']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Post Categories',
    ]);
})->middleware('auth');


Route::get('/testimonials', [ratingController::class, 'index'])->middleware('auth');
Route::post('/testimonials', [ratingController::class, 'store'])->middleware('auth');


Route::get('/posts', [PostController::class, 'index'])->middleware('auth');
Route::get('posts/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/categories', function () {
    return view('categorys', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');

route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
        'gambar' => $category->gambar,
        'quote' => $category->quotes,
        'kuis' => $category->quiz
    ]);
})->middleware('auth');



Route::get('/admin', function () {
    return view('admin.index');
})->middleware('admin');

Route::get('/admin/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');
Route::resource('/admin/posts', DashboardPostController::class)->middleware('admin');

Route::resource('/admin/categories', DashboardCategoryController::class)->middleware('admin');
Route::get('/admin/categories/checkSlug', [DashboardCategoryControllerr::class, 'checkSlug'])->middleware('admin');

// Route::resource('/admin/testi', DashboardTestiController::class)->middleware('admin');

Route::get('/admin/testi', [DashboardTestiController::class, 'index'])->middleware('auth');
Route::delete('/admin/testi/{id}', [DashboardTestiController::class, 'delete'])->middleware('auth');