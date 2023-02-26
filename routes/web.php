<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Redirect;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, ('index')]);

Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, ('product1')]);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, ('product2')]);
    Route::get('/riri-story-books', [ProductController::class, ('product3')]);
});

Route::prefix('/news')->group(function (){
    Route::get('/', function (){
        return "Ini halaman untuk Berita";
    });
    Route::get('/{newsTittle}', [NewsController::class, ('artikel')]);
});

Route::prefix('/category')->group(function () {
    Route::get('/karir', [ProgramController::class, ('program1')]);
    Route::get('/magang', [ProgramController::class, ('program2')]);
    Route::get('/kunjungan-industri', [ProgramController::class, ('program3')]);
});

Route::get('about-us', [HomeController::class, ('about')]);

Route::resource('contact-us', ContactController::class);
