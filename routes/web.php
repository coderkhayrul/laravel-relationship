<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('post', [PostController::class, 'index'])->name('post.index');
Route::get('post/insert', [PostController::class, 'insert'])->name('post.insert');


Route::get('tag', [TagController::class, 'index'])->name('tag.insert');
Route::get('tag/delete', [TagController::class, 'delete'])->name('tag.delete');
