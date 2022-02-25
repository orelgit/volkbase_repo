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
            'c_name.required' => 'enter the name',
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
        return view('admin.blog.editcategory');
    }
}
