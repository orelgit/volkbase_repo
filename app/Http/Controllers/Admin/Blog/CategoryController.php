<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.blog.addcategory');
    }

    public function rules()
    {
        return [
            'c_name' => 'required',
        ];
    }
    public function msgs()
    {
        return [
            'c_name.required' => 'ادخل اسم الفئة',
        ];
    }

    public function store(Request $request)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $category = Category::create([
                'c_name' => $request->c_name,
                'c_note' => $request->c_note,
            ]);
        }

        return redirect(route('admin-addcategory', app()->getLocale()))->with('success', 'good category created');
    }
    public function EditCategory()
    {
        // go to edit page
        return view('admin.blog.editcategory', [
            'categores' => Category::paginate(50)
        ]);
    }
    public function EditCategoryWork(Category $category)
    {
        return view('Admin.Blog.editcategorywork', ['category' => $category]);
    }

    // update
    public function UpdateCategory(Request $request, Category $category)
    {
        $valid = Validator::make($request->all(), $this->rules(), $this->msgs());
        if ($valid->fails()) {
            // return 'Error';
            return back()->withErrors($valid)->withInput($request->all());
        } else {
            $category->update([
                'c_name' => $request->c_name,
                'c_note' => $request->c_note,
            ]);
        }

        return back()->with('success', 'تم تحديث الفئة بنجاح');
    }
    public function DestroyCategory(Category $category)
    {
        $category->delete();
        return back()->with('success', 'تم حذف الفئة بنجاح');
    }
}
