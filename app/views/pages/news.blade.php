@extends('layouts.main', ['news' => 'active'])

@section('content')
    <section class="py-3">
        <div class="d-flex align-items-center">
            <ol class="breadcrumb flex-grow-1 m-0 ms-2">
                <li class="breadcrumb-item fw-bold"><a href="/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tin tức</li>
            </ol>
            <div class="small">
                <span id="clock" class="small me-3"></span>
            </div>
            <script>
                common.clock(true, 'clock')
            </script>
        </div>
    </section>
    <section class="bg-light p-3">
        @foreach ($posts as $post)
            <article class="article-item clearfix">
                <div class="row">
                    <div class="col-4">
                        <div class="inner-image">
                            <a href="{{ route('tin-tuc/' . $post->slug) }}" title="{{ $post->title }}">
                                <img class="img-fluid" alt="{{ $post->title }}" src="{{ asset($post->thumbnail) }}">
                            </a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="inner-content">
                            <h4 class="article-title">
                                <a href="{{ route('tin-tuc/' . $post->slug) }}">{{ truncateText($post->title, 60) }}</a>
                            </h4>
                            <div class="article-entry-info">
                                <span class="post-date">{{ formatVietnameseDate($post->created_at) }}</span>
                            </div>
                            <div class="article-description">
                                {{ truncateText(stripTagsKeepUtf8($post->content)) }}
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </section>
@endsection
