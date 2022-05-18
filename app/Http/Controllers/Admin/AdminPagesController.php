<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    // يسمح بدخول الادمن فقط
    public function admin()
    {
        // تشغيل العداد اول مايدخل الصفحة الرئيسية
        $posts = Blog::count();
        $users = User::count();
        $lastpost = Blog::first();
        // $mesg = order2::count(); للرسائل حاليا مافيش
        return view('admin.index', compact('posts', 'users', 'lastpost'));
    }
}
