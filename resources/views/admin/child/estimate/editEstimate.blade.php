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
            <h2 class="pageheader-title">Sửa </h2>

            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dự Toán</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sửa</a></li>

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
            <h5 class="card-header">Sửa Dự Toán <b>{{$estimate->id==1?"Xe 4 Chỗ":"Xe 7 Chỗ"}}</b> </h5>
            <div class="card-body">
                <form action="/admin/estimate/edit/{{$estimate->id}}" class="needs-validation" method="post" novalidate="" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Thuế Trước Bạ (%):</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->thuetruocba}}" id="name" name="thuetruocba" required="">
                            @error('thuetruocba')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Bảo Hiểm Thân Vỏ (%)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->baohiemthanvo}}" id="name" name="baohiemthanvo" required="">
                            @error('baohiemthanvo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Phí Dịch Vụ Đăng Ký (VNĐ)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->phidichvudangky}}" id="name" name="phidichvudangky" required="">
                            @error('phidichvudangky')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Bảo Hiểm Dân Sự (VNĐ)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->baohiemdansu}}" id="name" name="baohiemdansu" required="">
                            @error('baohiemdansu')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Phí Bảo Trì Đường Bộ (VNĐ)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->phibaotriduongbo}}" id="name" name="phibaotriduongbo" required="">
                            @error('phibaotriduongbo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Phí Cấp Biển Số (VNĐ)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->phicapbienso}}" id="name" name="phicapbienso" required="">
                            @error('phicapbienso')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Phí Đăng Kiểm (VNĐ)</b> </label>
                            <input type="number" class="form-control" value="{{$estimate->phidangkiem}}" id="name" name="phidangkiem" required="">
                            @error('phidangkiem')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary" type="submit">Sửa</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end validation form -->
    <!-- ============================================================== -->
</div>
@endsection