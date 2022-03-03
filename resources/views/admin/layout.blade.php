<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>
    {{-- ///> fontawsom icons </// --}}
    <link rel="stylesheet" href="{{ url('https://pro.fontawesome.com/releases/v5.10.0/css/all.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    {{-- font style --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">



    <style>
        .flash {
            /* fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm */
            position: fixed;
            background: #fff;
            color: #5379f6;
            border: 2px solid #5379f6;
            border-radius: 2%;
            font-size: 20px;
            padding-left: 2px;
            padding-right: 2px;
            padding-top: 4px;
            padding-bottom: 4px;
            bottom: 10px;
            left: 5px;
            font-family: "Graduate", "Cairo";
        }

        .main-color-bg {
            background-color: #5379f6;
        }

        .hover-color:hover {
            color: white
        }

        a {
            text-decoration: none
        }

    </style>
</head>

<body class="bg-light">
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end  border-secondary main-color-bg" id="sidebar-wrapper">
            <div class="sidebar-heading  main-color-bg ">
                <a href="/"> <span class="text-white">فولك بيس</span>
                    <img style="width: 50px" title="Home page" class="img-fluid"
                        src="{{ asset('images/admin/logoIcon.png') }}" alt=""></a>

            </div>
            <hr class="dropdown-divider mx-3 my-2 text-white">

            <div class="list-group list-group-flush ">
                <a class=" nav-link px-3  main-color-bg  text-white fs-6 fw-bolder"
                    href="{{ URL::route('admin-homePage') }}">
                    <Span><i class="fas fa-cogs  me-1"></i></Span>
                    لوحة التحكم</a>
                <hr class="dropdown-divider mx-3 my-2 text-white">


                <div class="dropdown ">
                    <div class="d-flex justify-content-between " data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <a style=" text-decoration: none" class="nav-link text-white fs-6 fw-bolder">
                            <Span><i class="fas fa-paste  me-1"></i></Span>
                            <span>مقالات</span></a>
                        <span><i class="fas fa-angle-down me-4 text-white"></i></span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-4  ">
                            <li class="nav-item ">
                                <a class="nav-link  text-white-50 hover-shadow " aria-current="page"
                                    href="{{ URL::route('admin-CreateBlog') }}">
                                    <span class="hover-color"> إضافة مقالة</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   text-white-50 " href="{{ URL::route('admin-EditBlog') }}"><span
                                        class="hover-color"> جدول
                                        المقالات</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white-50 " href="{{ URL::route('admin-addcategory') }}"><span
                                        class="hover-color"> إضافة
                                        فئة</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link   text-white-50 " href="{{ URL::route('admin-EditCategory') }}"
                                    tabindex="-1" aria-disabled="true"><span class="hover-color"> جدول الفئات
                                    </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="dropdown-divider mx-3 my-2 text-white">


                <div class="dropdown  ">
                    <div class="d-flex justify-content-between " data-bs-toggle="collapse" data-bs-target="#navbarNav2"
                        aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                        <a style=" text-decoration: none" class="nav-link text-white   fs-6 fw-bolder">
                            <Span><i class="fas fa-users-cog  me-1"></i></Span>
                            <span class=""> المستخدمين</span>
                        </a>
                        <span><i class="fas fa-angle-down me-4 text-white"></i></span>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav2">
                        <ul class="navbar-nav ms-4">
                            <li class="nav-item">
                                <a class="nav-link text-white-50 " aria-current="page"
                                    href="{{ URL::route('admin-adduser') }}"><span class="hover-color"> إضافة
                                        مستخدم</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-white-50 " href="{{ URL::route('admin-EditUser') }}"><span
                                        class="hover-color"> جدول
                                        المستخدمين</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="dropdown-divider mx-3 my-2 text-white text-white">

                <a class="nav-link px-3  main-color-bg  text-white fs-6 fw-bolder" href="#!">
                    <Span><i class="fas fa-envelope  me-1"></i></Span>
                    جميع الرسائل</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light  shadow bg-white border-bottom">
                <div class="container-fluid">
                    <div class="fas fa-bars text-primary fs-4" id="sidebarToggle"></div>
                    <button class="navbar-toggler border-0 " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="fas fa-angle-down text-primary"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                            <li class=" nav-item active mt-1">
                                <a class=" nav-link text-primary  fs-6" href="#!">
                                    <i class="fas fa-envelope"></i>
                                    الرسائل
                                </a>
                            </li>

                            <li class="nav-item mt-1">
                                <a class=" nav-link text-primary  fs-6" href="#!">
                                    <i class="fas fa-bell"></i>
                                    الإشعارات
                                </a>
                            </li>

                            <li class=" nav-item dropdown">
                                <div class="nav-link  text-primary" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fs-5">nada</span>
                                    <img style="width: 40px" src="{{ asset('images/admin/logoIcon.png') }}" alt="bb"
                                        class="img-fluid img-thumbnail rounded-circle">

                                </div>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary" href="#!">الملف الشخصي</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" href="#!">تسجيل الخروج</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            {{-- Page content --}}
            <div class="container">
                @yield('content')
            </div>

        </div>
    </div>

    <!-- Log out Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header main-color-bg text-white">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الخروج</h5>
                </div>
                <div class="modal-body">
                    حدد " نعم" أدناه إذا كنت مستعدًا لإنهاء جلستك الحالية.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                    <button type="button" class="btn btn-primary">نعم</button>
                </div>
            </div>
        </div>
    </div>

    <x-flash />



    <!--  Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- js flash --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/admin.js') }}"></script>


</body>

</html>
