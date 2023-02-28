<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

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

//Praktikum1

// Route::get('/', function () {
//     echo "selamat datang";
// });

// Route::get('/about', function (){
//     echo "2141720225 Muhammad Akbar Nur Ihsan";
// });

// Route::get('/articles/{id}', function ($id){
//     return "Halaman Artikel dengan ID ".$id;
// });

//Praktikum2

// Route::get('/',[PageController::class,'index']);

// Route::get('/about',[PageController::class,'about']);

// Route::get('/articles/{id}',[PageController::class,'articles']);

//Praktikum3

//no1
Route::get('/home', function () {
    echo "Menampilkan halaman awal website";
});

//no2
Route::prefix('category')->group(function() {
    Route::get('/edu', [PageController::class,'edu']);
    Route::get('/game', [PageController::class,'kidsGame']);
    Route::get('/story', [PageController::class,'story']);
    Route::get('/songs', [PageController::class,'songs']);
});

//no3
Route::get('/news/{name?}',function($name = null){
    return "Berita kali ini membahas tentang ".$name;
});

//no4
Route::prefix('program')->group(function() {
    Route::get('/karir', [PageController::class,'karir']);
    Route::get('/magang', [PageController::class,'magang']);
    Route::get('/kunjungan', [PageController::class,'kunjungan']);
});

//no5
Route::get('/about-us', function () {
    echo "ABOUT US";
});

//no6
Route::resource('contact-us', ContactController::class)->only(['show']);





