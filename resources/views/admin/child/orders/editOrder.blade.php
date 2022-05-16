@extends('admin.layouts.app')
<!-- 
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Chi Tiết </h2>

            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Chi Tiết Đơn Hàng</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Chi Tiết</a></li>

                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- validation form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Chi Tiết Đơn Hàng</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">ID Đặt Hàng</label>
                        <input type="text" value="{{$order->id}}" class="form-control" id="id" name="id" readonly>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Tên Khách Hàng</label>
                        <input type="text" value="{{$order->name}}" class="form-control" id="name" name="name" readonly>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Địa Chỉ</label> <input type="text" value="{{$order->address}}" class="form-control" id="address" name="address" readonly>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Số Điện Thoại</label> <input type="text" value="{{$order->phone}}" class="form-control" id="phone" name="phone" readonly>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Email</label> <input type="text" value="{{$order->email}}" class="form-control" id="email" name="email" readonly>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Ghi Chú</label> <input type="text" value="{{$order->note}}" class="form-control" id="note" name="note" readonly>
                    </div>
                    @if($order->status == 3)
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustom01">Lý Do Hủy (Nếu Có)</label> <input type="text" value="{{$order->cause}}" class="form-control" id="note" name="note" readonly>
                    </div>
                    @endif
                    <form action="" method="post">
                        @csrf

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Trạng Thái Tư Vấn</label>
                            <select class="form-control" name="status" id="status">
                                <option value="0" {{$order->status==0?"selected":""}}>Chờ Tư Vấn</option>
                                <option value="1" {{$order->status==1?"selected":""}}>Đã Tư Vấn</option>
                                <option value="2" {{$order->status==2?"selected":""}}>Hoàn Thành Đơn</option>
                                <option value="2" {{$order->status==3?"selected":""}}>Đã Hủy</option>
                            </select>
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button type="submit" style="margin-top:10px" class="btn">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- end validation form -->
        <!-- ============================================================== -->
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Danh Sách Sản Phẩm</h5>

            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Xe</th>
                            <th scope="col">Tên Xe</th>
                            <th scope="col">Giá</th>

                            <th scope="col">Loại Xe</th>
                            <th scope="col">Chỗ Ngồi</th>


                        </tr>
                    </thead>
                    <tbody>


                        <tr>
                            <th scope="row"></th>
                            <td>{{$car->id}}</td>
                            <td>{{$car->name}}</td>
                            <td>{{number_format($car->price)}} Đồng</td>
                            <td>{{$car->type}}</td>
                            <td>{{$car->seats}}</td>



                        </tr>

                    </tbody>
                </table>


            </div>
        </div>
        <a href="/admin/orders/{{$order->id}}/pdf"> <button class="btn btn-space btn-primary mb-4">Xuất Hóa Đơn</button></a>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 float-right">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Giảm Giá</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-0">20%</h1>
                    </div>

                </div>
            </div>
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Tổng Tiền</h5>
                        <h2 class="mb-0"> {{number_format($car->price-$car->price*20/100)}} VNĐ</h2>
                    </div>
                    <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                        <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection