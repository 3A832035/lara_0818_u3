<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', function (){
   return view('welcome');
});

Route::get('posts', [Controllers\IndexController::class, 'index'])->name('posts.index');

Route::get('post', [Controllers\PostController::class, 'index'])->name('posts.post');

Route::get('contact', [Controllers\ContactController::class, 'index'])->name('posts.contact');

Route::get('about', [Controllers\AboutController::class, 'index'])->name('posts.about');
