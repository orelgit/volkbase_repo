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
                    <form method="POST" action="{{ route('admin-UpdateUser-work', $user->u_id) }}">
                        @csrf
                        @method('PATCH')
                        {{-- img --}}
                        <div class="col-lg-8 col-md-12">
                            <div class="mb-3">
                                <img class="mt-2  rounded border border-primary"
                                    src="{{ asset('storage/' . $user->u_photo) }}" alt="" style="width: 250px">
                            </div>
                        </div>

                        {{-- name --}}
                        <div class="mb-3 ">
                            <div class="col-lg-8 col-md-12">
                                <label for="u_name" class="form-label text-black fs-5 fw-bold">الاسم</label>
                                <input value="{{ ucwords($user->u_name) }}" type="text" name="u_name"
                                    class="form-control bg-light" id="u_name">
                                @error('u_name')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>


                        {{-- phone --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12">
                                <label for="u_mobile" class="form-label text-black fs-5 fw-bold">رقم الهاتف</label>
                                <input value="{{ $user->u_mobile }}" class="form-control bg-light" type="text"
                                    id="u_mobile" name="u_mobile">
                                @error('u_mobile')
                                    <h6 class="mt-2 text-danger"> <i class="fas fa-times"></i> {{ $message }}</h6>
                                @enderror
                            </div>
                        </div>


                        {{-- user type --}}
                        <div class="mb-3">
                            <div class="col-lg-8 col-md-12">
                                <label for="user_type" class="form-label text-black fs-5 fw-bold">نوع المستخدم</label>
                                <select class="form-control form-select bg-light " id="user_type" name="ut_id">
                                    @foreach (\App\Models\User_type::all() as $user_type)
                                        <option value="{{ $user_type->ut_id }}"
                                            {{ $user->user_type->ut_id == $user_type->ut_id ? 'selected' : '' }}>
                                            {{ ucwords($user_type->ut_name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="mb-3">
                            <div class="col-lg-6 col-md-12 ">
                                <button type="submit" class="btn btn-primary form-control">تحديث</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
