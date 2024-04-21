<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('home', [
        "title" => 'Home',
        "active" => "home"
    ]);
    // return 'Halaman Home';
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "active" => "about",
        "name" => "Ahmad Hamid Balya",
        "email" => "ahmadhamidbalya@students.unnes.ac.id",
        "image" => "profile.JPG"
    ]);
    // return 'Halaman About';
});


Route::get('/posts', [PostController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// Route::get('/categories', function(){
    // return view('categories', [
    //     'title'=>'Post Categories',
    //     'active'=>'categories',
    //     'categories'=>Category::all()
    // ]);
// });
Route::get('/categories', [CategoryController::class, 'index']);

// Route::get('/categories/{category:slug}', function(Category $category){
    // return view('posts', [
    //     'title'=>"Post by Category : $category->name",
    //     'active'=>'categories',
    //     'posts'=>$category->posts->load('author', 'category')
    // ]);
// });

// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

// Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', fn()=>view('dashboard.index'))->middleware('auth');

Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
// Route::get('/dashboard/posts/{post:slug}', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
// Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show');
