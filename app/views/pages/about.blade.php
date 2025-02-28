@extends('layouts.main', ['about' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-2"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <section class="px-2 bg-light py-3">
        <h1 class="h2">Giới thiệu</h1>
        <h5 class="fst-italic">Giới thiệu Tổng đại lý bia hơi Thông Thủy</h5>
        <img src="/public/images/biahoi.jpg" alt="Bia hơi" class="w-100 h-100 d-block m-auto mb-4" />
        <p>Tổng Đại lý bia hơi Thông Thủy được thành lập từ năm 1998, qua 25 năm hình thành và phát triển, hiện nay cơ
            sở
            của chúng tôi ngày càng phát triển lớn mạnh với hơn 200 đại lý bia, nhà hàng và cửa hàng bia tại
            khu vực Hà Nam.</p>

        <p>Với nhiều năm kinh nghiệm trong lĩnh vực phân phối Bia, chúng tôi mang đến cho khách hàng nhiều sự lựa chọn
            về
            sản phẩm cùng cam kết về chất lượng và giá cả cạnh tranh nhất.</p>

        <p>Tên: Tổng Đại Lý Bia Hơi Thông Thủy</p>

        <p>Địa chỉ: Tân Sơn, Kim Bảng, Hà Nam.</p>

        <p>Năm Thành Lập: 1998</p>

        <p>Chủ Đại Lý: Dương Văn Thông</p>

        <p>Số Điện Thoại: 0983068870</p>

        <p>Email: biahoithongthuy@gmail.com</p>

        <p>Website: biahoithongthuy.com</p>
    </section>
@endsection
