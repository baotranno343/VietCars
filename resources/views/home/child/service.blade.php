@extends('home.layouts.app')
<!-- 
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')
<!--Page Header-->
<section class="page-header faq_page" style="background-image:url(http://themes.webmasterdriver.net/carforyouwp/wp-content/uploads/2016/12/services-page-header-img.jpg )">



    <div class="container">



        <div class="page-header_wrap">



            <div class="page-heading">



                <h1>Dịch Vụ</h1>



            </div>



            <ul class="coustom-breadcrumb">
                <li><a class="bread-link bread-home" href="/">Trang Chủ</a></li>
                <li class="separator ">&nbsp;</li>
                <li>Dịch Vụ</li>
            </ul>


        </div>



    </div>



    <!-- Dark Overlay-->



    <div class="dark-overlay"></div>



</section>
<!-- /Page Header-->

<!--Contact-us-->
<section class="our_services section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Dịch Vụ Xe</h2>
            <p>Được công bố thành văn bản về trách nhiệm của công ty đối với việc sửa chữa và thay thế những phụ tùng có khuyết tật. Đó cũng là trách nhiệm của công ty trong việc bảo đảm rằng những mối quan tâm về bảo hành của khách hàng được quản lý một cách đúng đắn và được công nhận một cách thích hợp đáp ứng sự mong đợi của khách hàng về độ tin cậy của sản phẩm
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services_image"> <img src="assets/images/our_services_1.jpg" alt="image">
                    <div class="service_heading white-text">
                        <h3>Bảo Hành</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Bảo Hành <span>Xe Hơi</span></h3>
                <p>Bảo hành là nghĩa vụ pháp lý của doanh nghiệp sản xuất, lắp ráp, doanh nghiệp nhập khẩu ôtô trong việc đảm bảo chất lượng ôtô đã bán ra trong điều kiện nhất định.

                </p>
                <br>
                <h4>Chúng tôi sẽ làm gì ?</h4>
                <ul class="list_style_none">
                    <li><i class="fa fa-check" aria-hidden="true"></i>Kiểm tra</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Đánh giá</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Tiến hành sửa chữa</li>
                </ul>
            </div>
        </div>
        <div class="space-80"></div>
        <div class="row">
            <div class="col-md-6 col-md-push-6">
                <div class="services_image"> <img src="assets/images/our_services_2.jpg" alt="image">
                    <div class="service_heading white-text">
                        <h3>Sửa Chữa</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <h3>Sửa Chữa <span>Xe Hơi</span></h3>
                <p>Sửa chữa là công việc cần thực hiện theo hướng dẫn của doanh nghiệp sản xuất, lắp ráp ôtô nhằm duy trì trạng thái vận hành bình thường của ôtô.</p>
                <br>
                <h4>Chúng tôi sẽ làm gì ?</h4>
                <ul class="list_style_none">
                    <li><i class="fa fa-check" aria-hidden="true"></i>Kiểm Tra</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Định Giá</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Báo Giá</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Sửa Chữa</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /Contact-us-->

@endsection