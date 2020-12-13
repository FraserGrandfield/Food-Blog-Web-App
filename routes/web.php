<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('posts');
});

Route::get('posts', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');

Route::post('posts', [PostController::class, 'store'])->middleware('auth')->name('posts.store');

Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('profile/{id}/edit', [UserController::class, 'edit'])->middleware('check_user')->name('user.edit');

Route::get('profile/{id}', [UserController::class, 'show'])->name('user.show');

Route::post('profile/{id]', [UserController::class, 'update'])->name('user.update');

require __DIR__.'/auth.php';
