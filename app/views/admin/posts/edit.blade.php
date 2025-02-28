@extends('layouts.admin')

@section('title', 'Chỉnh sửa bài viết')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Chỉnh sửa bài viết</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/posts/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Nội dung</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="tagInput" class="form-label">Thẻ bài viết</label>
                    <input type="text" id="tagInput" class="form-control" data-role="tagsinput">
                    <!-- Hidden input field to store tags -->
                    <input type="hidden" name="tags" id="hiddenTags">
                    <input type="hidden" name="existing_tags" value="{{ $post->tags }}">
                    <div id="tagContainer" class="mt-2">
                        @if (isset($post->tags))
                            @foreach (explode(',', $post->tags) as $tag)
                                <span class="badge bg-primary me-1">
                                    {{ $tag }}
                                    <span class="ms-1" style="cursor:pointer;"
                                        onclick="removeTag(this, '{{ $tag }}')">&times;</span>
                                </span>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Upload new image -->
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Tải lên hình ảnh mới</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    <small class="text-muted">Bạn có thể tải lên 1 hình ảnh</small>
                </div>

                @if (isset($post->thumbnail))
                    <div class="mb-3">
                        <input type="hidden" name="existing_image" value="{{ $post->thumbnail }}">
                        <img src="{{ asset($post->thumbnail) }}" alt="Post Image" style="width: 120px; height: auto;">
                    </div>
                @endif

                <div class="mb-3">
                    <a href="/admin/manage/posts" class="btn btn-secondary">Hủy</a>
                    <button type="submit" class="btn btn-primary">Cập nhật bài viết</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
