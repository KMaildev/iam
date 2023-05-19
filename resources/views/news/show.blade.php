@extends('layouts.main')
@section('title', '- Activities')
@section('content')
    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">

                <div class="col-md-8">
                    <div class="blog-posts single-post">
                        <article class="post clearfix mb-0">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img src="{{ $activity->photo }}" alt="images" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta d-flex no-bg no-border mt-15 pb-20">
                                    <div class="media-body pl-15">
                                        <div class="event-content float-start flip">
                                            <h3 class="entry-title text-capitalize pt-0 mt-0" style="font-size: 22px;">
                                                @if (session('key') == 'jp')
                                                    {{ $activity->title_jp ?? '' }}
                                                @else
                                                    {{ $activity->title_eng ?? '' }}
                                                @endif
                                            </h3>
                                        </div>
                                        <div class="entry-meta mt-0 mb-0">
                                            <span class="mb-10 text-gray-darkgray mr-10 font-size-13">
                                                <i class="far fa-calendar-alt mr-10 text-theme-colored1"></i>
                                                {{ $activity->upload_date ?? '' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <blockquote
                                    class="tm-sc-blockquote blockquote-style6  border-left-theme-colored quote-icon-theme-colored">
                                    <p style="text-align: justify" style="font-size: 20px;">
                                        @if (session('key') == 'jp')
                                            {!! $activity->description_jp ?? '' !!}
                                        @else
                                            {!! $activity->description_eng ?? '' !!}
                                        @endif
                                    </p>
                                </blockquote>

                                <div class="mt-5 mb-0">
                                    <h5 class="float-start flip mt-0 mr-3 text-theme-colored1">Share:</h5>
                                    <ul class="styled-icons icon-circled m-0">
                                        <li>
                                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                                data-tm-bg-color="#3A5795">
                                                <i class="fab fa-facebook text-white"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/intent/tweet?url={{ url()->current() }}"
                                                data-tm-bg-color="#55ACEE">
                                                <i class="fab fa-twitter text-white"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>

                    @if ($activity->gallery)
                        <div class="col-xl-12 wow fadeInUp py-3" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h3 class="title line-bottom line-bottom-theme-colored1" style="font-size: 22px;">
                                <span class="far fa-calendar-alt ms-0 me-3"></span>
                                Photo
                                <span class="text-theme-colored1">
                                    Gallery
                                </span>
                            </h3>
                            <div class="tm-sc-gallery tm-sc-gallery-grid gallery-style1-basic mb-lg-30">
                                <div id="gallery-holder-743344"
                                    class="isotope-layout grid-3 gutter-5 clearfix lightgallery-lightbox">
                                    <div class="isotope-layout-inner">
                                        @php
                                            $values = explode(',', $activity->gallery);
                                        @endphp
                                        @foreach ($values as $gallery)
                                            <div class="isotope-item laboratory surgery">
                                                <div class="isotope-item-inner">
                                                    <div class="tm-gallery">
                                                        <div class="tm-gallery-inner">
                                                            <div class="thumb">
                                                                <a href="#">
                                                                    <img src="{{ $gallery }}" class=""
                                                                        alt="images"
                                                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;" />
                                                                </a>
                                                            </div>
                                                            <div class="tm-gallery-content-wrapper">
                                                                <div class="tm-gallery-content">
                                                                    <div class="tm-gallery-content-inner">
                                                                        <div class="icons-holder-inner">
                                                                            <div
                                                                                class="styled-icons icon-dark icon-circled icon-theme-colored1">
                                                                                <a class="lightgallery-trigger styled-icons-item"
                                                                                    data-exthumbimage="{{ $gallery }}"
                                                                                    title="photo"
                                                                                    href="{{ $gallery }}">
                                                                                    <i class="fa fa-plus"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>


                <div class="col-md-4">
                    <div>
                        <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"
                            style="font-size: 30px; font-wight: bold;">
                            News & Events
                        </h4>
                        @foreach ($activities as $activitie)
                            <a href="{{ route('news.show', $activitie->id) }}">
                                <article class="post type-post status-publish format-standard has-post-thumbnail">
                                    <div class="entry-header">
                                        <div class="post-thumb lightgallery-lightbox">
                                            <div class="post-thumb-inner">
                                                <div class="thumb">
                                                    <img src="{{ $activitie->photo }}" alt="Image"
                                                        style="width: 100%; height: 240px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="entry-content">
                                        <h5 class="entry-title" style="font-size: 17px; font-weight: bold;">
                                            @if (session('key') == 'jp')
                                                {{ $activitie->title_jp ?? '' }}
                                            @else
                                                {{ $activitie->title_eng ?? '' }}
                                            @endif
                                        </h5>
                                        <div class="entry-meta mt-0 mb-0">
                                            <span class="mb-10 text-gray-darkgray mr-10 font-size-13">
                                                <i class="far fa-calendar-alt mr-10 text-theme-colored1"></i>
                                                {{ $activitie->upload_date ?? '' }}
                                            </span>
                                        </div>
                                        <div class="post-excerpt">
                                            <div class="mascot-post-excerpt" style="font-size: 17px; font-weight: bold;">
                                                @if (session('key') == 'jp')
                                                    {{ Str::limit($activitie->description_jp, 50) }}
                                                @else
                                                    {{ Str::limit($activitie->description_eng, 50) }}
                                                @endif
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </article>
                            </a>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
