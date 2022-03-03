@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-5 mt-4 ">
        <h1 class="h3 text-primary">إضافة فئة</h1>
        <a href="/admin/Edit-category" class=" btn btn-primary shadow-sm me-3"> عرض الفئات <i
                class="fas fa-eye fa-sm text-white-50 ms-1"></i></a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mb-3">
            <div class="card bg-white col-10 shadow">
                <div class="card-body">
                    <form method="POST" action="{{ URL::route('admin-addcategory') }}">
                        @csrf
                        {{-- title --}}
                        <div class="mb-3 ">
                            <div class="col-lg-6 col-md-12">
                                <label for="title" class="form-label text-black fs-5 fw-bold">عنوان الفئة</label>
                                <input type="text" class="form-control bg-light" id="title" type="text" name="c_name">
                                @error('c_name')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- note --}}
                        <div class="mb-3">
                            <label for="blog-body" class="form-label text-black fs-5 fw-bold"> ملاحضة</label>
                            <textarea name="c_note" class="form-control bg-light" id="blog-body"></textarea>
                            @error('c_note')
                                <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <div class="col-lg-3 col-md-12 ">
                                <button type="submit" class="btn btn-primary form-control">إضافة</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
