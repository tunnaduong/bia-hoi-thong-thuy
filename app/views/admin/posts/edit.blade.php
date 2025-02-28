@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Post</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/posts/update/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}"
                        required>
                </div>

                <!-- Upload new image -->
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Upload New Image</label>
                    <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept="image/*">
                    <small class="text-muted">You can upload one image</small>
                </div>

                @if (isset($post->thumbnail))
                    <div class="mb-3">
                        <input type="hidden" name="existing_image" value="{{ $post->thumbnail }}">
                        <img src="{{ asset($post->thumbnail) }}" alt="Post Image" style="width: 120px; height: auto;">
                    </div>
                @endif

                <div class="mb-3">
                    <a href="/admin/manage/posts" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
