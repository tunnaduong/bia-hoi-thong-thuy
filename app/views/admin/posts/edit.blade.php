@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Edit Post</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/posts/update/{{ $post->id }}" method="POST">
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
                    <a href="/admin/manage/posts" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
