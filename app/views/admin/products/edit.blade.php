@extends('layouts.admin')

@section('title', 'Sửa sản phẩm')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Sửa sản phẩm</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/products/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Mô tả ngắn</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ $product->short_description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Thông tin sản phẩm</label>
                    <textarea class="form-control" id="info" name="info" rows="3" required>{{ $product->info }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Mô tả chi tiết</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
                </div>

                <!-- Show existing images with delete buttons -->
                <div class="mb-3">
                    <label class="form-label">Ảnh hiện tại</label>
                    <div id="image-preview" class="d-flex flex-wrap">
                        @foreach (json_decode($product->images ?? '[]', true) as $image)
                            <div class="m-2 position-relative">
                                <img src="/{{ $image }}" alt="Product Image" class="img-thumbnail"
                                    style="width: 120px; height: auto;">
                                <button type="button"
                                    class="btn btn-danger btn-sm position-absolute top-0 start-100 translate-middle"
                                    onclick="deleteImage('{{ $image }}', this)">
                                    X
                                </button>
                                <input type="hidden" name="existing_images[]" value="{{ $image }}">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- JavaScript to remove image from UI -->
                <script>
                    function deleteImage(imagePath, button) {
                        if (confirm("Bạn có chắc muốn xóa ảnh này?")) {
                            let parentDiv = button.parentElement;
                            parentDiv.remove(); // Remove from UI
                        }
                    }
                </script>


                <!-- Upload new images -->
                <div class="mb-3">
                    <label for="images" class="form-label">Tải lên ảnh sản phẩm mới</label>
                    <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple>
                    <small class="text-muted">Bạn có thể tải lên nhiều ảnh cùng lúc</small>
                </div>

                <div class="mb-3">
                    <a href="/admin/manage/products" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Cập nhật sản phẩm</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('info');
        CKEDITOR.replace('description');
    </script>
@endsection
