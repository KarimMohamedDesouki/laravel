<?php

use App\Http\Controllers\PostController;
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

//display all the data
Route ::get('/posts',[PostController::class,'index'])->name('posts.index');



// create post 
//1- show form for creation.
//2- submit form store the data.
Route ::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route ::post('/posts',[PostController::class,'store'])->name('posts.store');

// update post 
//1- show form for edit.
//2- submit form,send data.
Route ::get('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit');
Route ::post('/posts/{id}',[PostController::class,'update'])->name('posts.update');

//display the specific id 
Route ::get('/posts/{id}',[PostController::class,'show'])->name('posts.show')->where('id','[0-9]+');


//delete the id
Route ::delete('/posts/{id}',[PostController::class,'destroy']) ->name('posts.destroy');

//if the route is Unkown
Route::fallback(fn () => 'Error Method not found');
