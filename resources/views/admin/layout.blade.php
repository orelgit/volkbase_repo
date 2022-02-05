<!DOCTYPE html>
<html lang="ar">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
      <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

 <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div class="d-flex flex-row-reverse text-right" id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
            
               <img class="img-fluid" src="{{asset('images/logo.png')}}" alt=""> 
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item  active" >
                <a class="nav-link text-center" href="#">
                    <i class="fas fa-fw fa-tachometer-alt "></i>
                    <span>لوحة التحكم</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-right">
                <h6>المظهر</h6>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item  ">
                <a class="nav-link collapsed text-center" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    
                    <i class="fas fa-fw fa-cog"></i>
                    <span>العناصر</span>
                </a>
                <div id="collapseTwo" class="collapse text-right " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner  rounded">
                        <h6 class="collapse-header ">المكونات المخصصة</h6>
                        <a class="collapse-item" href="buttons.html">الأزار</a>
                        <a class="collapse-item" href="cards.html">النوافذ</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
                <a class="nav-link collapsed text-center" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>المرافق</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">المرافق المخصصة</h6>
                        <a class="collapse-item" href="utilities-color.html">الألوان</a>
                        <a class="collapse-item" href="utilities-border.html">الحدود</a>
                        <a class="collapse-item" href="utilities-animation.html">الانميشن</a>
                        <a class="collapse-item" href="utilities-other.html">آخرى</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-right">
                <h6>الإضافات</h6>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed text-center" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>الصفحات</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">نوافذ تسجيل الدخول</h6>
                        <a class="collapse-item" href="login.html">تسجيل الدخول</a>
                        <a class="collapse-item" href="register.html">تسجيل حساب</a>
                        <a class="collapse-item" href="forgot-password.html">فقدت كلمة المرور</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">صفحات اخرى</h6>
                        <a class="collapse-item" href="404.html">صفحة خطاء 404</a>
                        <a class="collapse-item" href="blank.html">بلانك </a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link text-center" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>الرسوم البيانية</span></a>
            </li>

            <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link text-center" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>الجداول</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            {{-- للاعلان او التنبيه --}}
            {{-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="{{asset('images/undraw_rocket.svg')}}" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div> --}}

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
        <!-- N4DA --> <nav class="navbar d-flex flex-row-reverse navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                 <!-- N4DA-->    <button id="sidebarToggleTop" class="btn btn-link d-md-none  rounded-circle ml-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none  d-sm-inline-block form-inline <!--N4--> ml-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
               <!--N4-->     <ul class="navbar-nav mr-auto ">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item  dropdown no-arrow">
                            <a class="nav-link  dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                src="{{asset('images/undraw_profile.svg')}}">
                                <span class=" ml-2 d-none d-lg-inline text-gray-600 small">N4da</span>
                            </a>
                            <!-- Dropdown - User Information -->
                    <!--N4all-->        <div class="dropdown-menu dropdown-menu-left ml-2 shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            <!--N4all-->    <a class="dropdown-item text-right " href="#">
            <!--N4all--> الملف الشخصي
                <!--N4all-->                  <i class="fas fa-user fa-sm fa-fw ml-2 text-gray-400"></i>
                                </a>
                                <a class="dropdown-item text-right" href="#">
                                    إعدادات
                                    <i class="fas fa-cogs fa-sm fa-fw ml-2 text-gray-400"></i>
                                </a>
                                <a class="dropdown-item text-right" href="#">
                                    سجل النشاطات
                                    <i class="fas fa-list fa-sm fa-fw ml-2 text-gray-400"></i>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-right" href="#" data-toggle="modal" data-target="#logoutModal">
                                    تسجيل الخروج
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw ml-2 text-gray-400"></i>
                                </a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
<!-- Nav Item - Alerts -->
<li class=" nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <!-- Counter - Alerts -->
        <span class="badge badge-danger badge-counter">3+</span>
    </a>
    <!-- Dropdown - Alerts -->
    <div class="dropdown-list  <!--N4--> dropdown-menu dropdown-menu-left ml-2 shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
    <!--N4-->  <h6 class=" text-right">
            الإشعارات
        </h6>
        <a class="dropdown-item <!--N4--> d-flex flex-row-reverse align-items-center" href="#">
            <!-- N4-->
            <div class="ml-3">
                <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                </div>
            </div>
            <div>
                <!--N4-->
                <div class="small text-gray-500 d-flex flex-row-reverse">December 12, 2019</div>

                <!--N4-->
                <p class="font-weight-bold text-right">تقرير شهري جديد جاهز للتنزيل!</p>
            </div>
        </a>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="ml-3">
                <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                </div>
            </div>
            <div>
                <!--N4-->
                <div class="small text-gray-500 d-flex flex-row-reverse">December 7, 2019</div>
                <!--N4-->
                <p class="text-right">تم إيداع 290.29 دولار في حسابك!</p>
            </div>
        </a>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="ml-3">
                <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                </div>
            </div>
            <div>
                <!--N4-->
                <div class="small text-gray-500 d-flex flex-row-reverse">December 2, 2019</div>
                <!--N4-->
                <p class="text-right">تنبيه الإنفاق: لقد لاحظنا إنفاقًا مرتفعًا بشكل غير عادي لحسابك.</p>
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">إظهار كافة التنبيهات</a>
    </div>
