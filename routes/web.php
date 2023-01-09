<?php

use App\Http\Controllers\DashboardPostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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



Route::get('/editprofile', [ProfileController::class, 'index']);
Route::post('/editprofile', [ProfileController::class, 'update']);


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categorys', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
        'quote' => $category->quotes,
        'kuis' => $category->quiz
    ]);
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/admin/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/posts', DashboardPostController::class);