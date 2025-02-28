@extends('layouts.admin')

@section('title', 'Quản lý bài viết')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Quản lý bài viết</h1>
        <a href="/admin/manage/posts/create" class="btn btn-primary">Tạo bài viết mới</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh đại diện</th>
                        <th>Tiêu đề</th>
                        <th>Tạo lúc</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>
                                @if (isset($post->thumbnail))
                                    <img src="{{ asset($post->thumbnail) }}" alt="Post Image"
                                        style="width: 100px; height: auto; aspect-ratio: 16 / 9; object-fit: cover;">
                                @endif
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                                <a href="/admin/manage/posts/edit/{{ $post->id }}" class="btn btn-sm btn-warning">Sửa</a>
                                <form action="/admin/manage/posts/delete/{{ $post->id }}" method="POST"
                                    class="d-inline">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
