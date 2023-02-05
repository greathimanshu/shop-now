<?php

use App\Http\Controllers\Merchant\MerChantController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Merchant\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\GoogleController;
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

Route::get('/', function (Request $request) {
    $userId = $request->user()->id ?? null;
    if ($userId) {
        return redirect()->route('dashboard');
    } else {
        return view('merchant.login');
    }
})->name('/');

Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])->name('login');
Route::get('register', [AdminController::class, 'register']);
Route::post('register', [AdminController::class, 'store'])->name('register-user');

Route::controller(GoogleController::class)->group(function(){
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});


Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin-logout', [AdminController::class, 'logout'])->name('merchant.logout');
    Route::get('dashboard', [MerChantController::class, 'dashboard'])->name('merchant-dashboard');

    //product
    Route::get('/products', [ProductController::class, 'index'])->name('products');
    Route::get('/create-product', [ProductController::class, 'create'])->name('create-product');
    Route::post('/store-product', [ProductController::class, 'store'])->name('store-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
    Route::get('/show-product/{id}', [ProductController::class, 'show'])->name('show-product');
});
