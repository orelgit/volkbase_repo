<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Blog;

class BlogController extends Controller
{

    // Showing the blog page
    public function ShowBlogPage()
    {
        return view('landingPages.blog', [
            'blogs' => Blog::latest()->filter(
                request(['category'])
            )->paginate(18)->withQueryString()
        ]);
    }


    //////////> Admin work with blog <////////////  
    public function create()
    {
        return view('admin.blog.addpost');
    }

    public function rules()
    {
        return [
            'b_blog' => 'required',
            'b_title' => 'required',
            'b_img' => 'image|required',
            'c_id' => 'required',
        ];
    }
    public function msgs()
    {
        return [
            'b_blog.required' => 'ادخل المحتوى',
            'b_title.required' => 'ادخل العنوان',
            'b_img.required' => ' يجب اعادة اختيار صورة جديدة او نفسها',
            'b_img.image' => 'يجب ان يكون الملف صورة',
            'c_id.required' => 'ادخل الفئة',
        ];
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {

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
        // go to edit page
        return view('admin.blog.editpost', [
            'blogs' => Blog::latest()->paginate(50)
        ]);
    }


    public function EditBlogWork(Blog $blog)
    {
        // do edit work
        return view('Admin.Blog.editblogwork', ['blog' => $blog]);
    }


    // update
    public function UpdateBlog(Request $request, Blog $blog)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {

            return back()->withErrors($valid)->withInput($request->all());
        } else {
            // here
            $imgBlog = $blog['b_img'];
            if ($imgBlog = $request->file('b_img')) {

                $imgBlog = request()->file('b_img')->store('Blogimg');
            } else {

                $imgBlog =  $request->b_img;
            }
            $blog->update([
                'b_blog' => $request->b_blog,
                'b_title' => $request->b_title,
                'b_img' => $imgBlog,
                'u_id' =>  auth()->user()->u_id,
                'c_id' => $request->c_id,
            ]);
        }

        return back()->with('success', 'تم تحديث المقالة بنجاح');
    }
    public function DestroyBlog(Blog $blog)
    {

        $blog->delete();
        return back()->with('success', 'تم حذف المقالة بنجاح');
    }
}
