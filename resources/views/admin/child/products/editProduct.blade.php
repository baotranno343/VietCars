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
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sửa sản
                                phẩm</a></li>
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
            <h5 class="card-header">Sửa Sản phẩm</h5>
            <div class="card-body">
                <form action="/admin/products/edit/{{$car->id}}" class="needs-validation" method="post" novalidate="" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Tên sản phẩm </label>
                            <input type="text" class="form-control" value="{{$car->name}}" id="name" name="name" required="">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom02 ">Giá sản phẩm</label>
                            <input type="number" class="form-control" value="{{$car->price}}" id="price" name="price" required="">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Số KM Đã Đi </label>
                            <input type="number" class="form-control" value="{{$car->km}}" id="km" name="km" required="">
                            @error('km')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Hãng</label>
                                <select class="form-control" id="type" name="brand_id">
                                    @foreach($brands as $item)
                                    {
                                    <option value="{{$item->id}}" {{$car->brand_id==$item->id?'selected':''}}>{{$item->name}}</option>
                                    <!-- <option value="Audi" {{$car->brand=='Audi'?'selected':''}}>Audi</option>
                                    <option value="BMW" {{$car->brand=='BMW'?'selected':''}}>BMW</option> -->
                                    }
                                    @endforeach

                                </select>
                            </div> @error('brand_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Năm Sản Xuất</label>
                                <select class="form-control" value="{{$car->year}}" id="year" name="year">
                                    <option value="2022" {{$car->year=='2022'?'selected':''}}>2022</option>
                                    <option value="2021" {{$car->year=='2021'?'selected':''}}>2021</option>
                                    <option value="2020" {{$car->year=='2020'?'selected':''}}>2020</option>
                                    <option value="2019" {{$car->year=='2019'?'selected':''}}>2019</option>
                                </select>
                            </div> @error('year')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Kiểu Xe</label>
                                <select class="form-control" id="type" name="type">
                                    <option value="Hatchback" {{$car->type=='Hatchback'?'selected':''}}>Hatchback</option>
                                    <option value="Sedan" {{$car->type=='Sedan'?'selected':''}}>Sedan</option>
                                    <option value="Sport Car" {{$car->type=='Sport Car'?'selected':''}}>Sport Car</option>
                                    <option value="Crossover" {{$car->type=='Crossover'?'selected':''}}>Crossover</option>
                                    <option value="Pickup" {{$car->type=='Pickup'?'selected':''}}>Pickup</option>
                                </select>
                            </div> @error('type')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="validationCustom01">Số Ghế Ngồi</label>
                                <select class="form-control" value="{{$car->seats}}" id="seats" name="seats">
                                    <option value="4 Chỗ" {{$car->seats=='4 Chỗ'?'selected':''}}>4 Chỗ</option>
                                    <option value="7 Chỗ" {{$car->seats=='7 Chỗ'?'selected':''}}>7 Chỗ</option>

                                </select>
                            </div> @error('seats')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="form-group ">
                                <label for="exampleFormControlTextarea1">Mô tả</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3">{{$car->content}}</textarea>
                            </div>
                            @error('content')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

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