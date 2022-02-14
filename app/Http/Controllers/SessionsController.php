<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }


    public function rules()
    {
        return [
            'u_email' => 'required|email|max:255|exists:users,u_email',
            'password' => 'required|min:7|max:255'
        ];
    }
    public function msgs()
    {
        return [
            'u_email.required' => __("tran.email required"),
            'u_email.max' => __("tran.email max"),
            'u_email.min' => __("tran.email min"),
            'u_email.email' => __("tran.email Field"),
            'u_email.exists' => __("tran.email exists"),
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
                'password' => $request->password,
                'u_email' => $request->u_email,
            ]);

            if (!auth()->attempt($user)) {
                throw ValidationException::withMessages([
                    'password' => __("tran.password wrong")
                ]);
            }
            return redirect(route('index-homePage', app()->getLocale()))->with('success', __("tran.welcom Back"));
        }
    }


    public function destroy()
    {
        auth()->logout();

        return redirect(route('login-page', app()->getLocale()))->with('success', 'Goodbye!');
    }
}
