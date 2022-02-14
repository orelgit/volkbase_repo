<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function rules()
    {
        return [
            'u_name' => 'required|min:3|max:30',
            'u_mobile' => 'required|min:9|numeric',
            'u_email' => 'required|email|max:255|unique:users,u_email',
            //'u_photo' => 'image',
            'password' => 'required|min:7|max:255'
        ];
    }
    public function msgs()
    {
        return [
            'u_name.required' => __("tran.name required"),
            'u_name.max' => __("tran.name max"),
            'u_name.min' => __("tran.name min"),
            'u_mobile.required' => __("tran.moblie required"),
            'u_mobile.max' => __("tran.mobile max"),
            'u_mobile.min' => __("tran.mobile min"),
            'u_mobile.numeric' => __("tran.mobile numeric"),
            'u_email.required' => __("tran.email required"),
            'u_email.max' => __("tran.email max"),
            'u_email.min' => __("tran.email min"),
            'u_email.email' => __("tran.email Field"),
            'u_email.unique' => __("tran.email unique"),
            'password.required' => __("tran.password required"),
            'password.max' => __("tran.password max"),
            'password.min' => __("tran.password min")
        ];
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $user = ([
                'u_name' => $request->u_name,
                'u_mobile' => $request->u_mobile,
                'password' => $request->password,
                'u_photo' => $request->u_photo,
                'u_email' => $request->u_email,
                'ut_id' => 1,
            ]);
            // log in 
            auth()->login(User::create($user));
        }



        return redirect(route('index-homePage', app()->getLocale()))->with('success', __("tran.success"));
    }
}
