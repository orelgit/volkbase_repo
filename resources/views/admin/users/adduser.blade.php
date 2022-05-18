@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-5 mt-4 ">
        <h1 class="h3 text-primary">إضافة مستخدم</h1>
        <a href="/admin/Edit-user" class=" btn btn-primary shadow-sm me-3"> عرض المستخدمين <i
                class="fas fa-eye fa-sm text-white-50 ms-1"></i></a>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center mb-3">
            <div class="card bg-white col-10 shadow  ">
                <div class="card-body  ">
                    <form method="POST" action="{{ URL::route('admin-adduser') }}" enctype="multipart/form-data">
                        @csrf


                        {{-- name --}}
                        <div class="mb-3 ">
                            <div class="col-lg-8 col-md-12  m-auto">
                                <label for="name" class="form-label text-black fs-5 fw-bold">الاسم</label>
                                <input value="{{ old('u_name') }}" type="text" id="name" name="u_name"
                                    class="form-control bg-light" id="name">
                                @error('u_name')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>


                        {{-- phone --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12  m-auto">
                                <label for="phone" class="form-label text-black fs-5 fw-bold">رقم الهاتف</label>
                                <input value="{{ old('u_mobile') }}" class="form-control bg-light" type="text" id="number"
                                    name="u_mobile" id="phone">
                                @error('u_mobile')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- email --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12  m-auto">
                                <label for="email" class="form-label text-black fs-5 fw-bold">البريد الالكتروني</label>
                                <input value="{{ old('u_email') }}" type="email" id="email" name="u_email"
                                    class="form-control bg-light">
                                @error('u_email')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- password --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12  m-auto">
                                <label for="password" class="form-label text-black fs-5 fw-bold">كلمة المرور</label>
                                <input type="password" id="password" name="password" class="form-control bg-light">
                                @error('password')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- img --}}
                        <div class="col-lg-8 col-md-12  m-auto">
                            <div class="mb-3">
                                <label for="img" class="form-label text-black fs-5 fw-bold">الصورة</label>
                                <input value="{{ old('u_photo') }}" type="file" id="img" name="u_photo"
                                    class="form-control bg-light">
                                @error('u_photo')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>

                        {{-- user type --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12  m-auto">
                                <label for="user_type" class="form-label text-black fs-5 fw-bold">نوع المستخدم</label>
                                <select class="form-control form-select bg-light " id="user_type" name="ut_id">
                                    @php
                                        $user_types = \App\Models\User_type::all();
                                    @endphp
                                    @foreach ($user_types as $user_type)
                                        <option value="{{ $user_type->ut_id }}">{{ $user_type->ut_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="col-lg-6 col-md-12  m-auto">
                                <button type="submit" class="btn btn-primary form-control">إضافة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
