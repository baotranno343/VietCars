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
            <h2 class="pageheader-title">Thêm </h2>

            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Thêm sản
                                phẩm</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Thêm</a></li>

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
            <h5 class="card-header">Thêm Sản phẩm</h5>
            <div class="card-body">
                <form action="/admin/add-product" class="needs-validation" method="post" novalidate="" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Tên sản phẩm </label>
                            <input type="text" class="form-control" id="name" name="name" required="">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom02 ">Giá sản phẩm</label>
                            <input type="number" class="form-control" id="price" name="price" required="">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Số KM Đã Đi </label>
                            <input type="number" class="form-control" id="km" name="km" required="">
                            @error('km')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Hãng</label>
                                <select class="form-control" id="type" name="brand_id">
                                    @foreach($brands as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('brand')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Năm Sản Xuất</label>
                                <select class="form-control" id="year" name="year">
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                </select>
                            </div>
                            @error('year')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Kiểu Xe</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="Hatchback">Hatchback</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Sport Car">Sport Car</option>
                                    <option value="Crossover">Crossover</option>
                                    <option value="Pickup">Pickup</option>
                                </select>
                            </div>
                            @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Số Ghế Ngồi</label>
                                <select class="form-control" id="seats" name="seats">
                                    <option value="4 Chỗ">4 Chỗ</option>
                                    <option value="7 Chỗ">7 Chỗ</option>

                                </select>
                            </div>
                            @error('seats')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="input-select">Hình Ảnh</label>

                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="custom-file">
                                <input type="file" name="attachment[]" multiple>

                            </div>
                            @error('attachment')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group ">
                                <label for="exampleFormControlTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
                            </div>
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <button class="btn btn-primary" type="submit">Thêm</button>
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