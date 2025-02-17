<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WishlistController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.detail');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/compare', [CompareController::class, 'index'])->name('compare');
Route::middleware('auth')->get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/wishlist/add/{id}', [WishlistController::class, 'store'])->name('wishlist.store');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/compare', [PostController::class, 'compare'])->name('compare');
Route::get('/compare/add/{id}', [PostController::class, 'addToCompare'])->name('compare.add');
Route::delete('/compare/{id}', [PostController::class, 'removeFromCompare'])->name('compare.remove');



Route::get('/tentang-kami', function () {
    return view('informations.about');
})->name('tentang.kami');

Route::get('/informasi-pengiriman', function () {
    return view('informations.delivery');
})->name('informasi.pengiriman');

Route::get('/projek-dukungan', function() {
    return view('informations.project');
})->name('projek.dukungan');

Route::get('/cara-menyewa', function() {
    return view('informations.howrent');
})->name('cara.menyewa');

Route::get('/acara-aviras', function() {
    return view('informations.eventAviras');
})->name('acara.aviras');

Route::get('/hubungi-kami', function() {
    return view('informations.contact');
})->name('hubungi.kami');

Route::get('/pengembalian', function() {
    return view('informations.returns');
})->name('pengembalian');

Route::get('/daftar-keinginan', function() {
    return view('wishlist');
})->name('daftar.keinginan');

