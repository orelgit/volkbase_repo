@extends('admin.layout')
@section('content')
    <!-- Begin Page Content -->
    <!-- Page Heading -->

    <div class="container">
        <div class="row d-flex justify-content-center mb-3">

            <div class="px-4 py-5  text-center">
                <img class="d-block mx-auto mb-4 img-fluid img-thumbnail rounded-circle"
                    src="{{ asset('storage/' . auth()->user()->u_photo) }}" alt="" width="200" height="200">
                <h1 class="display-5 fs-1">{{ auth()->user()->u_name }}</h1>
                <div class="col-lg-6 mx-auto">
                    <p class="lead mb-4">{{ auth()->user()->u_mobile }}</p>
                    <p class="lead mb-4">{{ auth()->user()->u_email }}</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                        <a href="{{ route('admin-EditProfile', auth()->user()->u_id) }}"
                            class="btn btn-primary btn-lg px-4 gap-3">تعديل</a>
                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection
