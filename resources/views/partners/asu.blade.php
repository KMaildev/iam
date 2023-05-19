@extends('layouts.main')
@section('title', '- ASU TOMORROW')
@section('content')

    <section class="service-section bg-transparent mb-0">
        <div class="container" style="padding-top: 10px; padding-bottom: 5px">
            <div class="section-content">
                <div class="row">

                    <div class="col-md-12 col-lg-12 py-5 d-flex justify-content-center">
                        <img src="{{ asset('data/header.png') }}" alt=""
                            style="width: 40%; height: auto; background-size: center; object-fit: cover;">
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="tm-sc-services services-style-current-theme services-style-two">
                            <div class="tm-service">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('data/work_in_jp.jpeg') }}" alt="service"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <div class="overlay-inner">
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="title">
                                        <a href="">
                                            WORK IN JAPAN
                                        </a>
                                    </h3>
                                    <p><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4 col-lg-4">
                        <div class="tm-sc-services services-style-current-theme services-style-two">
                            <div class="tm-service">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('data/stay.jpeg') }}" alt="service"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <div class="overlay-inner">
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="title">
                                        <a href="">
                                            YOUR STAY <br> YOUR WAY IN JAPAN
                                        </a>
                                    </h3>
                                    <p><br><br></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-4">
                        <div class="tm-sc-services services-style-current-theme services-style-two">
                            <div class="tm-service">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('data/study.jpeg') }}" alt="service"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    <div class="overlay-inner">
                                    </div>
                                </div>
                                <div class="details">
                                    <h3 class="title">
                                        <a href="">
                                            STUDY IN JAPAN
                                        </a>
                                    </h3>
                                    <p>
                                        Fascinating Studying in Japan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="">
        <div class="container pt-110">
            <div class="section-title" style="background-color: rgb(243, 239, 239); padding: 15px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tm-sc-section-title section-title">
                            <div class="title-wrapper">
                                <div class="section-title-align-center">
                                    <div class="align-left">
                                        <p class="subtitle line-bottom">Welcome to ASU TOMORROW</p>
                                        <h2 class="title">Our Goal is to Make your Life Better</h2>
                                    </div>
                                    <div class="align-right">
                                        <div class="paragraph">
                                            <p class="mb-0" style="text-align: justify">
                                                Japanese is not just a language -- it is a culture. The people in Japan have
                                                a unique way of thinking and living that you can only understand if you know
                                                their language. We offer various Japanese courses to help foreigners learn
                                                about Japan’s unique customs, traditions and way of life.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content py-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cp-features-iconbox">
                            <div class="tm-feature">
                                <div class="icon-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('assets/images/icons/f01.png') }}" alt="Icon">
                                    </div>
                                    <img class="shape-icon" src="{{ asset('assets/images/photos/shape-circle.png') }}"
                                        alt="Image">
                                </div>
                                <h3 class="title">
                                    Language School
                                </h3>
                                <p style="font-size: 13px;">
                                    ဘာသာစကားသင်တန်းကျောင်း
                                </p>
                            </div>

                            <div class="tm-feature">
                                <div class="icon-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('data/fair.png') }}" alt="Icon">
                                    </div>
                                    <img class="shape-icon" src="{{ asset('assets/images/photos/shape-circle.png') }}"
                                        alt="Image">
                                </div>
                                <h3 class="title">
                                    Job Training
                                </h3>
                                <p style="font-size: 13px;">
                                    လေ့လာရေးသင်တန်းသား
                                </p>
                            </div>

                            <div class="tm-feature">
                                <div class="icon-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('data/job-offer.png') }}" alt="Icon">
                                    </div>
                                    <img class="shape-icon" src="{{ asset('assets/images/photos/shape-circle.png') }}"
                                        alt="Image">
                                </div>
                                <h3 class="title">
                                    Tokutei
                                </h3>
                                <p style="font-size: 13px;">
                                    အထူးကျွမ်းကျင်လုပ်သား
                                </p>
                            </div>

                            <div class="tm-feature">
                                <div class="icon-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('data/workers.png') }}" alt="Icon">
                                    </div>
                                    <img class="shape-icon" src="{{ asset('assets/images/photos/shape-circle.png') }}"
                                        alt="Image">
                                </div>
                                <h3 class="title">
                                    Other Country Skill Workers
                                </h3>
                                <p style="font-size: 13px;">
                                    ပြည်ပရောက်ကျွမ်းကျင်လုပ်သား
                                </p>
                            </div>

                            <div class="tm-feature">
                                <div class="icon-wrapper">
                                    <div class="icon">
                                        <img src="{{ asset('data/man.png') }}" alt="Icon">
                                    </div>
                                    <img class="shape-icon" src="{{ asset('assets/images/photos/shape-circle.png') }}"
                                        alt="Image">
                                </div>
                                <h3 class="title">
                                    SSW Workers
                                </h3>
                                <p style="font-size: 13px;">
                                    ဂျပန်ပြန်ကျွမ်းကျင်လုပ်သား
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section data-tm-bg-img="{{ asset('assets/images/photos/map.png') }}">
        <div class="container py-5" style="padding-top: 10px; padding-bottom: 5px">
            <div class="section-title zp-1">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <p class="subtitle line-bottom">
                                    TOKUTEI GINOU
                                </p>
                                <h2 class="title" style="font-size: 27px;">
                                    အထူးကျွမ်းကျင်လုပ်သား
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($tokuteis as $tokutei)
                    <div class="col-md-3 col-lg-3 col-xl-3 mb-3">
                        <div class="tm-sc-blog blog-style-default mb-lg-30">
                            <article class="post type-post status-publish format-standard has-post-thumbnail">
                                <div class="entry-header">
                                    <div class="post-thumb lightgallery-lightbox">
                                        <div class="post-thumb-inner">
                                            <div class="thumb">
                                                <img src="{{ $tokutei->photo }}" alt="Image"
                                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-content" style="padding: 10px">
                                    <h5 class="entry-title" style="font-size: 15px;">
                                        {{ $tokutei->title ?? '' }}
                                    </h5>
                                </div>
                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="" data-tm-bg-color="#F6F2F0" data-tm-bg-img="images/photos/map.png">
        <div class="container " style="padding-top: 10px; padding-bottom: 5px">
            <div class="section-title zp-1">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <p class="subtitle line-bottom">Japanese</p>
                                <h2 class="title" style="font-size: 25px;">
                                    Language School
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tm-sc-services services-style-current-theme">
                            <div class="owl-carousel owl-theme tm-owl-carousel-5col tm-services-carousel">

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://content.r9cdn.net/rimg/dimg/30/2c/c2817db5-city-21033-159036d7254.jpg?width=1366&height=768&xhint=1051&yhint=774&crop=true"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            TOKYO
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://cdn.cheapoguides.com/wp-content/uploads/sites/2/2020/07/yokohama-minato-mirai_xavierarnau_iStock-475375242-1024x600.jpg"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            YOKOHAMA
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://jw-webmagazine.com/wp-content/uploads/2022/10/Kyoto-main-image-min.jpg"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            YOKOHAMA
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://static.thehoneycombers.com/wp-content/uploads/sites/2/2022/11/things-to-do-in-osaka-Satoshi-Hirayama-via-Pexels.jpg"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            OSAKA
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://t4.ftcdn.net/jpg/02/45/95/03/360_F_245950391_arw1ZmlgwV7A7FHK5Ef79LMw9Pf9uCmL.jpg"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            KOBE
                                        </h3>
                                    </div>
                                </div>

                            </div>
                        </div>
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
                                    Our Japanese Teachers
                                </p>
                                <h2 class="title" style="font-size: 25px;">
                                    Start Your Japanese Adventure with ASU TOMORROW Japanese Language School
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-content">
                <div class="row">

                    @foreach ($teachers as $teacher)
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


    <section class="our-team" style="background-color: white">
        <div class="container" style="padding-top: 4px; padding-bottom: 5px">
            <div class="section-content">

                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title" style="font-size: 40px;">
                                    ASU
                                    <span class="text-theme-colored1">
                                        TOMORROW
                                    </span>
                                </h2>
                                <p
                                    style="background-color: #c65f24; color: white; font-size: 20px; border-radius: 25px; border: 2px solid #B1812C;">
                                    Course Schedule
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr style="background-color: #e9eeef">
                                    <th style="text-align: center; font-weight: bold;">
                                        LEVEL
                                    </th>

                                    <th style="text-align: center; font-weight: bold;">
                                        START DATE
                                    </th>

                                    <th style="text-align: center; font-weight: bold;">
                                        DATE & TIME
                                    </th>

                                    <th style="text-align: center; font-weight: bold;">
                                        DURATION
                                    </th>

                                    <th style="text-align: center; font-weight: bold;">
                                        LOCATION
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($course_schedules as $course_schedule)
                                    <tr>
                                        <td style="text-align: center; font-weight: bold;">
                                            {{ $course_schedule->level ?? '' }}
                                        </td>

                                        <td style="text-align: center; font-weight: bold;">
                                            {{ $course_schedule->start_date ?? '' }}
                                        </td>

                                        <td style="text-align: center; font-weight: bold;">
                                            {{ $course_schedule->date_time ?? '' }}
                                        </td>

                                        <td style="text-align: center; font-weight: bold;">
                                            {{ $course_schedule->duration ?? '' }}
                                        </td>

                                        <td style="text-align: center; font-weight: bold;">
                                            {{ $course_schedule->location ?? '' }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
