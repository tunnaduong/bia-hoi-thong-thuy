@extends('layouts.admin')

@section('title', 'Products Management')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Products Management</h1>
        <a href="/admin/manage/products/create" class="btn btn-primary">Create New Product</a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mô tả ngắn</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->short_description }}</td>
                            <td>{{ $product->created_at }}</td>
                            <td>
                                <a href="/admin/manage/products/edit/{{ $product->id }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/manage/products/delete/{{ $product->id }}" method="POST"
                                    class="d-inline">
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
