@extends('home.layouts.app')
<!--
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')


<!-- Listing-detail-header -->
<section class="listing_detail_header">
    <div class="container">
        <div class="listing_detail_head white-text div_zindex row">
            <div class="col-md-9">
                <h2>{{$car->name}}</h2>

                <div class="add_compare">
                    <!-- <form action="/cart/{{$car->id}}" method="post">
                        @csrf
                        <button type="submit" class="btn"> Mua Ngay</button>
                    </form> -->

                </div>
            </div>
            <div class="col-md-3">
                <div class="price_info">
                    <p style="color:white;font-size:30px">{{number_format($car->price)}} VNĐ</p>

                </div>
            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Listing-detail-header -->


<!--Listing-detail-->
<section class="listing-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="listing_images">
                    <div class="listing_images_slider">
                        @foreach($images as $item)
                        <div><img src="/{{$item->url}}" alt="image"></div>

                        @endforeach
                    </div>
                    <div class="listing_images_slider_nav">
                        @foreach($images as $item)
                        <div><img src="/{{$item->url}}" height="100px" alt="image"></div>
                        @endforeach
                    </div>
                </div>
                <div class="main_features">
                    <ul>
                        <li> <i class="fa fa-tachometer" aria-hidden="true"></i>
                            <h5>{{$car->km}}</h5>
                            <p>Tổng số km</p>
                        </li>
                        <li> <i class="fa fa-calendar" aria-hidden="true"></i>
                            <h5>{{$car->year}}</h5>
                            <p>Năm</p>
                        </li>
                        <li> <i class="fa fa-cogs" aria-hidden="true"></i>
                            <h5>{{$car->type}}</h5>
                            <p>Kiểu Xe
                            </p>
                        </li>


                        <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
                            <h5>{{$car->seats}}</h5>
                            <p>Số ghế</p>
                        </li>

                        <li> <i class="fa fa-superpowers" aria-hidden="true"></i>
                            <h5>{{$car->nameBrand}}</h5>
                            <p>Hãng Xe</p>
                        </li>
                    </ul>

                </div>


                <div class="listing_more_info">
                    <div class="listing_detail_wrap">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô Tả </a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="Technical-tab" data-bs-toggle="tab" href="#Technical" role="tab" aria-controls="Technical" aria-selected="true">Thông Số Cơ Bản</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" id="dutoan-tab" data-bs-toggle="tab" href="#dutoan" role="tab" aria-controls="dutoan" aria-selected="true">Dự Toán Chi Phí</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content" id="myTabContent">
                            <!-- vehicle-overview -->
                            <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab">
                                <h4>Vì sao bạn chọn?</h4>
                                <p>{{$car->content}}</p>

                            </div>

                            <!-- Technical-Specification -->
                            <div role="tabpanel" class="tab-pane" id="Technical" aria-labelledby="Technical-tab">
                                <div class="table-responsive">
                                    <!--Basic-Info-Table-->
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Thông Số Cơ Bản</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Năm Sản Xuất</td>
                                                <td>{{$car->year}}</td>
                                            </tr>
                                            <tr>
                                                <td>Hãng Sản Xuất</td>
                                                <td>{{$car->nameBrand}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số KM Đã Đi</td>
                                                <td>{{$car->year}}</td>
                                            </tr>
                                            <tr>
                                                <td>Loại Xe</td>
                                                <td>{{$car->type}}</td>
                                            </tr>
                                            <tr>
                                                <td>Số Ghế</td>
                                                <td>{{$car->seats}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!--Technical-Specification-Table-->

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="dutoan" aria-labelledby="Technical-tab">
                                <div class="table-responsive">
                                    <!--Basic-Info-Table-->
                                    <table>
                                        <thead>
                                            <tr>
                                                <th colspan="2">Dự Toán Chi Phí</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Giá Xe</td>
                                                <td>{{number_format($car->price)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Thuế Trước Bạ</td>
                                                <td>{{number_format($car->price*$estimate->thuetruocba/100)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Bảo Hiểm Thân Vỏ</td>
                                                <td>{{number_format($car->price*$estimate->baohiemthanvo/100)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Phí Dịch Vụ Đăng Ký</td>
                                                <td>{{number_format($estimate->phidichvudangky)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Bảo Hiểm Dân Sự</td>
                                                <td>{{number_format($estimate->baohiemdansu)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Phí Bảo Trì Đường Bộ</td>
                                                <td>{{number_format($estimate->phibaotriduongbo)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Phí Cấp Biển Số</td>
                                                <td>{{number_format($estimate->phicapbienso)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <td>Phí Đăng Kiểm</td>
                                                <td>{{number_format($estimate->phidangkiem)}} Đồng</td>
                                            </tr>
                                            <tr>
                                                <th>Tổng Giá Lăn Bánh</th>
                                                <th>{{number_format($car->price+($car->price*$estimate->thuetruocba/100)+($car->price*$estimate->baohiemthanvo/100)+($estimate->phidichvudangky)+($estimate->baohiemdansu)+($estimate->phibaotriduongbo)+($estimate->phicapbienso)+($estimate->phidangkiem))}} Đồng</th>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!--Technical-Specification-Table-->

                                </div>
                            </div>

                            <!-- Accessories -->

                        </div>
                    </div>
                </div>

                <!-- <a href="#" class="btn mt-3">Thêm vào giỏ hàng</a> -->



                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tư Vấn
                </button>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Điền Thông Tin</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/car/{{$car->id}}/advise" method="post" id="adviseForm">

                                    @csrf
                                    <p class="mb-3">Bạn hãy để lại thông tin tại đây sẽ có người liên hệ tư vấn. Xin chân thành cảm ơn</p>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-firstname">Họ Tên <span class="required-f">*</span></label>
                                            <input name="name" value={{ session('user')? session('user')['name']:''}} class="inputName" type="text">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-address-1">Địa Chỉ<span class="required-f">*</span></label>
                                            <input name="address" value={{ session('user')? session('user')['address']:''}} class="inputAddress" type="text">
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                            <input name="email" value={{ session('user')? session('user')['email']:''}} class="inputEmail" type="email">
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                            <label for="input-telephone">Điện thoại <span class="required-f">*</span></label>
                                            <input name="phone" value={{ session('user')? session('user')['phone']:''}} class="inputPhone" type="text">
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-12 col-lg-12 col-xl-12 required">
                                            <label for="input-telephone">Ghi Chú<span class="required-f">*</span></label>
                                            <input name="note" class="inputNote" type="text">
                                            @error('note')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="car_id" value="{{$car->id}}">
                                </form>

                            </div>
                            <div class="modal-footer">

                                <button type="submit" onclick="form_submit()" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--Side-Bar-->
            <aside class="col-md-3">
                <div class="sidebar_widget">
                    <div class="widget_heading">
                        <h5><i class="fa fa-address-card-o" aria-hidden="true"></i>Liên hệ Ngay
                        </h5>
                    </div>
                    <div class="dealer_detail">
                        <p><span>Tên:</span> Car</p>
                        <p><span>Email:</span>info@example.com</p>
                        <p><span>Điện Thoại:</span> +84-932-325-14</p>
                    </div>
                </div>

            </aside>
            <!--/Side-Bar-->

        </div>
        <div class="space-20"></div>
        <div class="divider"></div>

        <!--Similar-Cars-->

        <!--/Similar-Cars-->

    </div>
</section>
<!--/Listing-detail-->
<script>
    function form_submit() {
        document.getElementById("adviseForm").submit();
    }
</script>
@endsection