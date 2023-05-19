@extends('layouts.main')
@section('title', '- News')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/event.jpeg') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            News
                        </h2>
                        <nav class="breadcrumbs" role="navigation" aria-label="Breadcrumbs">
                            <div class="breadcrumbs">
                                <span>
                                    <a href="{{ route('home') }}" rel="home">
                                        Home
                                    </a>
                                </span>
                                <span>
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="active">
                                    News
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @foreach ($news as $new)
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="tm-sc-blog blog-style-default mb-lg-30">
                            <article class="post type-post status-publish format-standard has-post-thumbnail">
                                <div class="entry-header">
                                    <div class="post-thumb lightgallery-lightbox">
                                        <div class="post-thumb-inner">
                                            <div class="thumb">
                                                <img src="{{ $new->photo }}" alt="Image"
                                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;" />
                                            </div>
                                        </div>
                                    </div>
                                    <a class="link" href="{{ route('news.show', $new->id) }}">
                                        <i class="fa fa-link"></i>
                                    </a>
                                </div>
                                <div class="entry-content">
                                    <h5 class="entry-title" style="font-size: 18px;">
                                        @if (session('key') == 'jp')
                                            {{ $new->title_jp ?? '' }}
                                        @else
                                            {{ $new->title_eng ?? '' }}
                                        @endif
                                    </h5>
                                    <div class="entry-meta mt-0 mb-0">
                                        <span class="mb-10 text-gray-darkgray mr-10 font-size-13">
                                            <i class="far fa-calendar-alt mr-10 text-theme-colored1"></i>
                                            {{ $new->upload_date ?? '' }}
                                        </span>
                                    </div>

                                    <div class="post-excerpt">
                                        <div class="mascot-post-excerpt">
                                            @if (session('key') == 'jp')
                                                {{ Str::limit($new->description_jp, 100) }}
                                            @else
                                                {{ Str::limit($new->description_eng, 100) }}
                                            @endif
                                        </div>
                                    </div>
                                    <div class="post-btn-readmore">
                                        <a href="{{ route('news.show', $new->id) }}" class="btn btn-plain-text-with-arrow">
                                            @if (session('key') == 'jp')
                                                詳細を見る
                                            @else
                                                View Details
                                            @endif
                                        </a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
