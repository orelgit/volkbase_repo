@extends('admin.layout')
@section('content')
    <div>

        <!-- Begin Page Content -->
        <div class="container-fluid ">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">تعديل مدونة</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">جدول المدونة</h6>
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
                                    <th></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                {{-- @php
                                    $blogs = \App\Models\Blog::all();
                                @endphp --}}
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
