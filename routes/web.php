<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/sign-up', [AuthController::class, 'signUp'])->name('signUp');
// Route::post('/store-sign-up', [AuthController::class, 'signUpStore'])->name('signUp.store');
// Route::get('/sign-out', [AuthController::class, 'signOut'])->name('signOut');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/hubungi-kami', function(){
    return view('web.contact-us.contact-us');
})->name('contact-us');

Route::get('/tentang-kami', function(){
    return view('web.about-us.about-us');
})->name('about-us');

Route::get('/galeri', [GalleryController::class, 'index'])->name('gallery');
Route::get('/berita', [NewsController::class, 'index'])->name('news');
Route::get('/berita/{slug}', [NewsController::class, 'detail'])->name('news.detail');

Route::get('/zakat', function(){return view('web.program.zakat.zakat');})->name('zakat');
Route::get('/donasi', function(){return view('web.program.donasi.donasi');})->name('donasi');
Route::get('/qurban', function(){return view('web.program.qurban.qurban');})->name('qurban');

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login-store', [AuthController::class, 'loginStore'])->name('login.store');
    Route::get('/sign-out', [AuthController::class, 'signOut'])->name('signOut');
    
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/blog', BlogController::class);
    Route::resource('/gallery', AdminGalleryController::class);
    Route::resource('/news', AdminNewsController::class);

});