<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Feb 2022 04:36:51 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>CarForYou - Responsive Car Dealer HTML5 Template</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/custom.css" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="/assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/owl.transitions.css" type="text/css">
    <!--slick-slider -->
    <link href="/assets/css/slick.css" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="/assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="/assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="/assets/switcher/css/purple.css" title="purple" media="all" />

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/assets/images/favicon-icon/favicon.png">
    <script src="https://kit.fontawesome.com/16c9079069.js" crossorigin="anonymous"></script>

    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500&family=Open+Sans+Condensed:wght@300;700&family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

    <!-- Start Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">

            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>
                                <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                                <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#228dcb;"> </a>
                                <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                                <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                                <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Switcher -->

    <!--Header-->
    <header>
        <div class="default-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="logo"> <a href="/"><img src="/assets/images/logo.png" alt="image" /></a> </div>
                    </div>
                    <div class="col-sm-9 col-md-10">
                        <div class="header_info">
                            <div class="header_widgets">
                                <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>


                                <a href="mailto:info@example.com">info@cars.com</a>
                            </div>
                            <div class="header_widgets">
                                <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>

                                <a href="tel:61-1234-5678-09">+84-1234-5678-9</a>
                            </div>
                            @if(!session("user"))

                            <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-bs-toggle="modal" data-bs-dismiss="modal">Đăng Nhập / Đăng Kí</a> </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav id="navigation_bar" class="navbar navbar-expand-lg">
            <div class="container">
                <div class="row header-row desktop">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav">
                            <li><a href="/">Trang chủ</a>
                            </li>
                            <li class="dropdown"><a href="./listing-grid.html" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
                                <ul class="dropdown-menu">
                                    @foreach($brands as $item)
                                    <li><a href="/category?brand={{$item->id}}">{{$item->name}}</a></li>

                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="/service">Dịch Vụ</a>
                            </li>
                            <li><a href="/contact">Liên Hệ</a>
                            </li>

                        </ul>
                    </div>

                    <div class="header_wrap">
                        <!-- cart -->
                        <div class="site-cart">
                            <a href="/orders" class="site-header__cart" title="Cart">
                                <!-- <i class="fa fa-bag"></i> -->
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                                <!-- <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"> <i class="fa-solid fa-cart-shopping"></i></span> -->
                            </a>
                            <!--Minicart Popup-->
                            <!-- <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src=".//assets/images/recent-car-2.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>

                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">số lượng:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="/assets/images/recent-car-3.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Elastic Waist Dress</a>

                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">số lượng:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Tổng Giá Tiền:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">Xem Giỏ Hàng</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Thanh Toán</a>
                                    </div>
                                </div>
                            </div> -->
                            <!--End Minicart Popup-->
                        </div>
                        @if(session("user"))
                        <div class="user_login">
                            <ul>
                                <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                                        {{session("user")["email"]}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @if(session("user")["role"]==1||session("user")["role"]==2)
                                        <li><a class="dropdown-item" href="/admin">Quản Trị</a></li>
                                        @endif
                                        <li><a class="dropdown-item" href="/logout">Đăng Xuất</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        @endif
                        <div class="header_search">
                            <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                            <form action="/category" method="get" id="header-search-form">
                                <input type="text" name="search" placeholder="Tìm Kiếm..." class="form-control">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>


                    </div>
                </div>

                <!-- mobile-view -->
                <div class="row header-row mobile">
                    <div class="col-10 col-md-8 right">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fa fa-bars"></i> </button>
                        </div>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="nav navbar-nav">
                                <li><a href="/">Trang chủ</a>
                                </li>
                                <li class="dropdown"><a href="./listing-grid.html" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Sản phẩm</a>
                                    <ul class="dropdown-menu">
                                        @foreach($brands as $item)
                                        <li><a href="/category?brand={{$item->id}}">{{$item->name}}</a></li>
                                        @endforeach

                                    </ul>
                                </li>
                                <li><a href="/contact">Liên Hệ</a>
                                </li>

                            </ul>
                        </div>
                        <div class="header_wrap">
                            <div class="user_login">
                                <ul>
                                    <li class="dropdown dropdown-toggle"> <a href="#" class="dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i> Jhon Anderson <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="profile-settings.html">Profile Settings</a></li>
                                            <li><a class="dropdown-item" href="my-vehicles.html">My Vehicles</a></li>
                                            <li><a class="dropdown-item" href="post-vehicle.html">Post a Vehicle</a></li>
                                            <li><a class="dropdown-item" href="#">Sign Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="header_search">
                                <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
                                <form action="#" method="get" id="header-search-form">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-2 col-md-4 right">
                        <div class="user_login mobile">
                            <ul>
                                <li class="dropdown"> <a href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile-settings.html">Profile Settings</a></li>
                                        <li><a href="my-vehicles.html">My Vehicles</a></li>
                                        <li><a href="post-vehicle.html">Post a Vehicle</a></li>
                                        <li><a href="#">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- mobile-view -->

            </div>
        </nav>
        <!-- Navigation end -->

    </header>
    <!-- /Header -->
    <!-- @section('sidebar')
    This is the master sidebar.
    @show -->
    @include('flash-message')
    @yield('content')


    <!--Footer -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h6>Thông tin chung</h6>
                        <ul>

                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="/contact">Sản phẩm</a></li>


                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h6>Hỗ trợ khách hàng</h6>
                        <ul>
                            <li><a href="/contact">Liên hệ</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-6">
                        <h6>Danh mục sản phẩm</h6>
                        <ul>
                            <li><a href="#">Audi</a></li>
                            <li><a href="#">BMW</a></li>
                            <li><a href="#"> Mercedes Bens</a></li>

                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <h6> Liên Hệ Với Chúng Tôi</h6>
                        <div class="newsletter-form">
                            <form action="/contact">

                                <button type="submit" class="btn btn-block">Liên Hệ Ngay<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                            </form>
                            <p class="subscribed-text">*Chúng tôi gửi các ưu đãi lớn và tin tức ô tô mới nhất cho người dùng đã đăng
                                ký của chúng tôi hàng tuần.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer_row">

                    <div>
                        <p class="copy-right">Copyright &copy; 2022</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer-->

    <!--Back to top-->
    <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
    <!--/Back to top-->

    <!--Login-Form -->
    <div class="modal-top-header">
        <div class="modal fade" id="loginform">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Đăng Nhập</h3>
                    </div>
                    <div class="modal-body">
                        <div class="login_wrap">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <form action="/login" method="post" id="loginForm">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="inputEmailLo" name="email" class="form-control" placeholder="Tên hoặc địa chỉ email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="inputPasswordLo" name="password" class="form-control" placeholder="Mật khẩu*">
                                        </div>
                                        <p class="errorLogin" style="color:red"></p>
                                        <div class="form-group">
                                            <input type="submit" class="inputSubmitLo" value="Login" class="btn btn-block">
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <p>Chưa có tài khoản? <a href="#signupform" data-bs-toggle="modal" data-bs-dismiss="modal">Đăng Ký</a>
                        </p></br>

                    </div>
                </div>
            </div>
        </div>
        <!--/Login-Form -->

        <!--Register-Form -->
        <div class="modal fade" id="signupform">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Đăng Ký</h3>
                    </div>
                    <div class="modal-body">

                        <div class="signup_wrap">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" class="inputEmailRe" name="email" class="form-control" placeholder="Địa chỉ Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="inputPasswordRe" name="password" class="form-control" placeholder="Mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="inputPassword2Re" name="password2" class="form-control" placeholder="Xác nhận lại mật khẩu">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control inputName" placeholder="Họ Và Tên">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="inputAddress" class="form-control inputAddress" placeholder="Địa Chỉ">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="inputPhone" class="form-control inputPhone" placeholder="Số Điện Thoại">
                                        </div>
                                        <p class="errorRegister" style="color:red"></p>
                                        <!-- <div class="form-group checkbox">
                                            <input type="checkbox" id="terms_agree">
                                            <label for="terms_agree">Tôi đồng ý với
                                                <a href="#">các điều khoản và điều kiện trên</a></label>
                                        </div> -->
                                        <div class="form-group">
                                            <input type="submit" value="Sign Up" class="inputSubmitRe" class="btn btn-block">
                                        </div>
                                    </form>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
                        <p>Đã có tài khoản
                            ? <a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal">Đăng Nhập</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--/Register-Form -->

        <!--Forgot-password-Form -->
        <div class="modal fade" id="forgotpassword">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Khôi phục mật khẩu
                        </h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="forgotpassword_wrap">
                                <div class="col-md-12">
                                    <form action="#" method="get">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email của bạn*">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Đặt lại mật khẩu của tôi
                    " class="btn btn-block">
                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="gray_text">Vì lý do bảo mật, chúng tôi không lưu trữ mật khẩu của bạn. Mật khẩu của bạn sẽ
                                            được đặt lại và một cái mới sẽ được gửi.</p>
                                        <p><a href="#loginform" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Quay lại đăng nhập
                                            </a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Forgot-password-Form -->
    </div>
    <!-- Scripts -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/interface.js"></script>
    <!--Switcher-->
    <script src="/assets/switcher/js/switcher.js"></script>
    <!--bootstrap-slider-JS-->
    <script src="/assets/js/bootstrap-slider.min.js"></script>
    <!--Slider-JS-->
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/16c9079069.js" crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            inputSubmitRe = document.querySelector(".inputSubmitRe");
            inputSubmitLo = document.querySelector(".inputSubmitLo");

            inputSubmitRe.addEventListener("click", (event) => {
                event.preventDefault();
                inputEmail = document.querySelector(".inputEmailRe");
                inputPassword = document.querySelector(".inputPasswordRe");
                inputPassword2 = document.querySelector(".inputPassword2Re");
                inputName = document.querySelector(".inputName");
                inputAddress = document.querySelector(".inputAddress");
                inputPhone = document.querySelector(".inputPhone");
                errorRegister = document.querySelector('.errorRegister');
                data = {
                    email: inputEmail.value,
                    password: inputPassword.value,
                    password2: inputPassword2.value,
                    name: inputName.value,
                    address: inputAddress.value,
                    phone: inputPhone.value,
                }
                if (inputPassword.value != inputPassword2.value) {
                    errorRegister.textContent = "Nhập Lại Mật Khẩu Không Đúng";
                    return;
                }
                const reponses = fetch('/api/register', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json'
                            // 'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            errorRegister.textContent = data.error;

                        } else {
                            errorRegister.textContent = data.success;
                            myTimeout = setTimeout(() => {
                                window.location.href = "/";
                                clearTimeout(myTimeout);
                            }, 3000);

                        }
                    });

            });
            inputSubmitLo.addEventListener("click", (event) => {
                event.preventDefault();
                loginForm = document.querySelector("#loginForm");
                inputEmail = document.querySelector(".inputEmailLo");
                inputPassword = document.querySelector(".inputPasswordLo");
                errorLogin = document.querySelector('.errorLogin');
                data = {
                    email: inputEmail.value,
                    password: inputPassword.value,

                }

                const reponses = fetch('/login', {
                        method: 'POST',
                        credentials: 'include',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').getAttribute('value')

                            // 'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: JSON.stringify(data)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            errorLogin.textContent = data.error;
                            return;
                        }
                        if (data.success) {
                            errorLogin.textContent = data.success;
                            myTimeout = setTimeout(() => {
                                window.location.href = "/";
                                clearTimeout(myTimeout);
                            }, 3000);

                        }
                    });

            });
        });
    </script>
</body>


</html>