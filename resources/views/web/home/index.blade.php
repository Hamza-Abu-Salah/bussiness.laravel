<!DOCTYPE html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--====== Title ======-->
    <title>Business | Bootstrap 5 Business Template</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('webassets/images/favicon.svg') }}" type="image/svg" />

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/bootstrap.min.css') }}" />

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/lineicons.css') }}" />

    <!--====== Tiny Slider css ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/tiny-slider.css') }}" />

    <!--====== gLightBox css ======-->
    <link rel="stylesheet" href="{{ asset('webassets/css/glightbox.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('webassets/css/style.css') }}" />
</head>

<body>

    <!--====== NAVBAR NINE PART START ======-->

    <section class="navbar-area navbar-nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        @foreach ($data_setting as $info)
                            <a class="navbar-brand" href="index.html">
                                {{-- <img src="{{ asset('uploads/settings/' . $info->logo_header) }}" alt="Logo" /> --}}
                            </a>
                        @endforeach
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="#hero-area">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#services">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a class="page-scroll" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll" href="#contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>

    <!--====== NAVBAR NINE PART ENDS ======-->


    <!-- Start header Area -->
    <section id="hero-area" class="header-area header-eight">
        <div class="container">
            @foreach ($data_home as $info)
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="header-content">
                            <h1>{{ $info->title }} & {{ $info->text }}</h1>
                            <p>
                                {{ $info->content }}
                            </p>
                            <div class="button">
                                <a href="{{ $info->btn_link }}" class="glightbox video-button">
                                    <span class="btn icon-btn rounded-full">
                                        <i class="lni lni-play"></i>
                                    </span>
                                    <span class="text">{{ $info->btn_text }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="header-image">
                            <img src="{{ asset('uploads/home/' . $info->image) }}" alt="#" />
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- End header Area -->

    <!--====== ABOUT FIVE PART START ======-->

    <section class="about-area about-five">
        <div class="container">
            @foreach ($data_about as $info)
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="about-image-five">
                            <svg class="shape" width="106" height="134" viewBox="0 0 106 134" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
                                <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
                                <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
                                <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
                                <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
                            </svg>
                            <img src=" {{ asset('uploads/about/' . $info->image) }} " alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="about-five-content">
                            <h6 class="small-title text-lg">About Us</h6>
                            <h2 class="main-title fw-bold">{{ $info->title }}</h2>
                            <div class="about-five-tab">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-who" type="button" role="tab"
                                            aria-controls="nav-who" aria-selected="true">Who We Are</button>
                                        <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-vision" type="button" role="tab"
                                            aria-controls="nav-vision" aria-selected="false">our Vision</button>
                                        <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-history" type="button" role="tab"
                                            aria-controls="nav-history" aria-selected="false">our History</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-who" role="tabpanel"
                                        aria-labelledby="nav-who-tab">
                                        <p>{{ $info->content1 }}</p>

                                    </div>
                                    <div class="tab-pane fade" id="nav-vision" role="tabpanel"
                                        aria-labelledby="nav-vision-tab">
                                        <p>{{ $info->content2 }}</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav-history" role="tabpanel"
                                        aria-labelledby="nav-history-tab">
                                        <p>{{ $info->content3 }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- container -->
    </section>

    <!--====== ABOUT FIVE PART ENDS ======-->

    <!-- ===== service-area start ===== -->
    <section id="services" class="services-area services-eight">
        <!--======  Start Section Title Five ======-->
        <div class="section-title-five">
            @foreach ($data_setting as $info)
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="content">
                                <h6>Services</h6>
                                <h2 class="fw-bold">{{ $info->title_service }}</h2>
                                <p>
                                    {{ $info->text_service }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- row -->
                </div>
            @endforeach
            <!-- container -->
        </div>
        <!--======  End Section Title Five ======-->
        <div class="container">

            <div class="row">
                @foreach ($data_service as $info)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <div class="service-icon">
                                <i  @if ($info->icon == 1)
                                    class="lni lni-capsule"

                                    @elseif ($info->icon == 2)
                                     class = "lni lni-bootstrap"
                                    @elseif ($info->icon == 3)
                                    class = "lni lni-shortcode"
                                    @elseif ($info->icon == 4)
                                    class = "lni lni-dashboard"
                                    @elseif ($info->icon == 5)
                                    class = "lni lni-layers"
                                    @else
                                    class = "lni lni-reload"
                                    @endif ></i>
                            </div>
                            <div class="service-content">
                                <h4>{{ $info->name }}</h4>
                                <p>
                                    {{ $info->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- ===== service-area end ===== -->


    <!-- Start Latest News Area -->
    <div id="blog" class="latest-news-area section" style="background-color: #e1e1e1;">
        <!--======  Start Section Title Five ======-->
        @foreach ($data_setting as $info )
        <div class="section-title-five">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="content">
                            <h6>latest news</h6>
                            <h2 class="fw-bold">{{ $info->title_blogs }} & Blog</h2>
                            <p>
                                {{ $info->text_blogs }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        @endforeach


            <!--======  End Section Title Five ======-->
            <div class="container">
                <div class="row">
                    @foreach ($data_blog as $info)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single News -->
                        <div class="single-news">
                            <div class="image">
                                <a href="javascript:void(0)"><img class="thumb"
                                        src="{{ asset('uploads/blog/' . $info->image) }}" alt="Blog" /></a>
                                <div class="meta-details">
                                    <img class="thumb" src="{{ asset('uploads/blog/' . $info->image) }}"
                                        alt="Author" />
                                    <span>BY TIM NORTON</span>
                                </div>
                            </div>
                            <div class="content-body">
                                <h4 class="title">
                                    <a href="javascript:void(0)"> {{ $info->title1 }} </a>
                                </h4>
                                <p>
                                    {{ $info->content }}
                                </p>
                            </div>
                        </div>
                        <!-- End Single News -->
                    </div>
                    @endforeach
                </div>
            </div>

    </div>
    <!-- End Latest News Area -->


    <!-- ========================= contact-section start ========================= -->
    <section id="contact" class="contact-section">
        <div class="container">



            <div class="row">
                @foreach ($data_setting as $info)
                    <div class="col-xl-4">
                        <div class="contact-item-wrapper">
                            <div class="row">
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-phone"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Contact</h4>
                                            <p>{{ $info->phones }}</p>
                                            <p>{{ $info->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-map-marker"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Address</h4>
                                            <p>{{ $info->address }}</p>
                                            <p>United States</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-xl-12">
                                    <div class="contact-item">
                                        <div class="contact-icon">
                                            <i class="lni lni-alarm-clock"></i>
                                        </div>
                                        <div class="contact-content">
                                            <h4>Schedule</h4>
                                            <p>{{ $info->hour }} Hours / {{ $info->date }} Days Open</p>
                                            <p>Office time: {{ $info->from_the_hour }} AM - {{ $info->to_the_hour }}
                                                PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-xl-8">
                    <div class="contact-form-wrapper">
                        <div class="row">
                            <div class="col-xl-10 col-lg-8 mx-auto">
                                <div class="section-title text-center">
                                    <span> Get in Touch </span>
                                    <h2>
                                        Ready to Get Started
                                    </h2>
                                    <p>
                                        At vero eos et accusamus et iusto odio dignissimos ducimus
                                        quiblanditiis praesentium
                                    </p>
                                </div>
                            </div>
                        </div>
                        @include('admin.layout.alerts.error')
                        @include('admin.layout.alerts.success')
                        <form action="{{ route('admin.content.store') }}" method="post" class="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="Name"
                                         />
                                        @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" placeholder="Email" />
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="phone" id="phone" placeholder="Phone" />
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="subject" id="subject" placeholder="Subject"/>
                                         @error('subject')
                                         <span class="text-danger">{{ $message }}</span>
                                     @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <textarea name="text" id="text" placeholder="Type Message" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="button text-center rounded-buttons">
                                        <button type="submit" class="btn primary-btn rounded-full">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================= contact-section end ========================= -->

    <!-- Start Footer Area -->
    <footer class="footer-area footer-eleven call-action">
        <!-- Start Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="footer-widget f-about">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{ asset('uploads/settings/' . $info->logo_footer) }}"
                                            alt="#" class="img-fluid" />
                                    </a>
                                </div>
                                <p class=" text-white">
                                    Making the world a better place through constructing elegant
                                    hierarchies.
                                </p>
                                <p class="copyright-text text-white">
                                    <span>© 2024 Business. Designed and Developed</span>
                                </p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
    </footer>
    <!--/ End Footer Area -->


    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!--====== js ======-->
    <script src="{{ asset('webassets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('webassets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('webassets/js/main.js') }}"></script>
    <script src="{{ asset('webassets/js/tiny-slider.js') }}"></script>

    <script>
        //===== close navbar-collapse when a  clicked
        let navbarTogglerNine = document.querySelector(
            ".navbar-nine .navbar-toggler"
        );
        navbarTogglerNine.addEventListener("click", function() {
            navbarTogglerNine.classList.toggle("active");
        });

        // ==== left sidebar toggle
        let sidebarLeft = document.querySelector(".sidebar-left");
        let overlayLeft = document.querySelector(".overlay-left");
        let sidebarClose = document.querySelector(".sidebar-close .close");

        overlayLeft.addEventListener("click", function() {
            sidebarLeft.classList.toggle("open");
            overlayLeft.classList.toggle("open");
        });
        sidebarClose.addEventListener("click", function() {
            sidebarLeft.classList.remove("open");
            overlayLeft.classList.remove("open");
        });

        // ===== navbar nine sideMenu
        let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

        sideMenuLeftNine.addEventListener("click", function() {
            sidebarLeft.classList.add("open");
            overlayLeft.classList.add("open");
        });

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>
