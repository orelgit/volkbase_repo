@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-5 mt-4 ">
        <h1 class="h3 text-primary">إضافة مقالة</h1>
        <a href="/admin/Edit-blog" class=" btn btn-primary shadow-sm me-3"> عرض المقالات <i
                class="fas fa-eye fa-sm text-white-50 ms-1"></i></a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mb-3">
            <div class="card bg-white col-10 shadow">
                <div class="card-body">
                    <form method="POST" action="{{ URL::route('admin-CreateBlog') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- title --}}
                        <div class="mb-3 ">
                            <div class="col-lg-6 col-md-12">
                                <label for="title" class="form-label text-black fs-5 fw-bold">عنوان المقالة</label>
                                <input type="text" class="form-control bg-light" id="title" type="text" name="b_title">
                                @error('b_title')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>


                        {{-- img --}}
                        <div class="mb-3">
                            <div class="col-lg-6 col-md-12">
                                <label for="blog-img" class="form-label text-black fs-5 fw-bold">صورة المقالة</label>
                                <input class="form-control bg-light" type="file" name="b_img" id="blog-img">
                                @error('b_img')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- category --}}
                        <div class="mb-3">
                            <div class="col-lg-6 col-md-12">
                                <label for="category" class="form-label text-black fs-5 fw-bold">فئة المقالة</label>

                                <select class="form-control form-select bg-light " id="category " name="c_id">
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

                        {{-- body --}}
                        <div class="mb-3">
                            <label for="blog-body" class="form-label text-black fs-5 fw-bold">محتوى المقالة</label>
                            <textarea name="b_blog" class="form-control bg-light" id="blog-body"></textarea>
                            @error('b_blog')
                                <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <div class="col-lg-3 col-md-12 ">
                                <button type="submit" class="btn btn-primary form-control">نشر</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
