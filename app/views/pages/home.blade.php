@extends('layouts.main', ['home' => 'active'])

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/public/images/1.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="/public/images/2.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="py-5 px-3">
        <div class="text-center mb-5">
            <p class="fs-3 fw-bold text-dark">GIỚI THIỆU CHUNG</p>
            <img src="/public/images/line.png" />
        </div>
        <img src="/public/images/biahoi.jpg" alt="Bia hơi" class="w-100 h-100 d-block m-auto mb-4" />
        <p>Tên: Tổng Đại Lý Bia Hơi Thông Thủy</p>

        <p>Địa chỉ: Tân Sơn, Kim Bảng, Hà Nam.</p>

        <p>Năm Thành Lập: 1998</p>

        <p>Số Điện Thoại: 0983068870</p>

        <p>Email: biahoithongthuy@gmail.com</p>

        <p>Website: biahoithongthuy.com</p>

        <p>Tổng Đại lý bia hơi Thông Thủy được thành lập từ năm 1998, qua 25 năm hình thành và phát triển, hiện nay cơ
            sở
            của chúng tôi ngày càng phát triển lớn mạnh với hơn 200 đại lý bia, nhà hàng và cửa hàng bia tại
            khu vực Hà Nam.</p>

        <p>Với nhiều năm kinh nghiệm trong lĩnh vực phân phối Bia, chúng tôi mang đến cho khách hàng nhiều sự lựa chọn
            về
            sản phẩm cùng cam kết về chất lượng và giá cả cạnh tranh nhất.</p>

        <button class="click-register" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">CLICK Đăng ký cửa
            hàng BIA HÀ NỘI ngay</button>

        <div class="loading-page d-none" id="loading">
            <div class="bg-overlay"></div>
            <div class="sk-flow">
                <div class="sk-flow-dot"></div>
                <div class="sk-flow-dot"></div>
                <div class="sk-flow-dot"></div>
            </div>
        </div>

        <img src="/public/images/banner.jpg" alt="Bia hơi" class="w-100 h-100 d-block m-auto mb-4" />
    </section>
    <section class="pt-5 px-3">
        <div class="text-center mb-5">
            <p class="fs-3 fw-bold text-dark">SẢN PHẨM</p>
            <img src="/public/images/line.png" />
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-12">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                        <div class="col-12 col-md-4">
                            <a href="{{ route('san-pham/' . $product->slug) }}">
                                <img height="236" class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                    alt="{{ $product->name }}" src="{{ asset(json_decode($product->images)[0]) }}">
                            </a>
                        </div>
                        <div class="col col-md-8 p-4 d-flex flex-column position-static">
                            <h5>
                                <a href="{{ route('san-pham/' . $product->slug) }}">{{ $product->name }}</a>
                            </h5>
                            <p class="fst-italic">{{ $product->short_description }}</p>
                            <div class="mb-1 text-muted small">
                                <small>{{ formatVietnameseDate($product->created_at) }} | {{ $product->views }} lượt
                                    xem</small>
                            </div>
                            <p class="card-text mb-auto text-end">
                                <a class="fst-italic small" href="{{ route('san-pham/' . $product->slug) }}">Xem chi
                                    tiết</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
