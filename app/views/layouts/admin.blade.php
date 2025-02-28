<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
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

        .cke_notifications_area {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 px-0 bg-white sidebar">
                <div class="d-flex flex-column p-3">
                    <h5 class="text-center mb-4 py-2 border-bottom">Trang quản trị</h5>
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
                                Quản lý bài viết
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/manage/products"
                                class="nav-link {{ isset($section) && $section === 'products' ? 'active' : '' }}">
                                <i class="bi bi-box"></i>
                                Quản lý sản phẩm
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tagInput = document.getElementById("tagInput");
            const tagContainer = document.getElementById("tagContainer");
            const hiddenTags = document.getElementById("hiddenTags");
            let tags = [];

            // Load existing tags
            let existingTags = document.querySelector('input[name="existing_tags"]').value;
            if (existingTags.trim() !== "") {
                tags = existingTags.split(',').map(tag => tag.trim());
                updateTagDisplay();
            }

            tagInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter" && tagInput.value.trim() !== "") {
                    event.preventDefault();
                    const tagText = tagInput.value.trim();

                    // Prevent duplicate tags
                    if (!tags.includes(tagText)) {
                        tags.push(tagText);
                        updateTagDisplay();
                    }
                    tagInput.value = "";
                }
            });

            // Remove tag function
            window.removeTag = function(element, tagText) {
                tags = tags.filter(tag => tag !== tagText);
                updateTagDisplay();
            };

            // Update the UI and hidden input field
            function updateTagDisplay() {
                tagContainer.innerHTML = ""; // Clear tags
                tags.forEach(tag => {
                    const tagElement = document.createElement("span");
                    tagElement.className = "badge bg-primary me-1";
                    tagElement.innerHTML =
                        `${tag} <span class="ms-1" style="cursor:pointer;" onclick="removeTag(this, '${tag}')">&times;</span>`;
                    tagContainer.appendChild(tagElement);
                });

                // Update hidden input for form submission
                hiddenTags.value = tags.join(",");
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
