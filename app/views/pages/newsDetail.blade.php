@extends('layouts.main', ['news' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="/tin-tuc">Tin tức</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ truncateText($post->title, 30) }}</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-3"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <style>
        h3 {
            color: rgb(24, 100, 61);
            font-size: 18px;
        }

        h2 {
            color: #13653b;
            font-weight: 700;
            font-size: 24px;
            line-height: 1.4;
        }

        .tags li {
            line-height: 1.2;
            padding: 6px 8px;
            margin: 0 2px 5px 0;
            border: 1px solid #e3e3e3;
            display: inline-block;
        }

        .mt-30 {
            margin-top: 30px !important;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
    <section class="bg-light p-3">
        <article>
            <h2 style="color: #13653b;" class="border-bottom pb-3">{{ $post->title }}</h2>
            <div class="article-entry-info">
                <span class="post-date">{{ formatVietnameseDate($post->created_at) }}</span>
                <span> | 348 lượt xem</span>
            </div>
            <div>
                {!! $post->content !!}
            </div>
            <div class="mt-30">
                <label style="margin-bottom: .5rem;">
                    <b>Thẻ bài viết:</b>
                </label>
                <ul class="tags list-unstyled">
                    @foreach (explode(',', $post->tags) as $tag)
                        <li>{{ $tag }}</li>
                    @endforeach
                </ul>
            </div>
        </article>
    </section>
    <div class="mx-3">
        <button class="click-register" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">CLICK Đăng ký cửa
            hàng BIA HÀ NỘI ngay</button>
    </div>
@endsection
