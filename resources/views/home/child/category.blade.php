@extends('home.layouts.app')
<!--
@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection -->

@section('content')

<!--Page Header-->
<section class="page-header listing_page">
    <div class="container">
        <div class="page-header_wrap">
            <div class="page-heading">
                <h1>Danh Sách Xe</h1>
            </div>
            <ul class="coustom-breadcrumb">
                <li><a href="/">Trang Chủ</a></li>
                <li>Danh Sách Xe</li>
            </ul>
        </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
<!-- /Page Header-->

<!--Listing-grid-view-->
<section class="listing-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="mobile_search">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i> Tìm chiếc xe mơ ước của bạn
                            </h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="/category" method="get">
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Chọn địa điểm
                                        </option>
                                        <option>Location 1</option>
                                        <option>Location 2</option>
                                        <option>Location 3</option>
                                        <option>Location 4</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Chọn nhãn hiệu
                                        </option>
                                        <option>Brand 1</option>
                                        <option>Brand 2</option>
                                        <option>Brand 3</option>
                                        <option>Brand 4</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Chọn kiểu xe
                                        </option>
                                        <option>Series 1</option>
                                        <option>Series 2</option>
                                        <option>Series 3</option>
                                        <option>Series 4</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Year of Model </option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                        <option>2013</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Phạm vi giá
                                        (VND)</label>
                                    <input id="price_range1" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]" />
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Loại xe hơi
                                        </option>
                                        <option>Xe Mới</option>
                                        <option>Xe Đã Sử Dụng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Tìm
                                        Kiếm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="result-sorting-wrapper">
                    <div class="sorting-count">
                        <p>Kết quả cho tìm kiếm của bạn.</span></p>
                    </div>

                </div>
                <div class="row">
                    @foreach($carsNew as $item)
                    <div class="col-md-4 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"> <a href="/post/{{$item->id}}"><img src="{{$item->url}}" class="img-fluid" style="height:200px;" alt="image" /> </a>
                                <div class="label_icon">Mới</div>

                            </div>
                            <div class="product-listing-content">
                                <h5><a href="#">{{$item->name}}</a></h5>
                                <p class="list-price">{{number_format($item->price)}} Đồng</p>

                                <ul class="features_list">
                                    <li><i class="fa fa-road" aria-hidden="true"></i>{{$item->km}} KM</li>
                                    <li><i class="fa fa-tachometer" aria-hidden="true"></i>{{$item->brand_id}}</li>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$item->year}}</li>
                                    <li><i class="fa fa-car" aria-hidden="true"></i>{{$item->type}}</li>
                                    <a href="/post/{{$item->id}}" class="btn"> Chi Tiết Sản Phẩm</a>

                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- <div class="pagination">
                    <ul>
                        <li class="current">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                </div> -->
            </div>

            <!--Side-Bar-->
            <aside class="col-md-3 col-md-pull-9">
                <div class="sidebar_widget sidebar_search_wrap">
                    <div class="widget_heading">
                        <h5><i class="fa fa-filter" aria-hidden="true"></i> Tìm chiếc xe mơ ước của bạn
                        </h5>
                    </div>
                    <div class="sidebar_filter">
                        <form action="/category" method="get">

                            <div class="form-group">
                                <input type="text" name="search" placeholder="Tìm Kiếm">
                            </div>

                            <div class="form-group select">
                                <select name="brand" class="form-control">
                                    <option value="">Chọn nhãn hiệu
                                    </option>
                                    @foreach($brands as $item) <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach



                                </select>
                            </div>

                            <div class="form-group select">
                                <select name="year" class=" form-control">
                                    <option value="">Mẫu xe theo năm </option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Tìm
                                    kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>


            </aside>
            <!--/Side-Bar-->
        </div>
    </div>
</section>
<!--/Listing-grid-view-->



@endsection