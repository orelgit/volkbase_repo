@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid ">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800"> إضافة فئة </h1>
        <!-- Blog form -->
        <div class="row d-flex justify-content-center">
            <form method="POST" action="{{ URL::route('admin-addcategory') }}" class="p-5 col-10 border "
                style="direction: rtl">
                @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">العنوان</label>
                    <div class="col-sm-10">
                        <input type="text" name="c_name" class="form-control" id="title">
                    </div>
                    @error('c_name')
                        <h3 class="error-msg"> <i class="fas fa-times"></i> {{ $message }}</h3>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="blog-body" class="col-sm-2 col-form-label text-primary">ملاحضة</label>
                    <div class="col-sm-10">
                        <textarea name="c_note" class="form-control" id="blog-body"></textarea>
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
