@extends('layouts.admin')

@section('title', 'Create Product')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Create New Product</h1>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="/admin/manage/products/store" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="short_description" class="form-label">Short Description</label>
                    <textarea class="form-control" id="short_description" name="short_description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="images" class="form-label">Product Images</label>
                    <input type="file" class="form-control" id="images" name="images[]" accept="image/*" multiple
                        required>
                    <small class="text-muted">You can upload multiple images</small>
                </div>

                <div class="mb-3">
                    <a href="/admin/manage/products" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('description');
    </script>
@endsection