</li>

<!-- Nav Item - Messages -->
<li class=" nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-envelope fa-fw"></i>
        <!-- Counter - Messages -->
        <span class="badge badge-danger badge-counter">7</span>
    </a>
    <!-- Dropdown - Messages -->
    <!--N4-->
    <div class="dropdown-list dropdown-menu dropdown-menu-left ml-2 shadow animated--grow-in"
        aria-labelledby="messagesDropdown">
    <!--N4-->  <h6 class=" text-right">
            الرسائل
        </h6>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="dropdown-list-image ml-3">
                <img class="rounded-circle" src="{{asset('images/undraw_profile_1.svg')}}" alt="...">
                <div class="status-indicator bg-success"></div>
            </div>
            <div class="font-weight-bold">
                <div class="text-truncate">أهلا! أتساءل عما إذا كان يمكنك مساعدتي في ملف
                مشكلة كنت أواجهها.</div>
                <!--N4-->
                <div class="small text-gray-500 text-right">Emily Fowler · 58m</div>
            </div>
        </a>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="dropdown-list-image ml-3">
                <img class="rounded-circle" src=" {{asset('images/undraw_profile_2.svg')}}" alt="...">
                <div class="status-indicator"></div>
            </div>
            <div>
                <div class="text-truncate">لدي الصور التي طلبتها الشهر الماضي ، كيف
                هل تود ارسالهم اليك؟</div>
                <!--N4-->
                <div class="small text-gray-500 text-right">Jae Chun · 1d</div>
            </div>
        </a>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="dropdown-list-image ml-3">
                <img class="rounded-circle" src=" {{asset('images/undraw_profile_3.svg')}}" alt="...">
                <div class="status-indicator bg-warning"></div>
            </div>
            <div>
                <div class="text-truncate">يبدو تقرير الشهر الماضي رائعًا ، وأنا سعيد جدًا به
                التقدم حتى الآن ، استمروا في العمل الجيد!</div>
                <!--N4-->
                <div class="small text-gray-500 text-right">Morgan Alvarez · 2d</div>
            </div>
        </a>
        <!--N4--> <a class="dropdown-item d-flex flex-row-reverse align-items-center" href="#">
            <!--N4-->
            <div class="dropdown-list-image ml-3">
                <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                <div class="status-indicator bg-success"></div>
            </div>
            <div>
                <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                told me that people say this to all dogs, even if they aren't good...</div>
                <!--N4-->
                <div class="small text-gray-500 text-right">Chicken the Dog · 2w</div>
            </div>
        </a>
        <a class="dropdown-item text-center small text-gray-500" href="#">قراءة المزيد من الرسائل</a>
    </div>
</li>

<!-- Nav Item - Search Dropdown (Visible Only XS) -->
<li class="nav-item dropdown no-arrow  d-flex flex-row-reverse d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-search fa-fw"></i>
    </a>
    <!-- Dropdown - Messages -->
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
        <form class="form-inline mr-auto w-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</li>
<!-- Nav Item - Search Dropdown (Visible Only XS) end -->



                    </ul>

                </nav>
                <!-- End of Topbar -->


        <div id="content-wrapper" class="d-flex flex-column">
          @yield('content')
          {{-- رابط الى ملف الاندكس ادمن محتوى الصفحة --}}
        </div>
        

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" style="left: 2rem;" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
 
    <!-- Logout Modal-->
    <div class="modal fade " id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content text-right">
                <div class="modal-header d-flex flex-row-reverse">
                    <h5 class="modal-title " id="exampleModalLabel">هل انت متأكد تريد المغادرة؟</h5>
                 
                </div>
                <div class="modal-body">حدد "تسجيل الخروج" أدناه إذا كنت مستعدًا لإنهاء جلستك الحالية.</div>
                <div class="modal-footer d-flex flex-row-reverse">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">إلغاء</button>
                    <a class="btn btn-primary" href="#">تسجيل الخروج</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>