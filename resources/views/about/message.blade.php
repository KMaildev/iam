@extends('layouts.main')
@section('title', '- MD Message')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/activities_banner.png') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            Chairman's Message
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
                                    Chairman's Message
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: rgb(244, 237, 237); padding: 20px;">
        <div class="container d-flex justify-content-center">
            <div class="col-md-9">
                <div class="row">

                    <!--<div class="col-md-3 col-xl-3">-->
                    <!--    <div class="tm-sc-team-box">-->
                    <!--        <div class="tm-thumb">-->
                    <!--            <img class="img-fullwidth" src="https://nexocode.com/images/about/slider/m.wojcik.webp"-->
                    <!--                alt="1.jpg"-->
                    <!--                style="width: 100%; height: 270px; background-size: center; object-fit: cover; border: 3px solid #B1812C; padding: 7px;">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-xl-8 col-lg-8">
                        <div class="part-txt">
                            <div class="biography">
                                <p style="font-size: 17px;  font-family:Times New Roman; text-align: justify">
                                    I am pleased to extend a warm welcome to you on behalf of our team at the employment agency. As the chairman, I would like to express our gratitude for your continued trust and support in our services. Thank you once again for choosing our agency as your trusted partner in employment. We look forward to continuing to work with you and to helping you achieve success.
                                    <br><br>
                                    
                                </p>
                                
                                <p>
                                    Sincerely,<br>
                                    Mr.Han Myo Win
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
@endsection
