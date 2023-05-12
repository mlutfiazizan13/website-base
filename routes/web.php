<?php

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

Route::get('/', function () {
    return view('web.home');
});

Route::get('/contact-us', function(){
    return view('web.contact-us.contact-us');
});

Route::get('/about-us', function(){
    return view('web.about-us.about-us');
});

Route::get('/project', function(){
    return view('web.project.project');
});

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    });
});