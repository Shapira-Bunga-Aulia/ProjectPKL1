<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\ShoppingController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
Route::get('/address', [AddressesController::class, 'index'])->name('address.name');
Route::post('/address/store', [AddressesController::class, 'store'])->name('address');
Route::get('/shipping-method', [CheckoutController::class, 'index'])->name('checkouts.index');
// Route::post('/shipping', [CheckoutController::class, 'store'])->name('checkouts.store');
Route::get('/shipping', [ShippingController::class, 'index'])->name('shipping.index');
Route::post('/shipping-store', [ShippingController::class, 'store'])->name('shipping.store');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/payment-store', [PaymentController::class, 'store'])->name('payment.store');

// Route::post('/logout', function (Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();
//     return redirect('/'); // Redirect ke halaman login atau home setelah logout
// })->name('logout');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/register');
})->name('logout');


 

