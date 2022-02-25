<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Admin;
// use App\Http\Controllers\Admin\AdminPagesController;
// use App\Http\Controllers\Admin\Blog\BlogController;

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

 // ------------>الانتقال الى الصفحة تسجيل حساب جديد<------------
 Route::get('register', [RegisterController::class, 'create'])->name('register-page')->middleware('guest');
 Route::post('register', [RegisterController::class, 'store'])->name('register-page')->middleware('guest');

 // ------------>الانتقال الى صفحة تسجيل الدخول<------------
 Route::get('login', [SessionsController::class, 'create'])->name('login-page')->middleware('guest');
 Route::post('login', [SessionsController::class, 'store'])->name('login-page')->middleware('guest');
 Route::post('logout', [SessionsController::class, 'destroy'])->name('logout-page')->middleware('auth');
});

// ------------>الانتقال الى الصفحة الادمن وكامل الصلاحيات <------------
Route::middleware('admin')->group(function () {

 Route::get('admin/dash', [
  Admin\AdminPagesController::class, 'admin'
 ])->name('admin-homePage');


 //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Blog <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
 // -----------> add new blog <---------------------------
 Route::get('admin/Add-blog', [Admin\Blog\BlogController::class, 'create'])->name('admin-CreateBlog');
 Route::post('admin/Add-blog', [Admin\Blog\BlogController::class, 'store'])->name('admin-CreateBlog');

 // -----------> edit blog <---------------------------
 Route::get('admin/Edit-blog', [Admin\Blog\BlogController::class, 'EditBlog'])->name('admin-EditBlog');
 Route::get('admin/blogs/edit/{blog}', [Admin\Blog\BlogController::class, 'EditBlogWork'])->name('admin-EditBlog-work');
 Route::patch('admin/blogs/{blog}', [Admin\Blog\BlogController::class, 'UpdateBlog'])->name('admin-UpdateBlog-work');
 Route::delete('admin/blogs/{blog}', [Admin\Blog\BlogController::class, 'DestroyBlog'])->name('admin-DestroyBlog-work');


 // -----------> Add category <---------------------------
 Route::get('admin/add-category', [Admin\Blog\CategoryController::class, 'create'])->name('admin-addcategory');
 Route::post('admin/add-category', [Admin\Blog\CategoryController::class, 'store'])->name('admin-addcategory');

 // -----------> edit category <---------------------------
 Route::get('admin/Edit-category', [Admin\Blog\CategoryController::class, 'EditCategory'])->name('admin-EditCategory');
 Route::get('admin/category/edit/{category}', [Admin\Blog\CategoryController::class, 'EditCategoryWork'])->name('admin-EditCategory-work');
 Route::patch('admin/category/{category}', [Admin\Blog\CategoryController::class, 'UpdateCategory'])->name('admin-UpdateCategory-work');
 Route::delete('admin/category/{category}', [Admin\Blog\CategoryController::class, 'DestroyCategory'])->name('admin-DestroyCategory-work');
});
