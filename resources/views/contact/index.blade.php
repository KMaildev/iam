@extends('layouts.main')
@section('title', '- Contact Us')
@section('content')

    <section class="page-title layer-overlay overlay-dark-9 section-typo-light bg-img-center"
        data-tm-bg-img="{{ asset('data/contact_banner.jpeg') }}">
        <div class="container pt-50 pb-50">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">
                            Contact Us
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
                                    Contact Us
                                </span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-lg-7">
                    <h2 class="mt-0 mb-0">Interested in discussing?</h2>
                    <p class="font-size-20">
                        We Look forward to hearing from you.
                    </p>
                    <!-- Contact Form -->
                    <form autocomplete="off" action="{{ route('contact.store') }}" method="POST" id="create-form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Name <small>*</small></label>
                                    <input class="form-control" type="text" value="{{ old('name') }}"
                                        placeholder="Your Name*" name="name">
                                    @error('name')
                                        <div class="invalid-feedback text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Email <small>*</small></label>
                                    <input class="form-control" name="email" type="text" value="{{ old('email') }}"
                                        placeholder="Email Address">
                                    @error('email')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Subject <small>*</small></label>
                                    <input class="form-control" name="subject" type="text" value="{{ old('subject') }}"
                                        placeholder="Subject*">
                                    @error('subject')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input class="form-control" type="text" value="{{ old('phone') }}"
                                        placeholder="Your Phone*" name="phone">
                                    @error('phone')
                                        <div class="form-control-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label>Message</label>
                            <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="form-control-feedback" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit"
                                class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px"
                                data-loading-text="Please wait...">Send your message</button>
                            <button type="reset"
                                class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-5">
                    <h3 class="mt-0">Get in touch with us</h3>
                    <p style="text-align: justify;">
                        We welcome any inquiries or favorable feedback from you. You may submit in your inquiries via our
                        web form below, or alternatively, you may either email us at
                        <a href="mailto:contact@iam-myanmar.com">
                            contact@iam-myanmar.com
                        </a>
                        . We will try our very best to reply you as soon as possible.
                    </p>

                   

                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-044-call-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">
                                    Viber
                                </h5>
                                <div class="content">
                                    <a href="tel:+959 765557786">
                                        +959 765557786
                                    </a>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                     <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-044-call-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">
                                    Line
                                </h5>
                                <div class="content">
                                    <a href="tel: +959 765557786">
                                         +959 765557786
                                    </a>
                                </div>
                            </div>
                            
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                     <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-044-call-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">
                                    Skype
                                </h5>
                                <div class="content">
                                    <a href="tel: +959 765557786">
                                         +959 765557786
                                    </a>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon">
                                    <i class="flaticon-contact-043-email-1"></i>
                                </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Email</h5>
                                <div class="content">
                                    <a href="mailto:contact@iam-myanmar.com">
                                        contact@iam-myanmar.com
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div
                        class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                        <div class="icon-box-wrapper">
                            <div class="icon-wrapper">
                                <a class="icon icon-type-font-icon"> <i class="flaticon-contact-047-location"></i> </a>
                            </div>
                            <div class="icon-text">
                                <h5 class="icon-box-title mt-0">Address</h5>
                                <div class="content">
                                    No.93, Bandoola Road, 45 Ward, North Dagon Township, Yangon,Myanmar.
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="styled-icons icon-dark icon-sm icon-circled mt-20">
                        <li><a href="https://www.facebook.com/profile.php?id=100092574337904&mibextid=LQQJ4d " data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" data-tm-bg-color="#02B0E8"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" data-tm-bg-color="#D71619"><i class="fab fa-google-plus"></i></a></li>
                         <li><a href="#" data-tm-bg-color="green"><i class="fab fa-line"></i></a></li>
                          <li><a href="#" data-tm-bg-color="#009EDC"><i class="fab fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
