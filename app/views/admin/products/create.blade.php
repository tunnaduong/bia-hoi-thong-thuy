@extends('layouts.admin')

@section('title', 'Tạo sản phẩm mới')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tạo sản phẩm mới</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/products/store" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Mô tả ngắn</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả chi tiết</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Ảnh sản phẩm</label>
                    <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple
                        required>
                    <small class="text-muted">Bạn có thể tải lên nhiều ảnh cùng lúc</small>
                </div>

                <div class="mb-3">
                    <a href="/admin/manage/products" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Tạo sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('description');
    </script>
@endsection
