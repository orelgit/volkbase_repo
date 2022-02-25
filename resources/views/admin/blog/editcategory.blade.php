@extends('admin.layout')
@section('content')
    <div>

        <!-- Begin Page Content -->
        <div class="container-fluid ">

            <!-- Page Heading -->
            <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">جدول الفئات</h1>
                <a href="/admin/add-category" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> إضافة فئة</a>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">تعديل فئة</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " style="direction: rtl" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>اسم الفئة</th>
                                    <th>ملاحضة</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>اسم الفئة</th>
                                    <th>ملاحضة</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                {{-- @php
                                    $categores = \App\Models\Category::all();
                                @endphp --}}
                                @foreach ($categores as $category)
                                    <tr>
                                        <td>{{ $category->c_name }}</td>
                                        <td>{{ $category->c_note }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('admin-DestroyCategory-work', $category->c_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td><a class="btn btn-primary"
                                                href="{{ route('admin-EditCategory-work', $category->c_id) }}">Edit</a>
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
