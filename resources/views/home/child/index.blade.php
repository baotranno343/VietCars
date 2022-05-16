@extends('home.layouts.app')
<!--
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')

<!-- Banners -->
<section id="banner" class="banner-section">
    <div class="container">
        <div class="div_zindex">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <div class="banner_content">
                        <h1>Tìm chiếc xe phù hợp với bạn</h1>
                        <p>
                            Chúng tôi có hơn một nghìn chiếc xe cho bạn lựa chọn. </p>
                        <a href="category" class="btn">Xem Thêm <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banners -->
<!-- Button trigger modal -->


<!-- Resent Cat-->
<section class="section-padding gray-bg">
    <div class="container">
        <div class="section-header text-center">
            <h2>Sản Phẩm Của Chúng Tôi</h2>
        </div>
        <div class="row">

            <!-- Nav tabs -->
            <div class="recent-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Volvo</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="audi-tab" data-bs-toggle="tab" href="#audi" role="tab" aria-controls="audi" aria-selected="false">AUDI</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">BMW</a></li>
                </ul>
            </div>
            <!-- Recently Listed New Cars -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    @foreach($carsVolvo as $item)
                    <div class="col-list-3">
                        <div class="recent-car-list">

                            <div class="car-info-box"> <a href="/post/{{$item->car_id}}"><img src="{{$item->url}}" class="img-fluid" style="height:250px" alt=""></a>

                                <ul>
                                    <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}} KM</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Năm {{$item->year}}</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$item->type}}</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="#">{{$item->name}}</a></h6>
                                <span class="price">{{number_format($item->price)}} Đồng</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>{{$item->content}}</p>
                                <a href="/post/{{$item->car_id}}" class="btn addToCart" car_id="{{$item->car_id}}"> Chi Tiết Sản Phẩm</a>
                            </div>


                        </div>
                    </div>
                    @endforeach


                </div>

                <!-- Recently Listed Used Cars -->
                <div class="tab-pane fade" id="audi" role="tabpanel" aria-labelledby="audi-tab">
                    @foreach($carsAudi as $item)
                    <div class="col-list-3">
                        <div class="recent-car-list">

                            <div class="car-info-box"> <a href="/post/{{$item->car_id}}"><img src="{{$item->url}}" class=" img-fluid" style="height:250px" alt=""></a>

                                <ul>
                                    <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}} KM</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Năm {{$item->year}}</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$item->type}}</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="#">{{$item->name}}</a></h6>
                                <span class="price">{{number_format($item->price)}} Đồng</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>{{$item->content}}</p>
                                <a href="/post/{{$item->car_id}}" class="btn addToCart" car_id="{{$item->car_id}}"> Chi Tiết Sản Phẩm</a>


                            </div>


                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @foreach($carsBMW as $item)
                    <div class="col-list-3">
                        <div class="recent-car-list">

                            <div class="car-info-box"> <a href="/post/{{$item->car_id}}"><img src="{{$item->url}}" class=" img-fluid" style="height:250px" alt=""></a>

                                <ul>
                                    <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}} KM</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>Năm {{$item->year}}</li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i>{{$item->type}}</li>
                                </ul>
                            </div>
                            <div class="car-title-m">
                                <h6><a href="#">{{$item->name}}</a></h6>
                                <span class="price">{{number_format($item->price)}} Đồng</span>
                            </div>
                            <div class="inventory_info_m">
                                <p>{{$item->content}}</p>

                                <a href="/post/{{$item->car_id}}" class="btn addToCart" car_id="{{$item->car_id}}"> Chi Tiết Sản Phẩm</a>

                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Resent Cat -->

<!-- Fun Facts-->
<section class="fun-facts-section">
    <div class="container div_zindex">
        <div class="row">
            <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                        <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
                        <p>Năm kinh doanh
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                        <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
                        <p>Ô tô mới để bán</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                        <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
                        <p>Bán ô tô đã sử dụng
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6 col-sm-3">
                <div class="fun-facts-m">
                    <div class="cell">
                        <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
                        <p>Khách hàng hài lòng
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
<!-- /Fun Facts-->


<!--Featured Car-->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center">
            <h2>Xe Mới Nhất</h2>
        </div>
        <div class="row">
            @foreach($carsNew as $item)
            <div class="col-list-3">
                <div class="featured-car-list">
                    <div class="featured-car-img"> <a href="/post/{{$item->car_id}}"><img src="{{$item->url}}" class="img-fluid" style="height:250px" alt="Image"></a>
                        <div class="label_icon">Mới</div>

                    </div>
                    <div class="featured-car-content">
                        <h6><a href="#">{{$item->name}}</a></h6>
                        <div class="price_info">
                            <p class="featured-price">{{number_format($item->price)}} Đồng</p>

                        </div>
                        <ul>
                            <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}} KM</li>

                            <li><i class="fa fa-calendar" aria-hidden="true"></i>Year {{$item->year}}</li>
                            <li><i class="fa fa-car" aria-hidden="true"></i>{{$item->type}}</li>
                            <li><i class="fa fa-user" aria-hidden="true"></i>{{$item->seats}}</li>
                            <a href="/post/{{$item->car_id}}" class="btn addToCart" car_id="{{$item->car_id}}"> Chi Tiết Sản Phẩm</a>

                        </ul>


                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- /Featured Car-->


<!--Trending Car-->
<section class="section-padding gray-bg">
    <div class="container">
        <div class="section-header text-center">
            <h2>Xe Xu Hướng Của Năm</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div id="trending_slider">
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-1.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">Audi A1</a></h4>
                        </div>
                    </div>
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-2.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">Volvo A5</a></h4>
                        </div>
                    </div>
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-3.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">BMW K12</a></h4>
                        </div>
                    </div>
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-1.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">Audi LK</a></h4>
                        </div>
                    </div>
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-2.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">Volvo J8</a></h4>
                        </div>
                    </div>
                    <div class="trending-car-m">
                        <div class="trending-car-img"> <img src="assets/images/trending-car-img-3.jpg" alt="Image" class="img-fluid" /> </div>
                        <div class="trending-hover">
                            <h4><a href="#">BMW A19</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // document.addEventListener("DOMContentLoaded", function(event) {
    //     addToCart = document.querySelectorAll(".addToCart");

    //     for (let i = 0; i < addToCart.length; i++) {
    //         addToCart[i].addEventListener("click", function() {
    //             let car_id = addToCart[i].getAttribute('car_id');
    //             data = {
    //                 id: car_id,
    //             }
    //             const response = fetch('/cart/' + `${car_id}`, {
    //                     method: 'POST',
    //                     credentials: 'include',
    //                     headers: {
    //                         'Content-Type': 'application/json',
    //                         'Accept': 'application/json',
    //                         'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').getAttribute('value')

    //                         // 'Content-Type': 'application/x-www-form-urlencoded',
    //                     },
    //                     body: JSON.stringify(data)
    //                 })
    //                 .then(response => response.json())
    //                 .then(data => {
    //                     if (data.error) {
    //                         return;
    //                     }
    //                     if (data.success) {
    //                         // myTimeout = setTimeout(() => {
    //                         //     clearTimeout(myTimeout);
    //                         // }, 3000);
    //                         const cartCount = document.querySelector("#CartCount").textContent = data.cartCount;



    //                     }
    //                 });
    //         });
    //     }

    // });
</script>
<!-- /Trending Car-->

@endsection