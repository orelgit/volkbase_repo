<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Blog;

class BlogController extends Controller
{

    public function create()
    {
        return view('admin.blog.addpost');
    }

    public function rules()
    {
        return [
            'b_blog' => 'required',
            'b_title' => 'required',
            'b_img' => 'required',
            'c_id' => 'required',
        ];
    }
    public function msgs()
    {
        return [
            'b_blog.required' => 'ادخل المحتوى',
            'b_title.required' => 'ادخل العنوان',
            'b_img.required' => 'ادخل الصورة',
            'c_id.required' => 'ادخل الفئة',
        ];
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $blog = Blog::create([
                'b_blog' => $request->b_blog,
                'b_title' => $request->b_title,
                'b_img' => request()->file('b_img')->store('Blogimg'),
                'u_id' =>  auth()->user()->u_id,
                'c_id' => $request->c_id,
            ]);
        }

        return redirect(route('admin-CreateBlog', app()->getLocale()))->with('success', 'تم نشر المقالة بنجاح');
    }
    public function EditBlog()
    {
        return view('admin.blog.editpost');
    }
}
