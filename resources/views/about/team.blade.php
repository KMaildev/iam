@extends('layouts.main')
@section('title', '- Our Team')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/team.jpeg') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            Our Team
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
                                    Our Team
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="z-index-1">
        <div class="container">

            <div class="section-title zp-1">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <p class="subtitle line-bottom">
                                    Our Management Team
                                </p>
                                <p >
                                    Get to know the talented individuals who make up our team and are committed to providing top-quality employment solutions. Browse through their profiles and learn more about their experience and expertise. We're excited to help you achieve your foreign goals!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">

                    @foreach ($teams as $teacher)
                        <div class="col-md-3">
                            <div class="tm-sc-staff staff-style-current-theme mb-sm-30">
                                <div class="tm-staff">
                                    <div class="staff-inner">
                                        <div class="thumb cp-hover-effect">
                                            <img src="{{ $teacher->photo }}" alt="Image"
                                                style="width: 90%; height: 260px; background-size: center; object-fit: cover;">
                                        </div>
                                        <div class="staff-content mb-30">
                                            <h3 class="name">
                                                {{ $teacher->name ?? '' }}
                                            </h3>
                                            <br>
                                            <div class="staff-social-links">
                                                <ul>
                                                    <li>
                                                        <a target="_blank" href="#">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="#">
                                                            <i class="fab fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="#">
                                                            <i class="fab fa-instagram"></i>
                                                        </a>
                                                    </li>
                                                </ul>
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
    </section>

@endsection
@section('script')
@endsection
