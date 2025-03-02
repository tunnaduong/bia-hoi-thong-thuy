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
    <section class="bg-light p-3">
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
    </section>
    <script src="/public/js/product.js"></script>
@endsection
