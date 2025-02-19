@extends('layouts.main', ['news' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-3"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <section class="bg-light p-3">
        <article class="article-item clearfix">
            <div class="row">
                <div class="col-4">
                    <div class="inner-image">
                        <a href="/cach-u-uop-va-su-dung-bia-hoi-ha-noi-hieu-qua-cho-nha-hang-quan-an"
                            title="Cách Ủ Uớp Và Sử Dụng Bia Hơi Hà Nội Chuẩn Cho Nhà Hàng, Quán Ăn">
                            <img class="img-fluid" alt="Cách Ủ Uớp Và Sử Dụng Bia Hơi Hà Nội Chuẩn Cho Nhà Hàng, Quán Ăn"
                                src="https://cdn0704.cdn4s.com/thumbs/z5051731694236_ed5952e4f369047c289e931bb8a62111_thumb_350.jpg">
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="inner-content">
                        <h4 class="article-title">
                            <a href="/cach-u-uop-va-su-dung-bia-hoi-ha-noi-hieu-qua-cho-nha-hang-quan-an">Cách Ủ Uớp Và Sử
                                Dụng Bia Hơi Hà Nội ...</a>
                        </h4>
                        <div class="article-entry-info">
                            <span class="post-date">01/02/2024</span>
                        </div>
                        <div class="article-description"> Cách Ủ Uớp Và Sử Dụng Bia Hơi Hà Nội Chuẩn Cho Nhà Hàng, Quán Ăn
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
@endsection
