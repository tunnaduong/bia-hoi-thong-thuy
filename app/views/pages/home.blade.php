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

        <!-- The Modal -->
        <div class="modal fade" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title fs-6">ĐĂNG KÝ SETUP CỬA HÀNG BIA HƠI HÀ NỘI NGAY</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <form method="POST" id="form" onsubmit="return common.submitForm(event)">
                        <div class="modal-body">
                            <input type="text" class="form-control mb-3" id="ho-va-ten" placeholder="Họ và tên"
                                name="ho-va-ten" required>
                            <input type="text" class="form-control mb-3" id="so-dien-thoai" placeholder="Số điện thoại"
                                name="so-dien-thoai" required>
                            <input type="email" class="form-control mb-3" id="email" placeholder="Email"
                                name="email">
                            <input type="text" class="form-control mb-3" id="dia-chi" placeholder="Địa chỉ"
                                name="dia-chi">
                            <textarea name="noi-dung" id="noi-dung" class="form-control" rows="3" placeholder="Nội dung"></textarea>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer justify-content-start">
                            <button type="submit" class="btn btn-success mr-auto">Gửi yêu
                                cầu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

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
            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-hoi-ha-noi-89-habeco-trading-89-281.html">
                            <img data-src="https://file.136.com.vn/36/2024/12/05/89-bom.webp" height="236"
                                class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA HƠI HÀ NỘI 89 - HABECO TRADING 89"
                                src="https://file.136.com.vn/36/2024/12/05/89-bom.webp">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-hoi-ha-noi-89-habeco-trading-89-281.html">BIA HƠI HÀ NỘI 89 - HABECO TRADING
                                89</a></h5>
                        <p class="fst-italic">Sản phẩm của CÔNG TY CỔ PHẦN THƯƠNG MẠI BIA HÀ NỘI – HƯNG YÊN 89.</p>
                        <div class="mb-1 text-muted small"><small>5036 xem | Thứ 6, 06/01/2023 | 20:59 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-hoi-ha-noi-89-habeco-trading-89-281.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-hanoi-specialken-craft-beer-289.html">
                            <img data-src="https://file.136.com.vn/36/2024/12/05/specialken.jpg" height="236"
                                class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA HANOI SPECIALKEN CRAFT BEER"
                                src="https://file.136.com.vn/36/2024/12/05/specialken.jpg">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-hanoi-specialken-craft-beer-289.html">BIA HANOI SPECIALKEN CRAFT BEER</a></h5>
                        <p class="fst-italic">Sản phẩm của CÔNG TY CỔ PHẦN BIA QUỐC TẾ SÀI GÒN HÀ NỘI.</p>
                        <div class="mb-1 text-muted small"><small>3261 xem | Thứ 3, 10/01/2023 | 10:06 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-hanoi-specialken-craft-beer-289.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-tuoi-ha-noi-dragon-beer-288.html">
                            <img data-src="https://file.136.com.vn/36/2024/02/19/dragonbeer-copy-1-600x600.png"
                                height="236" class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA TƯƠI HÀ NỘI - DRAGON BEER"
                                src="https://file.136.com.vn/36/2024/02/19/dragonbeer-copy-1-600x600.png">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-tuoi-ha-noi-dragon-beer-288.html">BIA TƯƠI HÀ NỘI - DRAGON BEER</a></h5>
                        <p class="fst-italic">Sản phẩm chủ lực của Công ty Cổ phần Bia Rượu Nước giải khát Hưng Yên - Hà
                            Nội
                        </p>
                        <div class="mb-1 text-muted small"><small>2387 xem | Thứ 3, 10/01/2023 | 09:24 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-tuoi-ha-noi-dragon-beer-288.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-hoi-ha-noi-id-habeco-id-378.html">
                            <img data-src="https://file.136.com.vn/36/2024/12/05/anh-cty-id.jpg" height="236"
                                class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA HƠI HÀ NỘI ID - HABECO ID"
                                src="https://file.136.com.vn/36/2024/12/05/anh-cty-id.jpg">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-hoi-ha-noi-id-habeco-id-378.html">BIA HƠI HÀ NỘI ID - HABECO ID</a></h5>
                        <p class="fst-italic">Sản phẩm của Công ty CP Đầu tư Phát triển Công nghệ Bia - Rượu - Nước giải
                            khát Hà Nội (HABECO-ID)</p>
                        <div class="mb-1 text-muted small"><small>2011 xem | Thứ 4, 26/04/2023 | 10:47 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-hoi-ha-noi-id-habeco-id-378.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-hoi-ha-noi-183-hoang-hoa-tham-286.html">
                            <img data-src="https://file.136.com.vn/36/2024/12/05/183.png" height="236"
                                class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA HƠI HÀ NỘI 183 HOÀNG HOA THÁM"
                                src="https://file.136.com.vn/36/2024/12/05/183.png">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-hoi-ha-noi-183-hoang-hoa-tham-286.html">BIA HƠI HÀ NỘI 183 HOÀNG HOA THÁM</a>
                        </h5>
                        <p class="fst-italic">Sản phẩm làm nên tên tuổi của Tổng Công Ty HABECO - Bia Hơi Hà Nội - được nấu
                            từ nguồn nước tinh khiết từ 183 Hoàng Hoa Thám, chắt lọc hương vị lúa mạch đậm đà.</p>
                        <div class="mb-1 text-muted small"><small>1580 xem | Thứ 2, 09/01/2023 | 19:49 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-hoi-ha-noi-183-hoang-hoa-tham-286.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-tuoi-ha-noi-special-beer-287.html">
                            <img data-src="https://file.136.com.vn/36/2024/02/19/specialbeer-copy-600x600.png"
                                height="236" class="object-fit-scale card-img-top lazyload w-100" loading="lazy"
                                alt="BIA TƯƠI HÀ NỘI - SPECIAL BEER"
                                src="https://file.136.com.vn/36/2024/02/19/specialbeer-copy-600x600.png">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-tuoi-ha-noi-special-beer-287.html">BIA TƯƠI HÀ NỘI - SPECIAL BEER</a></h5>
                        <p class="fst-italic">Sản phẩm cao cấp nhất của Công ty Cổ phần Bia Rượu Nước giải khát Hưng Yên -
                            Hà Nội</p>
                        <div class="mb-1 text-muted small"><small>1424 xem | Thứ 3, 10/01/2023 | 09:20 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-tuoi-ha-noi-special-beer-287.html">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>

            <div class="col-12">
                <div
                    class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative align-items-center">
                    <div class="col-12 col-md-4">
                        <a href="/bia-hoi-sai-gon-1758.html">
                            <img data-src="https://file.136.com.vn/36/2024/02/19/sgml2.jpg" height="236"
                                class="object-fit-scale card-img-top lazyload w-100" loading="lazy" alt="BIA HƠI SÀI GÒN"
                                src="https://file.136.com.vn/36/2024/02/19/sgml2.jpg">
                        </a>
                    </div>
                    <div class="col col-md-8 p-4 d-flex flex-column position-static">
                        <h5><a href="/bia-hoi-sai-gon-1758.html">BIA HƠI SÀI GÒN</a></h5>
                        <p class="fst-italic">Sản phẩm của Nhà máy bia SÀI GÒN - MÊ LINH.</p>
                        <div class="mb-1 text-muted small"><small>553 xem | Thứ 2, 19/02/2024 | 16:41 GMT+7</small></div>
                        <p class="card-text mb-auto text-end"><a class="fst-italic small"
                                href="/bia-hoi-sai-gon-1758.html">Xem chi tiết</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
