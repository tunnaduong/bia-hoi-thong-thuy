@extends('layouts.main', ['product' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-2"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <section class="bg-light p-3">
        <div class="py-3 text-center alert bg-warning-subtle">
            <h3 class="w-100 text-center fw-bold text-uppercase">Sản phẩm | Đại lý bia hơi Thông Thủy</h3>
        </div>
        @foreach ($products as $product)
            <div class="my-3">
                <div class="d-flex">
                    <div class="me-3" style="width: 200px; height: 100px;">
                        <a href="{{ route('san-pham/' . $product->slug) }}">
                            <img class="img-fluid" alt="{{ $product->name }}"
                                src="{{ asset(json_decode($product->images)[0]) }}">
                        </a>
                    </div>
                    <div class="card-text w-100">
                        <h6 class="card-text"><a href="{{ route('san-pham/' . $product->slug) }}">{{ $product->name }}</a>
                        </h6>
                        <p class="small"><small>0 lượt xem | {{ formatVietnameseDate($product->created_at) }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
