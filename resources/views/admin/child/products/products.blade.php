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
            <h2 class="pageheader-title">Quản Lý Xe</h2>
            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce
                sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bảng Điều Khiển</a>
                        </li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Bảng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Xe</li>
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
            <h5 class="card-header">Danh sách</h5>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Xe</th>
                                <th scope="col">Thương Hiệu</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Năm Sản Xuất</th>
                                <th scope="col">Số KM</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td><a href="/post/{{$item->id}}">{{$item->name}}</a></td>
                                <td>{{$item->brand_id}}</td>
                                <td>{{number_format($item->price)}} VNĐ</td>
                                <td>{{$item->year}}</td>
                                <td>{{$item->km}}</td>
                                <td>
                                    <form action="/admin/products/delete/{{$item->id}}" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="/admin/products/edit/{{$item->id}}" class="badge badge-pill badge-warning"><i class="far fa-edit"></i></a>
                                        @if(session('user')['role']!=2)
                                        <button style="border:none" type="submit" class="badge badge-pill badge-danger"><i class="fas fa-times"></i></button>
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