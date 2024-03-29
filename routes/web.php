<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\TontonController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [BerandaController::class, 'index']);
Route::get('/admin', [ProductController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authentication');
});
// route group prefix untuk awalan url yang sama seperti 'admin/users' atau 'admin/posts'
// route group controller untuk route yang menggunakan controler yang sama


Route::resource('genre', GenreController::class);
Route::resource('product', ProductController::class);


// Route::get('/show/{product}', [TontonController::class, 'show'])->name('show');
