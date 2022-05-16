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
        <form action="/admin/users/{{$user->id}}" method="post">
            @method("put")
            @csrf
            <div class="card">
                <h5 class="card-header">Chi Tiết Đơn Hàng</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">ID Khách Hàng</label>
                            <input type="text" value="{{$user->id}}" class="form-control" id="id" name="id" readonly>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Email Khách Hàng</label>
                            <input type="text" value="{{$user->email}}" class="form-control" id="name" name="name" readonly>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Chức Vụ</label><select class="form-control" id="input-select" name="role">
                                <option value="1" {{$user->role==1?"selected":""}}>Admin</option>
                                <option value="0" {{$user->role==0?"selected":""}}>Khách Hàng</option>
                                <option value="2" {{$user->role==2?"selected":""}}>Nhân Viên</option>
                            </select>
                        </div>

                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary" type="submit">Sửa</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- ============================================================== -->
        <!-- end validation form -->
        <!-- ============================================================== -->
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Đơn Hàng Của Khách Hàng</h5>

            <div class="card-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                        <tr>
                            <th scope="col">ID Đơn Hàng</th>
                            <th scope="col">ID Khách Hàng</th>
                            <th scope="col">Tên Khách Hàng</th>
                            <th scope="col">Địa Chỉ</th>
                            <th scope="col">Số Điện Thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ghi Chú</th>


                        </tr>

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
                            <td>{{$item->note}}</td>
                            <td>
                                <form action="/admin/orders/delete/{{$item->id}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <a href="/admin/orders/{{$item->id}}" class="badge badge-pill badge-warning"><i class="far fa-edit"></i></a>
                                    <button style="border:none; cursor:pointer;" type="submit" class="badge badge-pill badge-danger"><i class="fas fa-times"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
    @endsection