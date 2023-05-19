<header id="header" class="header header-layout-type-header-2rows">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
                    <ul class="element contact-info">
                        <li class="contact-phone">
                            <i class="fa fa-phone font-icon sm-display-block"></i>
                            Tel:
                            +959 765557785 , +959 765557786
                        </li>
                        <li class="contact-email">
                            <i class="fa fa-envelope font-icon sm-display-block"></i>
                            contact@iam-myanmar.com
                        </li>
                        <li class="contact-address">
                            <i class="fa fa-map font-icon sm-display-block"></i>
                            Yangon, Myanmar
                        </li>
                    </ul>
                </div>
                <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
                    <div class="element pt-0 pb-0">
                        <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
                            <li>
                                <a class="social-link"
                                    href="https://www.facebook.com/profile.php?id=100092574337904&mibextid=LQQJ4d "
                                    target="_blank">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link"
                                    href="https://instagram.com/iam_myanmar?igshid=NTc4MTIwNjQ2YQ== 
">
                                    <i class="fab fa-instagram" style="color:white;"></i>
                                </a>
                            </li>
                            <li>
                                <a class="social-link" href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('en') }}">
                                    <img src="{{ asset('data/us.gif') }}" style="width: 35px;">
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('jp') }}">
                                    <img src="{{ asset('data/jp.jpeg') }}" style="width: 35px;">
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="element pt-0 pt-lg-10 pb-0">
                        @auth
                            <a href="{{ route('dashboard.index') }}" class="btn btn-theme-colored2 btn-sm">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-theme-colored2 btn-sm">
                                <i class="fa fa-lock"></i>
                                Login
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-nav tm-enable-navbar-hide-on-scroll">
        <div class="header-nav-wrapper navbar-scrolltofixed">
            <div class="menuzord-container header-nav-container">
                <div class="container position-relative">
                    <div class="row header-nav-col-row">
                        <div class="col-sm-auto align-self-center">
                            <a class="menuzord-brand site-brand" href="{{ route('home') }}">
                                <img class="logo-default logo-1x" src="{{ asset('data/logo.jpg') }}" alt="Logo"
                                    style="width:200px;height:100%;">
                                <img class="logo-default logo-2x retina" src="{{ asset('data/logo.jpg') }}"
                                    alt="Logo">
                            </a>
                        </div>
                        <div class="col-sm-auto ms-auto pr-0 align-self-center">
                            <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="slide"
                                data-animation="none" data-align="right">
                                <ul id="main-nav" class="menuzord-menu">
                                    <li class="active menu-item">
                                        <a href="{{ route('home') }}">Home</a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="#">
                                            About Us
                                        </a>
                                        <ul class="dropdown">
                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    Our Company Profile
                                                </a>
                                            </li>


                                            <li>
                                                <a href="{{ route('message') }}">
                                                    Chairman's Message
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('org') }}">
                                                    Our Organization Chart
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('team') }}">
                                                    Our Team
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="#">
                                            Our Partners
                                        </a>
                                        <ul class="dropdown">

                                            <li>
                                                <a href="https://www.shwewutthmonekha.com/" target="_blank">
                                                    Shwe Wutt Mhone Ka Co.,Ltd
                                                </a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{ route('employer.index') }}">
                                            Employer Form
                                        </a>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{ route('news.index') }}">
                                            News & Events
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('activities.index') }}">
                                            Q&A
                                        </a>
                                    </li>

                                    <li class="menu-item">
                                        <a href="{{ route('contact.index') }}">
                                            Contact Us
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <div class="row d-block d-xl-none">
                            <div class="col-12">
                                <nav id="top-primary-nav-clone"
                                    class="menuzord d-block d-xl-none default menuzord-color-default menuzord-border-boxed menuzord-responsive"
                                    data-effect="slide" data-animation="none" data-align="right">
                                    <ul id="main-nav-clone"
                                        class="menuzord-menu menuzord-right menuzord-indented scrollable">
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
