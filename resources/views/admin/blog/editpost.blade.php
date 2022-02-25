@extends('admin.layout')
@section('content')
    <div>

        <!-- Begin Page Content -->
        <div class="container-fluid ">

            <!-- Page Heading -->
            <div class="d-flex flex-row-reverse align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">جدول المقالات</h1>
                <a href="/admin/Add-blog" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> انشاء مقالة</a>
            </div>


            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">تعديل مدونة</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered " style="direction: rtl" id="dataTable" width="100%"
                            cellspacing="0">
                            <thead>
                                <tr>
                                    <th>العنوان</th>
                                    <th>الصورة</th>
                                    <th>الفئة</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>العنوان</th>
                                    <th>الصورة</th>
                                    <th>الفئة</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>

                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->b_title }}</td>
                                        <td> <img src="{{ asset('storage/' . $blog->b_img) }}" alt=""
                                                style="width: 100px"></td>
                                        <td>{{ $blog->category->c_name ?? 'لايوجد' }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>{{ $blog->updated_at }}</td>
                                        <td>
                                            <form action="{{ route('admin-DestroyBlog-work', $blog->b_id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td><a class="btn btn-primary"
                                                href="{{ route('admin-EditBlog-work', $blog->b_id) }}">Edit</a>
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
