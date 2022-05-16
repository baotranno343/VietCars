@extends('admin.layouts.app')
<!-- 
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Số Đơn Hàng</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">{{$countOrders}}</h1>
                </div>

            </div>
            <div id="sparkline-revenue4"><canvas width="370" height="100" style="display: inline-block; width: 370.375px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Số Đơn Hàng Theo Tuần</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">{{$countWeekOrders}}</h1>
                </div>

            </div>
            <div id="sparkline-revenue"><canvas width="370" height="100" style="display: inline-block; width: 370.375px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Số Đơn Hàng Theo Tháng</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">{{$countMonthOrders}}</h1>
                </div>

            </div>
            <div id="sparkline-revenue2"><canvas width="370" height="100" style="display: inline-block; width: 370.375px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="text-muted">Tổng Số Đơn Hàng Theo Quý</h5>
                <div class="metric-value d-inline-block">
                    <h1 class="mb-1">{{$countQuarterOrders}}</h1>
                </div>

            </div>
            <div id="sparkline-revenue3"><canvas width="370" height="100" style="display: inline-block; width: 370.375px; height: 100px; vertical-align: top;"></canvas></div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Quản Lý Đơn Hàng</h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bảng Điều Khiển</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bảng</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Đơn Hàng</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Đơn Hàng</h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID Đơn Hàng</th>
                                <th scope="col">ID Khách Hàng</th>
                                <th scope="col">Tên Khách Hàng</th>
                                <th scope="col">Địa Chỉ</th>
                                <th scope="col">Số Điện Thoại</th>
                                <th scope="col">Email</th>
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Thao Tác</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{$item->user_id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->address}}</td>
                                <td>{{$item->phone}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->status==0?"Chờ Tư Vấn":($item->status==1?"Đã Tư Vấn":($item->status==2?"Hoàn Tất Mua Hàng":"Đã Hủy"))}}</td>
                                <td>
                                    <form action="/admin/orders/delete/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="/admin/orders/{{$item->id}}" class="badge badge-pill badge-warning"><i class="far fa-edit"></i></a>
                                        @if(session('user')['role']!=2)
                                        <button style="border:none; cursor:pointer;" type="submit" class="badge badge-pill badge-danger"><i class="fas fa-times"></i></button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->

</div>
@endsection