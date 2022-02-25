@extends('admin.layout')
@section('content')
    <div>

        <!-- Begin Page Content -->
        <div class="container-fluid ">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">تعديل فئة</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">جدول الفئات</h6>
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
                                @php
                                    $categores = \App\Models\Category::all();
                                @endphp
                                @foreach ($categores as $category)
                                    <tr>
                                        <td>{{ $category->c_name }}</td>
                                        <td>{{ $category->c_note }}</td>
                                        <td>{{ $category->created_at }}</td>
                                        <td>{{ $category->updated_at }}</td>
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
