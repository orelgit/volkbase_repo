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

    public function rules(){
        return [
            'u_name' => 'required|min:3|max:30',
            'u_mobile' => 'required|min:9|numeric',
            'u_email' => 'required|email|max:255|unique:users,u_email',
            //'u_photo' => 'image',
            'u_pass' => 'required|min:7|max:255'
        ];
    }
    public function msgs(){
        return [
            'u_name.required'=>'الحقل مطلوب',
            'u_name.max'=>'لا يمكنك إدخال اكثر من 30 حرف',
            'u_name.min'=>'لا يمكنك إدخال اقل من 3 أحرف',
            'u_mobile.required'=>'الحقل مطلوب',
            'u_mobile.max'=>'لا يمكنك إدخال اكثر من 9 حرف',
            'u_mobile.min'=>'لا يمكنك إدخال اقل من 9 أحرف',
            'u_email.required'=>'الحقل مطلوب',
            'u_email.max'=>'لا يمكنك إدخال اكثر من 255 حرف',
            'u_email.min'=>'لا يمكنك إدخال اقل من 10 أحرف',
            'u_pass.required'=>'الحقل مطلوب',
            'u_pass.max'=>'لا يمكنك إدخال اكثر من 255 حرف',
            'u_pass.min'=>'لا يمكنك إدخال اقل من 7 أحرف'
        ];
    }

    public function store(Request $request)
    {
        // return request()->all();
        // var_dump(request()->all);

        // $attributes = request()->validate([
        //     'u_name' => 'required|min:3|max:255|unique:users,u_name',
        //     'u_mobile' => 'required|min:9|max:10|numeric',
        //     'u_email' => 'required|email|max:255|unique:users,u_email',
        //     'u_photo' => 'image',
        //     'u_pass' => 'required|min:7|max:255|current_password',
        //     'sure_pass' => 'required|confirmed',
        // ]);

        //auth()->login(User::create($attributes));

        $valid = Validator::make($request->all(),$this->rules(),$this->msgs());
        if($valid->fails()){
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        }else{
            User::create([
                'u_name' => $request->u_name,
                'u_mobile' => $request->u_mobile,
                'u_pass' => Hash::make($request->u_pass),
                'u_photo' => $request->u_photo,
                'u_email' => $request->u_email,
                'ut_id' => 1,
            ]);
        }

        return back()->with('success', 'Your account has been created.');
    }
}
