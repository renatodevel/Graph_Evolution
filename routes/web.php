<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\admin\AdminController;
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



  Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/services', 'services')->name('services');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});


Route::controller(AdminController::class)->group(function () {
  Route::get('/admin', 'dashboard');
  Route::get('/admin/pages', 'pages');
  Route::get('/admin/users', 'users');
});
