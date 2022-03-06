<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // الانتقال الى الصفحة الرئيسية
    public function index()
    {
        return view('landingPages.index');
    }

    // الانتقال الى صفحة البلوق
    public function blog()
    {
        return view('landingPages.blog');
    }

    // الانتقال الى صفحة الخدمات
    public function services()
    {
        return view('landingPages.services');
    }

    // الانتقال الى صفحة الخدمات
    public function contact()
    {
        return view('landingPages.contact');
    }

    // الانتقال الى صفحة الخدمات
    public function about()
    {
        return view('landingPages.about');
    }

    // الانتقال الى صفحة الخدمات
    public function privacy()
    {
        return view('landingPages.privacy');
    }
}
