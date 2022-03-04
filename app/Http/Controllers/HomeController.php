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

    // الانتقال الى صفحة الخدمات
    public function services()
    {
        return view('indexPages.services');
    }

    // الانتقال الى صفحة الخدمات
    public function contact()
    {
        return view('indexPages.contact');
    }

    // الانتقال الى صفحة الخدمات
    public function about()
    {
        return view('indexPages.about');
    }

    // الانتقال الى صفحة الخدمات
    public function privacy()
    {
        return view('indexPages.privacy');
    }
}
