@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid ">

        <!-- Page Heading -->
        <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">إضافة فئة</h1>
            <a href="/admin/Edit-category" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> جدول الفئات</a>
        </div> <!-- Blog form -->
        <div class="row d-flex justify-content-center">
            <form method="POST" action="{{ route('admin-UpdateCategory-work', $category->c_id) }}"
                class="p-5 col-10 border " style="direction: rtl">
                @csrf
                @method('PATCH')
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">العنوان</label>
                    <div class="col-sm-10">
                        <input type="text" name="c_name" value="{{ $category->c_name }}" class="form-control"
                            id="title">
                        @error('c_name')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>

                </div>
                <div class="form-group row">
                    <label for="blog-body" class="col-sm-2 col-form-label text-primary">ملاحضة</label>
                    <div class="col-sm-10">
                        <textarea name="c_note" class="form-control" id="blog-body">{{ $category->c_note }}</textarea>
                    </div>
                </div>

                <div class="form-group row" style="direction: ltr">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary form-control">إضافة</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
