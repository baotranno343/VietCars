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
                <h1>Đơn Hàng</h1>
            </div>
            <ul class="coustom-breadcrumb">
                <li><a href="./index.html">Trang Chủ</a></li>
                <li>Đơn Hàng</li>
            </ul>
        </div>
    </div>
    <!-- Dark Overlay-->
    <div class="dark-overlay"></div>
</section>
<section class="our_blog">
    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Đơn Hàng Của Bạn</h3>

                            <table class="shop_table cart-form">
                                <thead>
                                    <tr>
                                        <th>*</th>
                                        <th>Ảnh</th>
                                        <th class="product-name">Sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product-status">Ngày Tư Vấn</th>
                                        <th class="product-status">Trạng Thái</th>
                                        <th class="product-status">Tùy Chọn</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if(isset($cart))
                                    @foreach($cart as $item)
                                    <tr class="cart_item">
                                        <td>{{$item->id}}</td>
                                        <td class="product-thumbnail" data-title="Product Name">
                                            <a class="prd-thumb" href="#">
                                                <figure><img width="113" height="113" src="/{{$item->url}}" alt="shipping cart"></figure>
                                            </a>

                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td class="product-price" data-title="Price">
                                            <div class="price price-contain">
                                                <ins><span><span class=" currencySymbol"></span>{{number_format($item->price)}} VNĐ</span></ins>

                                            </div>
                                        </td>
                                        <td>{{$item->created_at}}</td>
                                        <td><b>{{$item->status==0?"Chờ Tư Vấn":($item->status==1?"Đã Tư Vấn":($item->status==2?"Hoàn Tất Mua Hàng":"Đã Hủy"))}}</b></td>
                                        @if($item->status!=2&&$item->status!=3)
                                        <td>
                                            <!-- <a href="checkout/{{$item->order_id}}"><button class="btn">Mua</button></a> -->

                                            <!-- <a href="order/{{$item->order_id}}/delete"><button class="btn">Hủy</button></a> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                Mua
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Mua Hàng</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <p style="text-align:left; color:red">Đơn hàng của bạn chưa được tư vấn bạn có muốn tiếp tục mua hàng không ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                            <a href="checkout/{{$item->order_id}}"> <button class="btn"> Mua</button></a>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Hủy
                                            </button>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn hủy đơn ?</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="order/{{$item->order_id}}/delete" method="post" name="causeForm">
                                                            @csrf
                                                            <div class="modal-body">

                                                                <input type="text" name="cause" placeholder="Điền Lý Do Hủy Đơn Vào Đây">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>


                                                                <button type="submit" onclick="form_submit()" class="btn btn-primary">Hủy Đơn</button>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        @endif

                                    </tr>

                                    @endforeach
                                    @endif
                                    <tr class="cart_item wrap-buttons">
                                        <td class="wrap-btn-control" colspan="4">
                                            <a href="/category" class="btn back-to-shop">Tiếp tục mua hàng</a>

                                            <form action="/cart/" method="post">
                                                @method("delete")
                                                @csrf
                                                <button type="submit" class="btn btn-clear" type="reset">Bỏ tất cả</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<script>
    function form_submit() {
        document.getElementById("causeForm").submit();
    }
</script>
@endsection