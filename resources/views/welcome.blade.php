@extends('layouts.main')
@section('title', '- Home')
@section('content')
    <section class="about-section pt-120 pb-120">
        <div class="position-relative">
            <div class="container">
                <div class="section-content">
                    <div class="row">

                        <div class="col-sm-12 col-lg-12 col-xl-4 order-1 order-xl-0">
                            <div class="about-style-current-theme">
                                <div class="tm-sc-animated-layer-images">
                                    <div class="layer-image-wrapper">
                                        <div class="layer-image">
                                            <img class="w-100" src="{{ asset('data/about.jpeg') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-12 col-xl-8 order-0 order-xl-1">
                            <div class="about-style-current-theme">
                                <div class="tm-sc-about-content about-content">
                                    <div class="tm-sc-section-title section-title mb-0">
                                        <div class="title-wrapper mb-0">
                                            <p class="subtitle line-bottom">
                                                Welcome to I Am Myanmar Co.,Ltd
                                            </p>
                                            <h2 class="title">
                                                Company Profile
                                            </h2>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="paragraph">
                                                        <p style="text-align: justify">
                                                            Your Foreign Worker Recruitment and Employment Agency joint @ Myanmar.
                                                        </p>

                                                        <p style="text-align: justify">
                                                            Our Company, I Am Myanmar Co.,Ltd is one of the reputed foreign worker recruitment groups that includes all agencies from Myanmar, a licensed with the Ministry of Investment and Foreign Economic Relations (MIFER).I Am Myanmar Co.,Ltd provides

                                                        </p>
                                                    </div>
                                                    <div class="tm-sc-unordered-list list-style">
                                                        <ul>
                                                            <li>
                                                                <img class="icon-img"
                                                                    src="{{ asset('assets/images/icons/check-01.png') }}"
                                                                    alt="Image">
                                                                the specialized recruitment services
                                                            </li>
                                                            <li>
                                                                <img class="icon-img"
                                                                    src="{{ asset('assets/images/icons/check-01.png') }}"
                                                                    alt="Image">different levels of employees on our client’s demand in various industries
                                                            </li>
                                                            <li>
                                                                <img class="icon-img"
                                                                    src="{{ asset('assets/images/icons/check-01.png') }}"
                                                                    alt="Image">safe and secure working environment for employees
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="about-contact">
                                                        <div class="icon">
                                                            <img src="{{ asset('assets/images/icons/call.png') }}"
                                                                alt="Image">
                                                        </div>
                                                        <h4>Clarify your queries call us now</h4>
                                                        <a class="btn btn-white" href="tel: +959 - 765 148 521">
                                                            +959 - 765 148 521
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
                </div>
            </div>
            <div class="cp-shape"></div>
        </div>
    </section>



    


    <section class="position-relative">
        <div class="container pb-0 pt-0">
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="divider-current-theme-style2">
                            <h4 class="title text-theme-colored1">
                                3 Years Work Experience In Other Country
                            </h4>
                            <div class="icon-box">
                                <div class="icon icon-type-img-icon">
                                    <img src="{{ asset('assets/images/icons/d02.png') }}" alt="Icon">
                                </div>
                            </div>
                            <h4 class="title text-theme-colored3">
                                3 Years Work Experience In Myanmar
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layer-image-wrapper layer-image-divider2">
            <div class="layer-image-left" data-tm-bg-img="{{ asset('data/japan.jpeg') }}"></div>
            <div class="layer-image-right" data-tm-bg-img="{{ asset('data/bagan.jpeg') }}"></div>
        </div>
    </section>


    <section class="" data-tm-margin-bottom="-100px">
        <div class="container pb-0 pt-0">
            <div class="cp-service-iconbox-style zp-1">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tm-sc-icon-box icon-box cp-hover-effect">
                            <div class="icon-box-wrapper">
                                <div class="icon icon-type-img-icon">
                                    <img src="{{ asset('data/focus.png') }}" alt="Icon" style="width: 60px">
                                    <h4 class="icon-box-title">
                                        Our Vision
                                    </h4>
                                </div>
                                <div class="icon-text">
                                    <div class="content">
                                        <p style="text-align: justify">
                                            Whether you are a
                                            global organization or a small start-up, we are devoted to helping you grow
                                            rapidly with minimum risks, losses, as well as maximum satisfaction and results.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tm-sc-icon-box icon-box cp-hover-effect">
                            <div class="icon-box-wrapper">
                                <div class="icon icon-type-img-icon">
                                    <img src="{{ asset('data/target.png') }}" alt="Icon" style="width: 60px">
                                    <h4 class="icon-box-title">
                                        Our Mission
                                    </h4>
                                </div>
                                <div class="icon-text">
                                    <div class="content">
                                        <p style="text-align: justify">
                                            At I Am Myanmar Co.,Ltd, we aim to successfully connect businesses and job
                                            seekers for a better future by offering smart, measurable, and efficient
                                            recruitment services.
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="tm-sc-icon-box icon-box cp-hover-effect">
                            <div class="icon-box-wrapper">
                                <div class="icon icon-type-img-icon">
                                    <img src="{{ asset('data/value.png') }}" alt="Icon" style="width: 60px">
                                    <h4 class="icon-box-title">
                                        Our Value
                                    </h4>
                                </div>
                                <div class="icon-text">
                                    <div class="content">
                                        <p style="text-align: justify">
                                            Passion for Excellence >> We contribute the best service and employees to maintain our highest level of excellence. Moreover, we will also provide professional and language trainings for employees to meet criteria and requirements of International standard.
                                        </p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="" data-tm-bg-color="#F6F2F0" data-tm-bg-img="images/photos/map.png">
        <div class="container pt-200" style="padding-top: 10px; padding-bottom: 5px">
            <div class="section-title zp-1">
                <div class="row justify-content-md-center">
                    <div class="col-md-8">
                        <div class="tm-sc-section-title section-title text-center">
                            <div class="title-wrapper">
                                <h2 class="title">Our Sending Country</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tm-sc-services services-style-current-theme">
                            <div class="owl-carousel owl-theme tm-owl-carousel-4col tm-services-carousel">

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://assets-news.housing.com/news/wp-content/uploads/2022/08/16093623/10-best-places-to-visit-in-Singapore-for-a-perfect-trip.jpg"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            Singapore
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQn4iyAQRkVpe0pQerGO3Qjl2TpLxugkcxMcyavpKBnpRJIK4SCUX4wP6uA5Un_vaM6K9c&usqp=CAU"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            Thailand
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="https://media.istockphoto.com/id/466842820/photo/petronas-towers.jpg?s=612x612&w=0&k=20&c=X_Kl-W_ulJEzjvaaT8gRNTQWHboyLKaedXol5EPhGdI="
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            Malaysia
                                        </h3>
                                    </div>
                                </div>

                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="{{ asset('data/korea.webp') }}"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            Korea
                                        </h3>
                                    </div>
                                </div>
                                <div class="tm-carousel-item">
                                    <div class="tm-service">
                                        <div class="thumb">
                                            <img class="w-100"
                                                src="{{ asset('data/japan.jpeg') }}"
                                                alt="service"
                                                style="width: 100%; height: 230px; background-size: center; object-fit: cover;">
                                        </div>
                                        <h3 class="title" style="font-size: 18px; text-align: center;">
                                            Japan
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



    <section class="">
        <div class="container pt-110">
            <div class="section-title" style="background-color: rgb(243, 239, 239); padding: 15px;">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tm-sc-section-title section-title">
                            <div class="title-wrapper">
                                <div class="section-title-align-center">
                                    <div class="align-left">
                                        
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
                                                                <img width="672" height="448"
                                                                    src="{{ $gallery }}" class=""
                                                                    alt="images"
                                                                    style="width: 100%; height: 250px; background-size: center; object-fit: cover;" />
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
