<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{

    // يسمح بدخول الادمن فقط
    public function admin()
    {
        return view('admin.index');
    }
}
