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
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Sửa Danh Mục</a></li>
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
            <h5 class="card-header">Sửa Danh Mục</h5>
            <div class="card-body">
                <form action="/admin/brands/edit/{{$brand->id}}" class="needs-validation" method="post" novalidate="" enctype="multipart/form-data">
                    @method("put")
                    @csrf
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Tên Danh Mục </label>
                            <input type="text" class="form-control" value="{{$brand->name}}" id="name" name="name" required="">
                            @error('name')
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