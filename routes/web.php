<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

require __DIR__.'/auth.php';




Route::controller(PostController::class)->middleware('auth')->group(function(){
  Route::get('/',  'index')->name('home');
  Route::get('/p/create',  'create')->name('create_post');
  Route::post('/p/create',  'store')->name('store_post');
  Route::get('/p/{post:slug}',  'show')->name('show_post');
  Route::get('/p/{post:slug}/edit',  'edit')->name('edit_post');
  Route::patch('/p/{post:slug}/update',  'update')->name('update_post');
  Route::delete('/p/{post:slug}/delete',  'destroy')->name('delete_post');
});
Route::get('/explore', [PostController::class, 'explore'] )->name('explore');

Route::get('/{user:username}', [UserController::class, 'index'] )->name('user_profile');
Route::get('/{user:username}/edit', [UserController::class, 'edit'] )->middleware('auth')->name('edit_user_profile');
Route::patch('/{user:username}/update', [UserController::class, 'update'] )->middleware('auth')->name('update_profile');
// Route::get('/{user:username}/follow', [UserController::class, 'follow'])->middleware('auth')->name('follow_user');
// Route::get('/{user:username}/unfollow', [UserController::class, 'unfollow'])->middleware('auth')->name('unfollow_user');

Route::post('/p/{post:slug}/comment', [CommentController::class, 'store'])->name('post_comment')->middleware('auth');
// Route::get('/p/{post:slug}/like' )->middleware('auth');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

