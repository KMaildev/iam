@extends('layouts.main')
@section('title', '- Activities')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/activities_banner.png') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            Q & A
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
                                    Q&A
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container" style="padding-top: 10px;">
            <div class="row d-flex justify-content-center">
                <div class="col-md-9 col-lg-9 col-sm-9">
                    <h4 class="heading-title" style="text-align: center">
                        I Am Myanmar Co.,Ltd is your trusted recruitment and management partner for skilled talent in
                        Southeast
                        Asia and Myanmar.
                    </h4>
                </div>
                <hr>
                @foreach ($activities as $activitie)
                    <div class="col-md-12">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title">
                                @if (session('key') == 'jp')
                                    {{ $activitie->description_jp ?? '' }}
                                @else
                                    {{ $activitie->description_eng ?? '' }}
                                @endif
                            </h4>
                        </div>

                        <div class="tm-sc-gallery tm-sc-gallery-grid">
                            <!-- Isotope Gallery Grid -->
                            <div class="isotope-layout grid-4 gutter-10 clearfix lightgallery-lightbox">
                                <div class="isotope-layout-inner">
                                    <!-- Isotope Item Start -->
                                    @php
                                        $values = explode(',', $activitie->images);
                                    @endphp
                                    @foreach ($values as $gallery)
                                        <div class="isotope-item">
                                            <div class="isotope-item-inner">
                                                <div class="tm-gallery">
                                                    <div class="tm-gallery-inner">
                                                        <div class="thumb">
                                                            <a class="lightgallery-trigger styled-icons-item"
                                                                data-exthumbimage="{{ $gallery }}"
                                                                data-src="{{ $gallery }}"
                                                                title="{{ $activitie->description_eng ?? '' }}"
                                                                href="{{ $gallery }}">
                                                                <img width="672" height="448" src="{{ $gallery }}"
                                                                    class="" alt="images"
                                                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Isotope Item End -->
                                </div>
                            </div>
                            <!-- End Isotope Gallery Grid -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
