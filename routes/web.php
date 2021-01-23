<?php

use Illuminate\Support\Facades\Route;

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
    return view('front.home');
});
Route::get('/rate', [App\Http\Controllers\Front\PageController::class, 'about'])->name('about');
Route::get('/portfolio', [App\Http\Controllers\Front\PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [App\Http\Controllers\Front\PageController::class, 'blog'])->name('blog');
Route::get('/blog_detail/{id}/{title}', [App\Http\Controllers\Front\PageController::class, 'blog_detail'])->name('blog_detail');
Route::get('/contact', [App\Http\Controllers\Front\PageController::class, 'contact'])->name('contact');

Route::post('contact_comment', [App\Http\Controllers\Back\ContactController::class, 'store'])->name('contact_comment');
Route::post('blog_comment', [App\Http\Controllers\Back\CommentController::class, 'store'])->name('blog_comment');

Route::any('/search', [App\Http\Controllers\Front\PageController::class, 'search'])->name('search');

// Ajax
Route::get('/load_portfolio', [App\Http\Controllers\Front\PageController::class, 'load_portfolio'])->name('load_portfolio');
Route::get('/load_blog', [App\Http\Controllers\Front\PageController::class, 'load_blog'])->name('load_blog');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('Admin/Comment', App\Http\Controllers\Back\CommentController::class)->middleware('auth');
Route::resource('Admin/Logo', App\Http\Controllers\Back\LogoController::class)->middleware('auth');
Route::resource('Admin/Slider', App\Http\Controllers\Back\SliderController::class)->middleware('auth');
Route::resource('Admin/Contact', App\Http\Controllers\Back\ContactController::class)->middleware('auth');
Route::resource('Admin/Blog', App\Http\Controllers\Back\BlogController::class)->middleware('auth');
Route::resource('Admin/blog_tags', App\Http\Controllers\Back\BlogCategoryController::class)->middleware('auth');
Route::resource('Admin/Portfolio', App\Http\Controllers\Back\PortfolioController::class)->middleware('auth');
Route::resource('Admin/Portfolio_category', App\Http\Controllers\Back\PortfolioCategoryController::class)->middleware('auth');