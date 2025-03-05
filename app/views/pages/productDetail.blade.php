@extends('layouts.main', ['product' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/san-pham">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ truncateText($product->name, 25) }}</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-2"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <section class="bg-light p-2">
        <div id="productContainer">
            <div id="productCarousel" class="f-carousel">
                @foreach (json_decode($product->images) as $image)
                    <div class="f-carousel__slide" data-thumb-src="{{ asset($image) }}" data-fancybox="gallery"
                        data-src="{{ asset($image) }}">
                        <img data-lazy-src="{{ asset($image) }}" />
                    </div>
                @endforeach
            </div>
        </div>
        <h2 class="product-title">{{ $product->name }}</h2>
        <div class="product-info">
            {!! $product->info !!}
        </div>
        <div class="product-short-description">
            {!! $product->short_description !!}
        </div>
        <div class="product-cta">
            <div>
                <a class="btn-call btn-phone" target="_blank" href="tel:0983068870">
                    <span>Tư vấn làm đại lý</span>
                    0983.068.870
                </a>
            </div>
            <div>
                <a class="btn-call btn-zalo" target="_blank" href="https://zalo.me/0983068870">
                    <span>Đăng ký qua Zalo</span>
                    Giải đáp và hỗ trợ ngay tức thì
                </a>
            </div>
        </div>
        <button class="click-register" style="margin-top: 5px" data-bs-toggle="modal"
            data-bs-target="#exampleModalCenter">CLICK Đăng ký cửa
            hàng BIA HÀ NỘI ngay</button>
        <div class="product-section-title">
            <span>Thông tin sản phẩm</span>
        </div>
        <h3 class="product-description-title">Chi tiết sản phẩm</h3>
        <style>
            strong {
                font-weight: bold;
            }

            h3 {
                font-size: 18px;
                font-weight: 600;
            }
        </style>
        <div>
            {!! $product->description !!}
        </div>
    </section>
    <script src="/public/js/product.js"></script>
@endsection
