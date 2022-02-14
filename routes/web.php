<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Models\User;
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

route::redirect('/', '/en');

Route::group(['prefix' => '{lang}'], function () {
 // ------------>الانتقال الى الصفحة الرئيسية<------------
 Route::get('/', [HomeController::class, 'index'])->name('index-homePage');
 // ------------>الانتقال الى الصفحة البلوق<------------
 Route::get('blog', [HomeController::class, 'blog'])->name('blog-homePage');

 // ------------>الانتقال الى الصفحة الادمن فقط للتجريب حاليا<------------
 Route::get('admin', [HomeController::class, 'admin'])->name('admin-homePage');

 // ------------>الانتقال الى الصفحة تسجيل حساب جديد<------------
 Route::get('register', [RegisterController::class, 'create'])->name('register-page')->middleware('guest');
 Route::post('register', [RegisterController::class, 'store'])->name('register-page')->middleware('guest');

 // ------------>الانتقال الى صفحة تسجيل الدخول<------------
 Route::get('login', [SessionsController::class, 'create'])->name('login-page')->middleware('guest');
 Route::post('login', [SessionsController::class, 'store'])->name('login-page')->middleware('guest');
 Route::post('logout', [SessionsController::class, 'destroy'])->name('logout-page')->middleware('auth');
});
