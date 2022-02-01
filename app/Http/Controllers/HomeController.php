<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // الانتقال الى الصفحة الرئيسية
    public function index()
    {
        return view('home.index');
    }

    // الانتقال الى صفحة البلوق
    public function blog()
    {
        return view('blog.home');
    }

    // الانتقال الى صفحة الادمن فقط للتجريب حاليا
    public function admin()
    {
        return view('admin.index');
    }
}
