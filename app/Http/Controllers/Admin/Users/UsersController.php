<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UsersController extends Controller
{
    // الذهاب الى واجهه ال
    public function create()
    {
        return view('admin.users.adduser');
    }

    public function rules()
    {
        return [
            'u_name' => 'required|min:3|max:30',
            'u_mobile' => 'required|min:9|numeric',
            'u_email' => 'required|email|max:255|unique:users,u_email',
            //'u_photo' => 'image',
            'password' => 'required|min:7|max:255',
            'ut_id' => 'required'
        ];
    }
    public function msgs()
    {
        return [
            'u_name.required' => 'يرجى ادخال الاسم',
            'u_name.max' => 'يجب أن يتكون اسمك من ثلاثة أحرف على الاقل ',
            'u_name.min' => 'يجب أن يتكون اسمك اقل من ثلاثين حرفًا',
            'u_mobile.required' => 'يرجى إدخال رقم الهاتف الخاص بك',
            'u_mobile.max' => 'يجب أن يتكون رقمك من 9 أرقام',
            'u_mobile.min' => 'يجب أن يتكون رقمك من 9 أرقام',
            'u_mobile.numeric' => 'يجب أن يحتوي هذا الحقل على أرقام فقط',
            'u_email.required' => 'رجاءا أدخل بريدك الإلكتروني',
            'u_email.max' => 'يجب أن يتكون بريدك الإلكتروني من أقل من 250 حرفًا',
            'u_email.min' => 'يجب أن يتكون بريدك الإلكتروني من عشرة أحرف',
            'u_email.email' => 'يجب أن يكون هذا الحقل بريدًا إلكترونيًا',
            'u_email.unique' => 'البريد الالكتروني الذي ادخلته خاطى',
            'password.required' => 'من فضلك أدخل رقمك السري',
            'password.max' => 'يجب أن تتكون كلمة المرور الخاصة بك من أقل من 250 حرفًا',
            'password.min' => 'يجب أن تتكون كلمة المرور الخاصة بك من 7 أحرف',
            'ut_id.required' => 'ادخل النوع'
        ];
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $user = User::create([
                'u_name' => $request->u_name,
                'u_mobile' => $request->u_mobile,
                'password' => $request->password,
                'u_photo' => request()->file('u_photo')->store('Usersimg'),
                'u_email' => $request->u_email,
                'ut_id' => $request->ut_id,
            ]);
        }
        return back()->with('success', 'تم إضافة المستخدم بنجاح');
    }
    public function EditUser()
    {
        // go to edit page
        return view('admin.Users.edituser', [
            'users' => User::paginate(50)
        ]);
    }
    public function EditUserWork(User $user)
    {
        // do edit work
        return view('Admin.Users.edituserwork', ['user' => $user]);
    }



    // update user
    public function UpdateUser(Request $request, User $user)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $user->update([
                'u_name' => request()->u_name,
                'u_mobile' => request()->u_mobile,
                'ut_id' => request()->ut_id,
            ]);
        }

        return back()->with('success', 'تم تحديث المستخدم بنجاح');
    }
    public function DestroyUser(User $user)
    {
        $user->delete();
        return back()->with('success', 'تم حذف المستخدم بنجاح');
    }
}
