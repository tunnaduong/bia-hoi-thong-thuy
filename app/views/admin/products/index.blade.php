@extends('layouts.admin')

@section('title', 'Quản lý sản phẩm')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Quản lý sản phẩm</h1>
        <a href="/admin/manage/products/create" class="btn btn-primary">Tạo sản phẩm mới</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ảnh đại diện</th>
                        <th>Tên sản phẩm</th>
                        <th>Tạo lúc</th>
                        <th>Cập nhật lúc</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td><img src="{{ asset(json_decode($product->images)[0]) }}" style="width: 120px; height: auto;">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>{{ $product->updated_at }}</td>
                            <td>
                                <a href="/admin/manage/products/edit/{{ $product->id }}"
                                    class="btn btn-sm btn-warning">Sửa</a>
                                <form action="/admin/manage/products/delete/{{ $product->id }}" method="POST"
                                    class="d-inline">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
