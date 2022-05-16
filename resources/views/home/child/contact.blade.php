@extends('home.layouts.app')
<!-- 
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')
<!--Page Header-->
<section class="page-header contactus_page">
    <div class="container">
        <div class="page-header_wrap">
            <div class="page-heading">
                <h1>Liên Hệ</h1>
            </div>
            <ul class="coustom-breadcrumb">
                <li><a href="#">Trang Chủ</a></li>
                <li>Liên Hệ</li>
            </ul>
        </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->

<!--Contact-us-->
<section class="contact_us section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Liên hệ bằng cách sử dụng biểu mẫu bên dưới</h3>
                <div class="contact_form gray-bg">
                    <form action="/contact" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="control-label">Họ Tên <span>*</span></label>
                            <input type="text" class="form-control white_bg" id="fullname" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email <span>*</span></label>
                            <input type="email" class="form-control white_bg" id="emailaddress" name="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Số điện Thoại <span>*</span></label>
                            <input type="text" class="form-control white_bg" id="phonenumber" name="phone">
                            @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Nội Dung <span>*</span></label>
                            <textarea class="form-control custom-height white_bg" rows="4" name="note"></textarea>
                            @error('note')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn" type="submit">Gửi <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <h3>Thông Tin Liên Lạc
                </h3>
                <div class="contact_detail">
                    <ul>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="contact_info_m">Tòa Nhà Bitexco, Quận 1, TP. Hồ Chí Minh</div>
                        </li>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="contact_info_m"><a href="tel:61-1234-567-90">+84 92-26-25-22</a></div>
                        </li>
                        <li>
                            <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <div class="contact_info_m"><a href="mailto:contact@exampleurl.com">contact@cars.com</a></div>
                        </li>
                    </ul>
                    <div class="map_wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5127649870137!2d106.70439119863997!3d10.771983910463366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f41476fee6b%3A0x15de2e5129cc54f!2zQml0ZXhjbyBGaW5hbmNpYWwgVG93ZXIsIELhur9uIE5naMOpLCBRdeG6rW4gMSwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1645796311351!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact-us-->

@endsection