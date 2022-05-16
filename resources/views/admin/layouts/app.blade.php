<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>admin</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/">car</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">


                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{session("user")["email"]}}</h5>
                                    <span class="status"></span><span class="ml-2">Khả Dụng</span>
                                </div>

                                <a href="/logout" class="dropdown-item" href="logout"><i class="fas fa-power-off mr-2"></i>Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Tổng quan</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">

                            <li class="nav-item ">

                                <a class="nav-link {{ request()->is('admin') ? 'active' : '' }}" href="/admin/">
                                    <i class="fa fa-fw fa-user-circle"></i>Tổng Quan
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/users')||request()->is('admin/users/*')  ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-12" aria-controls="submenu-12"><i class="fas fa-f fa-folder"></i>Khách Hàng</a>
                                <div id="submenu-12" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/users">Danh Sách</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/products')||request()->is('admin/products/*')||request()->is('admin/add-product') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Sản Phẩm</a>
                                <div id="submenu-10" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/products">Danh Sách</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/add-product">Thêm</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/brands')||request()->is('admin/brands/*')||request()->is('admin/add-brand') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-20" aria-controls="submenu-20"><i class="fas fa-f fa-folder"></i>Danh Mục</a>
                                <div id="submenu-20" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/brands">Danh Sách</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/add-brand">Thêm</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-30" aria-controls="submenu-30"><i class="fas fa-f fa-folder"></i>Liên Hệ</a>
                                <div id="submenu-30" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/contact">Danh Sách</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/estimate')||request()->is('admin/estimate/*') ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-50" aria-controls="submenu-50"><i class="fas fa-f fa-folder"></i>Dự Toán</a>
                                <div id="submenu-50" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/estimate">Danh Sách</a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('admin/orders')||request()->is('admin/orders/*')  ? 'active' : '' }}" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11"><i class="fas fa-f fa-folder"></i>Đơn Hàng</a>
                                <div id="submenu-11" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/orders">Danh Sách</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/orders?status=0">Chờ Tư Vấn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/orders?status=1">Đã Tư Vấn</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/admin/orders?status=1">Đã Hoàn Thành</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- /Header -->


        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    @include('flash-message')
                    @yield('content')
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Copyright © 2018 Concept.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">Giới Thiệu</a>
                                <a href="javascript: void(0);">Liên Hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>