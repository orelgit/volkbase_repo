<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // return request()->all();
        // var_dump(request()->all);

        $attributes = request()->validate([
            'u_name' => 'required|min:3|max:255|unique:users,u_name',
            'u_mobile' => 'required|min:9|max:10|numeric',
            'u_email' => 'required|email|max:255|unique:users,u_email',
            'u_photo' => 'image',
            'u_pass' => 'required|min:7|max:255|current_password',
            'sure_pass' => 'required|confirmed',
        ]);


        auth()->login(User::create($attributes));

        dd('success', 'Your account has been created.');
    }
}
