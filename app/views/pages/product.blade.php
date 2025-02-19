@extends('layouts.main', ['product' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
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
        <div class="py-3 text-center alert bg-warning-subtle">
            <h3 class="w-100 text-center fw-bold text-uppercase">Sản phẩm | Đại lý bia hơi Thông Thủy</h3>
        </div>
        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img width="127" height="90" alt="BIA HƠI SÀI GÒN"
                        src="https://file.136.com.vn/36/2024/02/19/sgml2.jpg">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-hoi-sai-gon-1758.html">BIA HƠI SÀI GÒN</a></h6>
                    <p class="small"><small>553 xem | Thứ 2, 19/02/2024 | 16:41 GMT+7</small></p>
                </div>
            </div>
        </div>
        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img class="lazyload" loading="lazy" data-src="https://file.136.com.vn/36/2024/12/05/specialken.jpg"
                        width="127" height="90" alt="BIA HANOI SPECIALKEN CRAFT BEER"
                        src="https://file.136.com.vn/36/2024/12/05/specialken.jpg">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-hanoi-specialken-craft-beer-289.html">BIA HANOI SPECIALKEN CRAFT
                            BEER</a></h6>
                    <p class="small"><small>3261 xem | Thứ 3, 10/01/2023 | 10:06 GMT+7</small></p>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img class="lazyload" loading="lazy"
                        data-src="https://file.136.com.vn/36/2024/02/19/dragonbeer-copy-1-600x600.png" width="127"
                        height="90" alt="BIA TƯƠI HÀ NỘI - DRAGON BEER"
                        src="https://file.136.com.vn/36/2024/02/19/dragonbeer-copy-1-600x600.png">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-tuoi-ha-noi-dragon-beer-288.html">BIA TƯƠI HÀ NỘI - DRAGON BEER</a>
                    </h6>
                    <p class="small"><small>2387 xem | Thứ 3, 10/01/2023 | 09:24 GMT+7</small></p>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img class="lazyload" loading="lazy"
                        data-src="https://file.136.com.vn/36/2024/02/19/specialbeer-copy-600x600.png" width="127"
                        height="90" alt="BIA TƯƠI HÀ NỘI - SPECIAL BEER"
                        src="https://file.136.com.vn/36/2024/02/19/specialbeer-copy-600x600.png">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-tuoi-ha-noi-special-beer-287.html">BIA TƯƠI HÀ NỘI - SPECIAL
                            BEER</a></h6>
                    <p class="small"><small>1424 xem | Thứ 3, 10/01/2023 | 09:20 GMT+7</small></p>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img class="lazyload" loading="lazy" data-src="https://file.136.com.vn/36/2024/12/05/183.png"
                        width="127" height="90" alt="BIA HƠI HÀ NỘI 183 HOÀNG HOA THÁM"
                        src="https://file.136.com.vn/36/2024/12/05/183.png">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-hoi-ha-noi-183-hoang-hoa-tham-286.html">BIA HƠI HÀ NỘI 183 HOÀNG HOA
                            THÁM</a></h6>
                    <p class="small"><small>1580 xem | Thứ 2, 09/01/2023 | 19:49 GMT+7</small></p>
                </div>
            </div>
        </div>

        <div class="my-3">
            <div class="d-flex">
                <div class="me-3" style="width: 127px; height:90px">
                    <img class="lazyload" loading="lazy" data-src="https://file.136.com.vn/36/2024/12/05/89-bom.webp"
                        width="127" height="90" alt="BIA HƠI HÀ NỘI 89 - HABECO TRADING 89"
                        src="https://file.136.com.vn/36/2024/12/05/89-bom.webp">
                </div>
                <div class="card-text w-100">
                    <h6 class="card-text"><a href="/bia-hoi-ha-noi-89-habeco-trading-89-281.html">BIA HƠI HÀ NỘI 89 - HABECO
                            TRADING 89</a></h6>
                    <p class="small"><small>5036 xem | Thứ 6, 06/01/2023 | 20:59 GMT+7</small></p>
                </div>
            </div>
        </div>
    </section>
@endsection
