@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid ">

        <!-- Page Heading -->
        <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">إضافة مقالة</h1>
            <a href="/admin/Edit-blog" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> جدول المقالات</a>
        </div> <!-- Blog form -->
        <div class="row d-flex justify-content-center">
            <form method="POST" action="{{ URL::route('admin-CreateBlog') }}" enctype="multipart/form-data"
                class="p-5 col-10 border " style="direction: rtl">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">العنوان</label>
                    <div class="col-sm-10">
                        <input type="text" name="b_title" class="form-control" id="title">
                        @error('b_title')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="blog-body" class="col-sm-2 col-form-label text-primary">المحتوى</label>
                    <div class="col-sm-10">
                        <textarea name="b_blog" class="form-control" id="blog-body"></textarea>
                        @error('b_blog')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="blog-img" class="col-sm-2 col-form-label text-primary">الصورة</label>
                    <div class="col-sm-10">
                        <input type="file" name="b_img" class="form-control" id="blog-img">
                        @error('b_img')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label text-primary">الفئة</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="category " name="c_id">
                            @php
                                $categores = \App\Models\Category::all();
                            @endphp
                            @foreach ($categores as $category)
                                <option value="{{ $category->c_id }}">{{ $category->c_name }}</option>
                            @endforeach


                        </select>
                        @error('c_id')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="form-group row" style="direction: ltr">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary form-control">نشر</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
