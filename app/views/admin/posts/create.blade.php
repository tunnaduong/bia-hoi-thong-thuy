@extends('layouts.admin')

@section('title', 'Tạo bài viết mới')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Tạo bài viết mới</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/posts/store" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="tagInput" class="form-label">Thẻ bài viết</label>
                    <input type="text" id="tagInput" class="form-control" data-role="tagsinput">
                    <!-- Hidden input field to store tags -->
                    <input type="hidden" name="tags" id="hiddenTags">
                    <div id="tagContainer" class="mt-2"></div>
                </div>

                <!-- Upload new image -->
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Tải lên hình ảnh mới</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    <small class="text-muted">Bạn có thể tải lên 1 hình ảnh</small>
                </div>

                <div class="mb-3">
                    <a href="/admin/manage/posts" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Tạo bài viết</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content', {
            on: {
                instanceReady: function(ev) {
                    this.dataProcessor.htmlFilter.addRules({
                        elements: {
                            table: function(element) {
                                element.addClass('table table-striped');
                            }
                        }
                    });
                }
            }
        });
    </script>
@endsection
