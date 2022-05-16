@extends('home.layouts.app')
<!--
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')
<section class="page-header blog_page">
    <div class="container">
        <div class="page-header_wrap">
            <div class="page-heading">
                <h1>Thanh Toán</h1>
            </div>
            <ul class="coustom-breadcrumb">
                <li><a href="./index.html">Trang Chủ</a></li>
                <li>Thanh Toán</li>
            </ul>
        </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
<section class="our_blog">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box returning-customer">
                    <h3><i class="icon anm anm-user-al"></i> Hãy Kiểm Tra Thông Tin Của Bạn!</a></h3>

                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="customer-box customer-coupon">
                    <h3 class="font-15 xs-font-13"><i class="icon anm anm-gift-l"></i> Giảm ngay 20% Các Sản Phẩm</h3>
                    <div class="modal fade" id="have-coupon">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h3 class="modal-title">Mã giảm giá</h3>
                                </div>
                                <div class="modal-body">

                                    <label class="required get" for="coupon-code"><span class="required-f">*</span>
                                        Mã giảm giá</label>
                                    <input id="coupon-code" required="" type="text" class="mb-3">
                                    <button class="coupon-btn btn" type="submit">Áp dụng</button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="" method="post">
            <div class="row billing-fields">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 sm-margin-30px-bottom">
                    <div class="create-ac-content bg-light-gray padding-20px-all">

                        @csrf
                        <fieldset>
                            <h2 class="title-ck mb-3">Thông Tin Thanh Toán</h2>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-firstname">Họ Tên <span class="required-f">*</span></label>
                                    <input name="name" value="{{$order->name}}" id="input-firstname" type="text" readonly>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-address-1">Địa Chỉ<span class="required-f">*</span></label>
                                    <input name="address" value="{{$order->address}}" id="input-address-1" type="text" readonly>
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-email">E-Mail <span class="required-f">*</span></label>
                                    <input name="email" value="{{$order->email}}" id="input-email" type="email" readonly>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xl-6 required">
                                    <label for="input-telephone">Điện thoại <span class="required-f">*</span></label>
                                    <input name="phone" value="{{$order->phone}}" id="input-telephone" type="tel" readonly>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </fieldset>


                        <fieldset>
                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-xl-12">
                                    <label for="input-company">Ghi Chú <span class="required-f">*</span></label>
                                    <textarea name="note" class="form-control resize-both" rows="3" readonly>{{$order->note}}</textarea>
                                </div>
                            </div>
                            @error('note')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </fieldset>
                        <hr>
                        <input type="hidden" name="discount">

                        <div class="order-button-payment">
                            <button class="btn" value="Place order" type="submit">Đặt hàng
                            </button>
                        </div>


                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="title-ck mb-4">Đơn hàng của bạn
                            </h2>

                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Tên sản phẩm</th>
                                            <th>giá</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">{{$car->name}}</td>
                                            <td>{{number_format($car->price)}}VND</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <tr>
                                            <td class="text-right">Giảm Giá</td>
                                            <td>20%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">Tổng Cộng</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-right">{{number_format($car->price- $car->price*20/100)}} VND</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<script>

</script>
@endsection