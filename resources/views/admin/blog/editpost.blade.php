@extends('admin.layout')
@section('content')
    <div>

        <!-- Page Heading -->
        <div class="d-flex justify-content-between mb-5 mt-4 ">
            <h1 class="h3 text-primary">عرض المقالات</h1>
            <a href="/admin/Add-blog" class=" btn btn-primary shadow-sm me-3"> إضافة مقالة <i
                    class="fas fa-layer-plus fa-sm text-white-50 ms-1"></i></a>
        </div>
        <!-- Begin Page Content -->
        <div class="container">

            <div class="card shadow mb-4">
                <div class="card-header py-3 main-color-bg">
                    <h6 class="m-0 font-weight-bold text-white fs-5">كل المقالات</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>العنوان</th>
                                    <th>الصورة</th>
                                    <th>الفئة</th>
                                    <th>تم نشرها في</th>
                                    <th>تم تعديلها في</th>
                                    <th colspan="2" class="text-center">الامر</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->b_id }}</td>
                                        <td>{{ $blog->b_title }}</td>
                                        <td> <img src="{{ asset('storage/' . $blog->b_img) }}" alt=""
                                                style="width: 100px"></td>
                                        <td>{{ $blog->category->c_name }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                        <td>{{ $blog->updated_at }}</td>
                                        <td> <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" type="button"
                                                class="btn btn-danger">حذف</button>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary"
                                                href="{{ route('admin-EditBlog-work', $blog->b_id) }}">تعديل</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- delete model -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="staticBackdropLabel">تحذير</h5>
                    </div>
                    <div class="modal-body">
                        سيتم حذف المقالة هل تريد الحذف؟
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>


                        @foreach ($blogs as $blog)
                            <form action="{{ route('admin-DestroyBlog-work', $blog->b_id) }}" method="POST">
                        @endforeach
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">
                            حذف
                        </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
