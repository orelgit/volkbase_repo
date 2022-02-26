@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid ">

        <!-- Page Heading -->
        <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">إضافة مستخدم</h1>
            <a href="/admin/Edit-user" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> جدول المستخدمين</a>
        </div> <!-- users form -->



        <div class="row d-flex justify-content-center">
            <form method="POST" action="{{ URL::route('admin-adduser') }}" enctype="multipart/form-data"
                class="p-5 col-10 border " style="direction: rtl">
                @csrf

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">الاسم</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="u_name" class="form-control">

                        @error('u_name')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>

                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">رقم الهاتف</label>
                    <div class="col-sm-10">
                        <input type="text" id="number" name="u_mobile" class="form-control">
                        @error('u_mobile')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">البريد الالكتروني</label>
                    <div class="col-sm-10">
                        <input type="email" id="email" name="u_email" class="form-control">
                        @error('u_email')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-label text-right text-primary">كلمة المرور</label>
                    <div class="col-sm-10">
                        <input type="password" id="password" name="password" class="form-control">
                        @error('password')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>


                <div class="form-group row">
                    <label for="blog-img" class="col-sm-2 col-form-label text-primary">الصورة</label>
                    <div class="col-sm-10">
                        <input type="file" id="photo" name="u_photo" class="form-control">
                        @error('u_photo')
                            <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="user_type" class="col-sm-2 col-form-label text-primary">نوع المستخدم</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="ut_id" name="ut_id">
                            @php
                                $user_types = \App\Models\User_type::all();
                            @endphp
                            @foreach ($user_types as $user_type)
                                <option value="{{ $user_type->ut_id }}">{{ $user_type->ut_name }}</option>
                            @endforeach
                        </select>
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
