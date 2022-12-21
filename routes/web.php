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
    return view('welcome');
});
//Blog Post Router
Route::get('/blog',[\App\Http\Controllers\BlogPostController::class,'index']);

//Single Blog Post
Route::get('/blog/{blogPost}',[\App\Http\Controllers\BlogPostController::class,'show']);

// only authenticated users can use the routes in this group
Route::group(['middleware' => 'auth'], function() {

Route::get('/blog/create/post',[\App\Http\Controllers\BlogPostController::class,'create']);
Route::post('/blog/create/post',[\App\Http\Controllers\BlogPostController::class,'store']);
Route::get('/blog/{blogPost}/edit',[\App\Http\Controllers\BlogPostController::class,'edit']);
Route::put('/blog/{blogPost}/edit',[\App\Http\Controllers\BlogPostController::class,'update']);
Route::delete('/blog/{blogPost}',[\App\Http\Controllers\BlogPostController::class,'destroy']);
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
