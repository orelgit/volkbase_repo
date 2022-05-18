<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Blog;


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


// ------------>الانتقال الى الصفحة حسب الفئة<------------

// Route::get('blog/{category}', [Admin\Blog\BlogController::class, 'ShowBlogPage'])->name('blog-homePage');

// Route::get('category/{category}', function (Blog $blog) {
//  return view('landingPages.blog', [
//   'blog' => '$blog'
//  ]);
// });

Route::group(['prefix' => '{lang}'], function () {
 // ------------>الانتقال الى الصفحة الرئيسية<------------
 Route::get('/', [HomeController::class, 'index'])->name('index-homePage');

 // ------------>الانتقال الى الصفحة البلوق<------------
 Route::get('blog', [Admin\Blog\BlogController::class, 'ShowBlogPage'])->name('blog-homePage');



 // ------------>الانتقال الى الصفحة الخدمات<------------
 Route::get('services', [HomeController::class, 'services'])->name('services-homePage');

 // ------------>الانتقال الى الصفحة تواصل معنا<------------
 Route::get('contact', [HomeController::class, 'contact'])->name('contact-homePage');

 // ------------>الانتقال الى الصفحة تواصل معنا<------------
 Route::get('about', [HomeController::class, 'about'])->name('about-homePage');

 // ------------>الانتقال الى الصفحة تواصل معنا<------------
 Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy-homePage');

 // ------------>الانتقال الى الصفحة تسجيل حساب جديد<------------
 Route::get('register', [RegisterController::class, 'create'])->name('register-page')->middleware('guest');
 Route::post('register', [RegisterController::class, 'store'])->name('register-page')->middleware('guest');

 // ------------>الانتقال الى صفحة تسجيل الدخول<------------
 Route::get('v_login_admin', [SessionsController::class, 'create'])->name('login-page')->middleware('guest');
 Route::post('v_login_admin', [SessionsController::class, 'store'])->name('login-page')->middleware('guest');
 Route::post('logout', [SessionsController::class, 'destroy'])->name('logout-page')->middleware('auth');
});

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> ADMIN <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
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

 //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> users <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

 // -----------> Add user <---------------------------
 Route::get('admin/add-user', [Admin\Users\UsersController::class, 'create'])->name('admin-adduser');
 Route::post('admin/add-user', [Admin\Users\UsersController::class, 'store'])->name('admin-adduser');
 // -----------> edit user <---------------------------
 Route::get('admin/Edit-user', [Admin\Users\UsersController::class, 'EditUser'])->name('admin-EditUser');
 Route::get('admin/user/edit/{user}', [Admin\Users\UsersController::class, 'EditUserWork'])->name('admin-EditUser-work');
 Route::patch('admin/user/{user}', [Admin\Users\UsersController::class, 'UpdateUser'])->name('admin-UpdateUser-work');
 Route::delete('admin/user/{user}', [Admin\Users\UsersController::class, 'DestroyUser'])->name('admin-DestroyUser-work');

 //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> profile <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<

 Route::get('admin/user/profile', [Admin\Users\UsersController::class, 'ShowProfile'])->name('admin-ShowProfile');
 Route::get('admin/edit/profile/{user}', [Admin\Users\UsersController::class, 'EditProfile'])->name('admin-EditProfile');
 Route::patch('admin/edit/profile/{user}', [Admin\Users\UsersController::class, 'UpdateProfile'])->name('admin-UpdateProfile');
});
