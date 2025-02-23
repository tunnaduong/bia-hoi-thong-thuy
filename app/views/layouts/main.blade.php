<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v22.0&appId=1087511252159238"></script>
    <h3 class="banner-top mb-0 text-warning text-center py-3">
        ĐẠI LÝ BIA HƠI THÔNG THỦY
    </h3>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/public/images/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $home ?? '' }}" aria-current="page" href="/">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $about ?? '' }}" href="/gioi-thieu">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $product ?? '' }}" href="/san-pham">SẢN PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $news ?? '' }}" href="/tin-tuc">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $contact ?? '' }}" href="/lien-he">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="position-fixed bottom-50 end-0" style="z-index: 9999;">
        <div class="position-relative text-center">
            <div>
                <a class="text-danger fw-bold" href="https://zalo.me/0983068870"><img loading="lazy" width="50"
                        height="50" alt="zalo" src="/public/images/Logo.svg"></a>
            </div>
            <div class="mt-3 call_detox_green bottom-50 position-relative end-0 d-flex justify-content-center align-items-center"
                style="width:90px; height:90px; z-index: 9999">
                <div class="w-100 h-100 rounded-circle border border-3 border-danger position-absolute"
                    style="transition: all .5s; -o-transition: all .5s; -moz-transition: all .5s; -webkit-transition: all .5s; animation: call-circle-anim 1.2s infinite ease-in-out; -moz-animation: call-circle-anim 1.2s infinite ease-in-out; -o-animation: call-circle-anim 1.2s infinite ease-in-out; -webkit-animation: call-circle-anim 1.2s infinite ease-in-out">
                </div>
                <div class="w-100 h-100 rounded-circle bg-danger position-absolute"
                    style="transition: all .5s; -o-transition: all .5s; -moz-transition: all .5s; -webkit-transition: all .5s; animation: call-circle-fill-anim 2.3s infinite ease-in-out; -moz-animation: call-circle-fill-anim 2.3s infinite ease-in-out; -o-animation: call-circle-fill-anim 2.3s infinite ease-in-out; -webkit-animation: call-circle-fill-anim 2.3s infinite ease-in-out">
                </div>
                <div class="w-50 h-50 bg-danger fs-3 rounded-circle d-flex justify-content-center align-items-center"
                    style="animation: call-icon-anim 1s infinite ease-in-out; -o-animation: call-icon-anim 1s infinite ease-in-out; -moz-animation: call-icon-anim 1s infinite ease-in-out; -webkit-animation: call-icon-anim 1s infinite ease-in-out">
                    <a href="tel:0983068870"><i class="fa fa-volume-control-phone text-white"></i></a>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <section class="py-5 px-3 hop-tac">
        <div class="text-center bg-light py-5 rounded" style="opacity: 0.9">
            <h2 class="fw-bold">CƠ <span class="border-bottom border-warning border-3 pb-3">CHẾ HỢP</span> TÁC</h2>
            <div class="mt-5">
                <i class="fa fa-handshake-o fs-1" aria-hidden="true"></i>
            </div>
            <div class="font-italic fs-3 p-2">
                <p><span>Hợp tác với chúng tôi bạn sẽ được <strong>đầu tư 100%</strong> trang thiết bị: từ <strong>tủ
                            bảo
                            quản</strong> chuyên dụng với đầy đủ <strong>van</strong>, <strong>phập</strong>,
                        <strong>bơm</strong>, <strong>vòi rót</strong>, <strong>biển bảng quảng cáo</strong>, <strong>vỏ
                            bom</strong>, <strong>vỏ keg</strong>, <strong>bàn ghế</strong>...</span></p>
            </div>
        </div>
    </section>
    <section class="position-relative bg-dark">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center text-white mb-4">
                    <p>
                        <img width="69" height="50" src="/public/images/service1.png">
                    </p>
                    <p class="fw-bold fs-1">200+</p>
                    <div>
                        <img loading="lazy" class="lazyload" data-src="/public/images/123.png" alt=""
                            width="272" height="7" src="/public/images/123.png">
                    </div>
                    <div class="fw-bold fs-3">CỬA HÀNG BÁN LẺ</div>
                </div>

                <div class="col-12 text-center text-white mb-4">
                    <p>
                        <img width="69" height="50" data-src="/public/images/service_2.png" class="lazyload"
                            alt="" loading="lazy" src="/public/images/service_2.png">
                    </p>
                    <p class="fw-bold fs-1">3+</p>
                    <div>
                        <img loading="lazy" class="lazyload" data-src="/public/images/123.png" alt=""
                            width="272" height="7" src="/public/images/123.png">
                    </div>
                    <div class="fw-bold fs-3">TỈNH - THÀNH PHỐ</div>
                </div>

                <div class="col-12 text-center text-white mb-4">
                    <p>
                        <img width="69" height="50" data-src="/public/images/service_4.png" class="lazyload"
                            alt="" loading="lazy" src="/public/images/service_4.png">
                    </p>
                    <p class="fw-bold fs-1">25 năm+</p>
                    <div>
                        <img loading="lazy" class="lazyload" data-src="/public/images/123.png" alt=""
                            width="272" height="7" src="/public/images/123.png">
                    </div>
                    <div class="fw-bold fs-3">KINH NGHIỆM</div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color:rgb(41, 128, 185)">
        <div class="text-center py-3">
            <p class="fs-3 fw-bold text-white">CHÚNG TÔI CAM KẾT </p>
            <p style="text-align: center;"><img class="lazyload" loading="lazy" data-src="/public/images/line.png"
                    alt="" width="345" height="30" src="/public/images/line.png"></p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="width:125px; height:125px" class="mx-auto text-center">
                        <div
                            class="border border-2 border-warning rounded-circle w-100 h-100 d-flex align-items-center justify-content-center shover">
                            <img width="83" height="98" data-src="/public/images/ic1.png" class="lazyload"
                                alt="" loading="lazy" src="/public/images/ic1.png">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <h5 class="text-center text-white"><strong>UY TÍN – KINH NGHIỆM</strong></h5>
                        <p class="text-center text-light"><em>Chuyên nghiệp</em></p>
                        <p class="text-start text-light text-center">Với nhiều năm kinh nghiệm trong lĩnh vực phân phối
                            bia, chúng tôi
                            mang đến cho khách hàng nhiều sự lựa chọn về sản phẩm cùng cam kết về chất lượng và giá cả
                            cạnh
                            tranh nhất.</p>
                    </div>
                </div>

                <div class="col-12">
                    <div style="width:125px; height:125px" class="mx-auto text-center">
                        <div
                            class="border border-2 border-warning rounded-circle w-100 h-100 d-flex align-items-center justify-content-center shover">
                            <img width="70" height="82" data-src="/public/images/ic2.png" class="lazyload"
                                alt="" loading="lazy" src="/public/images/ic2.png">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <h5 class="text-center text-white"><strong>GIÁ ĐƯỢC NIÊM YẾT</strong></h5>
                        <p class="text-center text-light"><em>Đúng giá thị trường</em></p>
                        <p class="text-start text-light text-center">Giá thành sản phẩm được tính toán, so sánh với thị
                            trường để đảm
                            bảo lợi ích của quý khách hàng và giá trị thật của từng sản phẩm bia tuyệt hảo</p>
                    </div>
                </div>

                <div class="col-12">
                    <div style="width:125px; height:125px" class="mx-auto text-center">
                        <div
                            class="border border-2 border-warning rounded-circle w-100 h-100 d-flex align-items-center justify-content-center shover">
                            <img width="115" height="67" data-src="/public/images/ic5.png" class="lazyload"
                                alt="" loading="lazy" src="/public/images/ic5.png">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <h5 class="text-center text-white"><strong>AN TÂM CHẤT LƯỢNG</strong></h5>
                        <p class="text-center text-light"><em>Hàng chính hãng</em></p>
                        <p class="text-start text-light text-center">Giao hàng tận nhà, hàng ngày, miễn phí vận chuyển,
                            số
                            lượng không
                            hạn chế, luôn đảm bảo cung cấp đủ bia, không lo thiếu bia.</p>
                    </div>
                </div>

                <div class="col-12">
                    <div style="width:125px; height:125px" class="mx-auto text-center">
                        <div
                            class="border border-2 border-warning rounded-circle w-100 h-100 d-flex align-items-center justify-content-center shover">
                            <img width="84" height="82" data-src="/public/images/ic4.png" class="lazyload"
                                alt="" loading="lazy" src="/public/images/ic4.png">
                        </div>
                    </div>
                    <div class="w-100 pt-3">
                        <h5 class="text-center text-white"><strong>TƯ VẤN – HỖ TRỢ 24/7</strong></h5>
                        <p class="text-center text-light"><em>Hỗ trợ nhiệt tình</em></p>
                        <p class="text-start text-light text-center">Tư vấn cách kinh doanh, kỹ thuật bảo quản và chắt
                            rót
                            bia, quý
                            khách hàng có thể liên hệ qua tất cả các kênh: Website, Facebook, Zalo, hotline sẵn sàng
                            phục vụ
                            bạn
                            bất kể khi nào bạn có nhu cầu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3" id="contact" style="background-color:#154f28; color:#fff">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body p-3">
                        <h5>TỔNG ĐẠI LÝ BIA HƠI THÔNG THỦY</h5>
                        <div>
                            <div class="border-bottom border-3 border-warning my-3 w-50"></div>
                        </div>
                        <p><svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.4 9.20137C6.92533 9.20137 6.46131 9.04884 6.06663 8.76308C5.67195 8.47731 5.36434 8.07114 5.18269 7.59593C5.00104 7.12071 4.95351 6.5978 5.04612 6.09332C5.13872 5.58883 5.3673 5.12544 5.70295 4.76172C6.03859 4.39801 6.46623 4.15032 6.93179 4.04997C7.39734 3.94962 7.8799 4.00113 8.31844 4.19797C8.75699 4.39481 9.13181 4.72814 9.39553 5.15582C9.65925 5.5835 9.8 6.08632 9.8 6.60069C9.79924 7.29018 9.54614 7.95119 9.09622 8.43874C8.6463 8.92628 8.03629 9.20055 7.4 9.20137ZM7.4 5.04028C7.1152 5.04028 6.83679 5.13179 6.59998 5.30325C6.36317 5.47471 6.17861 5.71842 6.06962 6.00354C5.96062 6.28867 5.93211 6.60242 5.98767 6.90511C6.04323 7.2078 6.18038 7.48584 6.38177 7.70406C6.58316 7.92229 6.83974 8.07091 7.11907 8.13111C7.3984 8.19132 7.68794 8.16042 7.95107 8.04232C8.21419 7.92421 8.43909 7.72421 8.59732 7.4676C8.75555 7.211 8.84 6.90931 8.84 6.60069C8.83962 6.18697 8.68779 5.79031 8.41782 5.49777C8.14785 5.20522 7.7818 5.04069 7.4 5.04028Z"
                                    fill="#619E12"></path>
                                <path
                                    d="M7 18L1.63164 11.6042C1.55705 11.5082 1.48323 11.4115 1.41019 11.3143C0.493176 10.094 -0.0022153 8.6035 7.44728e-06 7.07143C7.44728e-06 5.19597 0.737505 3.39732 2.05026 2.07117C3.36301 0.745024 5.14349 0 7 0C8.85651 0 10.637 0.745024 11.9497 2.07117C13.2625 3.39732 14 5.19597 14 7.07143C14.0022 8.60281 13.507 10.0926 12.5904 11.3124L12.5898 11.3143C12.5898 11.3143 12.3989 11.5676 12.3703 11.6016L7 18ZM2.42582 10.5396C2.4271 10.5396 2.57473 10.7376 2.60846 10.7801L7 16.0123L11.3973 10.773C11.4253 10.7376 11.5742 10.5384 11.5748 10.5377C12.3239 9.54072 12.7287 8.32309 12.7273 7.07143C12.7273 5.53696 12.1239 4.06534 11.0498 2.98031C9.97572 1.89528 8.51897 1.28571 7 1.28571C5.48103 1.28571 4.02428 1.89528 2.95021 2.98031C1.87614 4.06534 1.27273 5.53696 1.27273 7.07143C1.2714 8.32387 1.67668 9.54219 2.42646 10.5396H2.42582Z"
                                    fill="#619E12"></path>
                            </svg>&nbsp; Địa chỉ: Tân Sơn, Kim Bảng, Hà Nam.</p>
                        <p><svg width="14" height="16" viewBox="0 0 14 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.783 15.3021L13.6448 13.1721C13.8723 12.9121 14 12.5641 14 12.1961C14 11.8281 13.874 11.4801 13.6448 11.22L11.6413 8.92604C11.4138 8.66604 11.1076 8.52004 10.7857 8.52004C10.4619 8.52004 10.1592 8.66404 9.93001 8.92604L8.36046 10.718C7.52828 10.3098 6.77218 9.72325 6.13298 8.99004C5.48731 8.25604 4.97813 7.39803 4.61767 6.44603L6.18723 4.65402C6.4147 4.39402 6.54243 4.04602 6.54243 3.67802C6.54302 3.4965 6.5119 3.31668 6.45091 3.14908C6.38992 2.98149 6.30027 2.8295 6.18723 2.70201L4.18373 0.406002C3.95625 0.146001 3.65004 0 3.32808 0C3.00437 0 2.70166 0.144001 2.47244 0.406002L0.610673 2.53401C0.222221 2.97801 0 3.59002 0 4.21802C0 4.34802 0.00874805 4.47402 0.0279961 4.60202C0.409449 7.25003 1.64304 9.87804 3.49781 12.0001C5.35608 14.1201 7.65529 15.5281 9.97375 15.9681C10.6317 16.0941 11.3088 15.8421 11.783 15.3021ZM10.182 14.5501C8.11898 14.1601 6.06124 12.8921 4.3902 10.982C2.71916 9.07204 1.6098 6.72203 1.26859 4.36402C1.22485 4.06802 1.31234 3.76402 1.49956 3.54802L3.32808 1.45801L5.26859 3.67402L3.16885 6.07003L3.1531 6.08803L3.29309 6.52003C3.71443 7.82989 4.37991 9.01937 5.24343 10.006C6.10694 10.9927 7.14783 11.7529 8.29396 12.2341L8.67192 12.3941L10.7839 9.97804L12.7244 12.1941L10.8959 14.2841C10.7069 14.5001 10.4409 14.6001 10.182 14.5501Z"
                                    fill="#619E12"></path>
                            </svg>&nbsp; SĐT: <a href="tel:0983068870" class="text-white">0983068870</a></p>
                        <p><svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 0H1C0.734784 0 0.48043 0.114137 0.292893 0.317301C0.105357 0.520465 0 0.796016 0 1.08333V11.9167C0 12.204 0.105357 12.4795 0.292893 12.6827C0.48043 12.8859 0.734784 13 1 13H15C15.2652 13 15.5196 12.8859 15.7071 12.6827C15.8946 12.4795 16 12.204 16 11.9167V1.08333C16 0.796016 15.8946 0.520465 15.7071 0.317301C15.5196 0.114137 15.2652 0 15 0ZM14.23 11.9167H1.83L5.33 7.995L4.61 7.24208L1 11.2883V1.90667L7.215 8.60708C7.40236 8.80886 7.65581 8.92211 7.92 8.92211C8.18419 8.92211 8.43764 8.80886 8.625 8.60708L15 1.73875V11.2179L11.32 7.23125L10.615 7.995L14.23 11.9167ZM1.655 1.08333H14.19L7.92 7.83792L1.655 1.08333Z"
                                    fill="#619E12"></path>
                            </svg>&nbsp; Email: <a href="mailto:biahoithongthuy@gmail.com"
                                class="text-white">biahoithongthuy@gmail.com</a></p>
                        <p><svg width="16" height="13" viewBox="0 0 16 13" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.4 0C13.7414 0 14.0795 0.0607127 14.395 0.178672C14.7104 0.296631 14.997 0.469526 15.2385 0.687485C15.4799 0.905445 15.6714 1.1642 15.8021 1.44898C15.9327 1.73376 16 2.03898 16 2.34722V10.6528C16 10.961 15.9327 11.2662 15.8021 11.551C15.6714 11.8358 15.4799 12.0946 15.2385 12.3125C14.997 12.5305 14.7104 12.7034 14.395 12.8213C14.0795 12.9393 13.7414 13 13.4 13H2.6C1.91044 13 1.24912 12.7527 0.761522 12.3125C0.273928 11.8723 0 11.2753 0 10.6528V2.34722C0 1.7247 0.273928 1.12767 0.761522 0.687485C1.24912 0.247296 1.91044 0 2.6 0H13.4ZM13.4 1.08333H2.6C2.2287 1.08333 1.8726 1.21649 1.61005 1.45352C1.3475 1.69054 1.2 2.01202 1.2 2.34722V10.6528C1.2 11.3504 1.8272 11.9167 2.6 11.9167H13.4C13.7713 11.9167 14.1274 11.7835 14.3899 11.5465C14.6525 11.3095 14.8 10.988 14.8 10.6528V2.34722C14.8 2.01202 14.6525 1.69054 14.3899 1.45352C14.1274 1.21649 13.7713 1.08333 13.4 1.08333ZM3.7984 2.52778H12.2032C12.3552 2.52782 12.5016 2.57995 12.6126 2.67365C12.7237 2.76734 12.7913 2.8956 12.8016 3.03252C12.812 3.16944 12.7644 3.30481 12.6685 3.41127C12.5725 3.51773 12.4354 3.58735 12.2848 3.60606L12.2032 3.61111H3.7984C3.64645 3.61089 3.50025 3.55862 3.38932 3.46487C3.2784 3.37112 3.211 3.24287 3.20075 3.106C3.19049 2.96914 3.23814 2.83386 3.33407 2.72748C3.43 2.62109 3.56707 2.55153 3.7176 2.53283L3.7984 2.52778H12.2032H3.7984Z"
                                    fill="#619E12"></path>
                            </svg>&nbsp; Website: <a href="/" class="text-white">biahoithongthuy.com</a></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-body p-3">
                        <h5>VỀ CHÚNG TÔI</h5>
                        <div>
                            <div class="border-bottom border-3 border-warning my-3 w-50"></div>
                        </div>
                        <p><a href="/gioi-thieu" class="text-white">Giới thiệu</a></p>
                        <p><a href="/san-pham" class="text-white">Sản phẩm</a></p>
                        <p><a href="/tin-tuc" class="text-white">Tin tức</a></p>
                        <p>Liên hệ</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-body p-3">
                        <h5>LIÊN HỆ MỞ ĐẠI LÝ</h5>
                        <div>
                            <div class="border-bottom border-3 border-warning my-3 w-50"></div>
                        </div>
                        <p><a href="/lien-he-mo-dai-ly-64.shtml" class="text-white">Liên hệ mở đại lý</a></p>
                        <p><a href="/co-che-hop-tac-65.shtml" class="text-white">Cơ chế hợp tác</a></p>
                        <iframe width="100%" height="100%"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d933.6231726850094!2d105.84831945598124!3d20.608765078457722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135cd851a73260d%3A0xbed3016d810fe197!2zTmjDoCBjdW5nIGPhuqVwIGJpYSBoxqFpIEjDoCBO4buZaSBUaMO0bmcgVGh14bu3!5e0!3m2!1svi!2shk!4v1739804320336!5m2!1svi!2shk"
                            style="border:0;margin-bottom: 15px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="fb-page" data-href="https://www.facebook.com/biahoihanoithongthuy"
                            data-tabs="timeline" data-width="" data-height="" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/biahoihanoithongthuy"
                                class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/biahoihanoithongthuy">Đại lý phân phối bia hơi Hà
                                    Nội Thông Thuỷ</a></blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-body p-3">
                        <h5>LIÊN HỆ HỖ TRỢ</h5>
                        <div>
                            <div class="border-bottom border-3 border-warning my-3 w-50"></div>
                        </div>
                        <div class="d-flex my-4">
                            <div class="me-2">
                                <img height="80" width="80" alt="Đại lý bia hơi Thông Thủy"
                                    src="/public/images/qr-code.png">
                            </div>
                            <div>
                                <div>Đại lý bia hơi Thông Thủy</div>
                                <div>Hotline: <a href="tel:0983068870" class="text-white">0983068870</a></div>
                                <div><a href="mailto:biahoithongthuy@gmail.com"
                                        class="text-white">biahoithongthuy@gmail.com</a></div>
                            </div>
                        </div>
                        <div class="my-3 text-center">
                            <a href="https://www.facebook.com/sharer.php?u=https://biahoithongthuy.com"><i
                                    class="fa fa-facebook fa-lg p-3 bg-white text-danger rounded-circle border"
                                    aria-hidden="true"></i></a>
                            <a href="https://twitter.com/?status=https://biahoithongthuy.com" class="mx-3"><i
                                    class="fa fa-twitter fa-lg p-3 bg-white text-danger rounded-circle border"
                                    aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=https://biahoithongthuy.com"><i
                                    class="fa fa-google fa-lg p-3 bg-white text-danger rounded-circle border"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center text-white">Copyright <b>@</b> <a href="/" class="text-white">Đại
                            lý
                            bia hơi Thông Thủy</a>. Powered by <a href="https://fatties.vercel.app"
                            title="Fatties Software - Thiết kế web" target="_blank" class="text-white">Fatties
                            Software</a>.</div>
                </div>
            </div>
        </div>
    </section>
    <script src='/public/bootstrap/bootstrap.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src='/public/js/script.js'></script>
</body>

</html>
