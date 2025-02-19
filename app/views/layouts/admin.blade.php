<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            color: #333;
            padding: 0.5rem 1rem;
            margin: 0.2rem 0;
            border-radius: 0.25rem;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: #f8f9fa;
            color: #0d6efd;
        }

        .sidebar .nav-link i {
            margin-right: 0.5rem;
        }

        .main-content {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 bg-white sidebar">
                <div class="d-flex flex-column p-3">
                    <h5 class="text-center mb-4 py-2 border-bottom">Admin Dashboard</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="/admin"
                                class="nav-link {{ isset($section) && $section === 'home' ? 'active' : '' }}">
                                <i class="bi bi-house"></i>
                                Bảng điều khiển
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/manage/posts"
                                class="nav-link {{ isset($section) && $section === 'posts' ? 'active' : '' }}">
                                <i class="bi bi-file-text"></i>
                                Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/manage/products"
                                class="nav-link {{ isset($section) && $section === 'products' ? 'active' : '' }}">
                                <i class="bi bi-box"></i>
                                Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="bi bi-box-arrow-right"></i>
                                Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content p-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
