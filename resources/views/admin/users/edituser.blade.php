@extends('admin.layout')
@section('content')
    <div>

        <!-- Begin Page Content -->
        <div class="container-fluid ">

            <!-- Page Heading -->
            <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">جدول المستخدمين</h1>
                <a href="/admin/add-user" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> انشاء مستخدم</a>
            </div>


            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">تعديل مستخدم</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " style="direction: rtl" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>الرقم التعريفي</th>
                                    <th>الاسم</th>
                                    <th>البريد الالكتروني</th>
                                    <th>رقم الهاتف</th>
                                    <th>الصورة</th>
                                    <th>نوع المستخدم</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>الرقم التعريفي</th>
                                    <th>الاسم</th>
                                    <th>البريد الالكتروني</th>
                                    <th>رقم الهاتف</th>
                                    <th>الصورة</th>
                                    <th>نوع المستخدم</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>


                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->u_id }}</td>
                                        <td>{{ $user->u_name }}</td>
                                        <td>{{ $user->u_email }}</td>
                                        <td>{{ $user->u_mobile }}</td>
                                        <td> <img src="{{ asset('storage/' . $user->u_photo) }}" alt=""
                                                style="width: 100px"></td>
                                        <td>{{ $user->user_type->ut_name }}</td>
                                        <td>{{ $user->created_at }}</td>
                                        <td>{{ $user->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('admin-DestroyUser-work', $user->u_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td><a class="btn btn-primary"
                                                href="{{ route('admin-EditUser-work', $user->u_id) }}">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
