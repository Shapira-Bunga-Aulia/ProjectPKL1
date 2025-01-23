<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShoppingController;

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

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
*/

Route::get('/', [PostController::class, 'index'])->name('home'); // Mengarahkan ke controller untuk menampilkan data produk
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create'); // Menampilkan form create
Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Proses penyimpanan data
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.detail');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('registrasi');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'loginAuth'])->name('loginAuth');
Route::get('/shopping', [ShoppingController::class, 'index'])->name('shopping');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('co');





