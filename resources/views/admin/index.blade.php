@extends('admin.layout')
@section('content')
    {{-- dashboard --}}

    <!-- Begin Page Content -->

    <!-- Page Heading -->
    <div class="m-3 mt-5 ">
        <h1 class="h3 text-primary">لوحة التحكم</h1>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-xl-4 col-md-7 mb-5">
                <div class=" bg-white border-start border-4 rounded border-danger shadow  py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <a class=" text-danger mb-1 fw-bold" href="/admin/Edit-user"> المستخدمين </a>

                                <div class="mb-0 text-secondary h5 fw-bold">{{ $users }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-secondary fw-bold"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-7 mb-5">
                <div class="bg-white  border-start border-4 rounded border-warning shadow  py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">

                                <a href="/admin/Edit-blog" class="fw-bold text-warning  mb-1">المقالات</a>
                                <div class="mb-0 text-secondary h5 fw-bold">{{ $posts }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fal fa-newspaper fa-2x text-secondary fw-bold"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-7 mb-5">
                <div class=" bg-white border-start border-4 rounded border-info shadow  py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">

                                <a href="" class="fw-bold text-info  mb-1">الرسائل</a>
                                <div class="mb-0 text-secondary h5 fw-bold">20</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-secondary fw-bold"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <!-- resnt blog -->
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 main-color-bg">
                        <h6 class="m-0 font-weight-bold text-white fs-5">آخر مقالة</h6>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            {{-- @foreach (\App\Models\Blog::all() as $lastpost) --}}
                            {{-- <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                src="{{ asset('storage/' . $lastpost) }}" alt=""> --}}
                            {{-- @endforeach --}}
                            {{ $lastpost }}
                        </div>
                        <a href="{{ URL::route('admin-CreateBlog') }}"
                            class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-layer-plus fa-sm text-white-50"></i> انشاء مقالة</a>
                    </div>
                </div>



                {{-- users --}}

                <div class="col-12">
                    <div class="card shadow mb-4 ">
                        <div class="card-header py-3 main-color-bg">
                            <h6 class="m-0 font-weight-bold text-white fs-5">آخر رسالة</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{ asset('images/admin/undraw_connected_re_lmq2.svg') }}" alt="">
                            </div>
                            <a href="#" class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-eye fa-sm text-white-50"></i> عرض الرسائل</a>
                        </div>
                    </div>
                </div>

                {{-- costomers --}}
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 main-color-bg">
                            <h6 class="m-0 font-weight-bold text-white fs-5">آخر مستخدمين</h6>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                    src="{{ asset('images/admin/undraw_review_re_kgg1.svg') }}" alt="">
                            </div>
                            <a href="{{ URL::route('admin-adduser') }}"
                                class=" d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-layer-plus fa-sm text-white-50"></i> انشاء مستخدم</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    @endsection
