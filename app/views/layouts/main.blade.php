<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    <h3 class="banner-top mb-0 text-warning text-center py-3">
        ĐẠI LÝ BIA HƠI THÔNG THỦY
    </h3>
    <nav class="navbar navbar-light bg-light">
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
                        <a class="nav-link active" aria-current="page" href="/">TRANG CHỦ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gioi-thieu">GIỚI THIỆU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/san-pham">SẢN PHẨM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tin-tuc">TIN TỨC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/lien-he">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src='/public/bootstrap/bootstrap.min.js'></script>
</body>

</html>
