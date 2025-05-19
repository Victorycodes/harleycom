<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.vikinglab.agency/seox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 May 2025 17:34:19 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HARLEY Digital Marketing Agency</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="assets/harleyIcon.svg" type="image/x-icon">


    <!--=====CSS=======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick-slider.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="../../unpkg.com/swiper%4011.2.6/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/mobile-menu.css">
    <link rel="stylesheet" href="assets/css/utility.css">
    <link rel="stylesheet" href="assets/css/main.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!--=====JQUERY=======-->
    <script src="assets/js/jquery-3-7-1.min.js"></script>
</head>

<body class="body1 bg-[#191919]">

    <!--=====HEADER START=======-->

    <header>

        <div id="vl-header-sticky" class="vl-header-area1 header-tranperent">
            <div class="container header1-bg">
                <div class="flex align-items-center justify-between">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="vl-logo">
                            <a href="index.html" class="header1-logo-block"><img src="assets/logo.svg" alt=""
                                    class="lg:w-[286px] w-[195px] lg:h-[69px] h-[47px]"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-none d-lg-block text-end">
                        <div class="vl-main-menu">
                            <nav class="vl-mobile-menu-active">
                                <ul>
                                    <li class="has-dropdown text-[15px] font-[400] text-[#ffffff]">
                                        <a href="{{route('welcome')}}">Home</a>
                                    </li>

                                    <li class="has-dropdown text-[15px] font-[400] text-[#ffffff]"><a
                                            href="{{route('about')}}">About Us</a>
                                    </li>


                                    <li class="text-[15px] font-[400] text-[#ffffff]"><a href="{{route('contact')}}">Contact us</a>
                                    </li>

                                    <li
                                        class="text-[15px] font-[400] text-[#ffffff] border-[2px] border-[#ffffff] rounded-[50px] py-[5px] px-[15px]">
                                        <a href="{{route('portfolio')}}">Our Portfolio</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="lg:hidden block col-lg-3 col-md-6 col-6">
                        <div class="vl-header-action-item d-block d-lg-none">
                            <button type="button" class="vl-offcanvas-toggle">
                                <i class="fa-duotone fa-solid fa-bars-staggered"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--=====HEADER END =======-->

    <!--===== MOBILE HEADER STARTS =======-->
    <div class="vl-offcanvas vl-header-area1">
        <div class="vl-offcanvas-wrapper">
            <div class="vl-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="vl-offcanvas-logo">
                    <a href="index.html" class="header1-logo-block"><img src="assets/logo.svg"
                            class="lg:w-[286px] w-[195px] lg:h-[69px] h-[47px]" alt=""></a>
                </div>
                <div class="vl-offcanvas-close">
                    <button class="vl-offcanvas-close-toggle"><i
                            class="fa-solid fa-xmark text-[#ffffff] pr-[20px]"></i></button>
                </div>
            </div>

            <div class="vl-offcanvas-menu d-lg-none mb-40 text-[#ffffff]">
                <nav></nav>
            </div>

            <div class="space20"></div>
            <div class="vl-footer-contact1 vl-footer-widget-white mb-20 sm:ml-0 md:ml-0">
                <div class="single-contact-item">
                    <div class="text">
                        <a>No. 3 Lorem Ipsum Ave. NYC</a>
                    </div>
                </div>

                <div class="single-contact-item">
                    <div class="text">
                        <a href="#">hello@harleycominc.com <br> harleycominc@gmail.com</a>
                    </div>
                </div>

                <div class="single-contact-item">
                    <div class="text">
                        <a href="tel:123-456-7890">+1 (234) 567 8901</a>
                    </div>
                </div>

            </div>
            <div class="vl-offcanvas-social">
                <h4 class="text-[#ffffff]">Follow Us</h4>
                <div class="vl-footer-social1 text-start">
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>

        </div>
    </div>
    <div class="vl-offcanvas-overlay"></div>
    <!--===== MOBILE HEADER STARTS =======-->

    {{ $slot }}

    <!--=====FOOTER START=======-->
    <footer class="vl-footer-area1">

        <!-- footer area start -->
        <div class="footer-bottom-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="vl-footer-widget-white vl-footer1-logo-area mr-50 mb-50">
                            <div class="vl-footer-logo black-logo">
                                <a href="index.html"><img src="assets/footerLogo.svg" alt=""
                                        class="lg:w-[286px] w-[195px] lg:h-[69px] h-[47px]"></a>
                            </div>
                            <div class="vl-footer-text white-heading lg:mt-8 mt-2">
                                <p class="lg:text-[16px] text-[14px]">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit.
                                    Vestibulum at sapien sit amet nisi placerat sollicitudin. Curabitur a tellus
                                    sodales, semper nisi eu, ultrices nisl. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2  col-md-6 col-6">
                        <div class="vl-footer-widget-white mb-50 lg:ml-20 ml-0">
                            <div class="vl-footer-list">
                                <ul>
                                    <li><a href="index.html" class="font-bold text-[18px] lg:mb-[45px] mb-6">Contact</a>
                                    </li>
                                    <li><a href="{{route('about')}}"
                                            class="font-normal text-[16px] lg:py-[10px] py-[4px]">About</a></li>
                                    <li><a href="{{route('faq')}}"
                                            class="font-normal text-[16px] lg:py-[10px] py-[4px]">Help/FAQs</a></li>
                                    <li><a href="{{route('affiliates')}}"
                                            class="font-normal text-[16px] lg:py-[10px] py-[4px]">Affiliates</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="vl-footer-widget-white mb-50 ml-70 md:ml-0 sm:ml-0">
                            <div class="vl-footer-list">
                                <ul>
                                    <li><a href="#" class="font-bold text-[18px] lg:mb-[45px] mb-6">More</a></li>
                                    <li><a href="{{route('blog')}}" class="font-normal text-[16px] lg:py-[10px] py-[4px]">Blog
                                            Posts</a></li>
                                    <li><a href="{{route('portfolio')}}"
                                            class="font-normal text-[16px] lg:py-[10px] py-[4px]">Portfolio</a></li>
                                    <li><a href="{{route('projects')}}"
                                            class="font-normal text-[16px] lg:py-[10px] py-[4px]">Ongoing Projects</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-8 col-sm-6">
                        <div class="vl-footer-contact1 vl-footer-widget-white mb-50 sm:ml-0 md:ml-0">
                            <div class="vl-footer-social1 text-start lg:mb-12 mb-2">
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            </div>
                            <div class="single-contact-item">
                                <div class="text">
                                    <a>No. 3 Lorem Ipsum Ave. NYC</a>
                                </div>
                            </div>

                            <div class="single-contact-item">
                                <div class="text">
                                    <a href="#">hello@harleycominc.com <br> harleycominc@gmail.com</a>
                                </div>
                            </div>

                            <div class="single-contact-item">
                                <div class="text">
                                    <a href="tel:123-456-7890">+1 (234) 567 8901</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area end -->

    </footer>

    <!--=== js === -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.js"></script>
    <script src="assets/js/mobile-menu.js"></script>
    <script src="assets/js/jquery.magnific-popup.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countup.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/jquery.nice-select.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/Splitetext.js"></script>
    <script src="assets/js/text-animation.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/jaquery-ripples.js"></script>
    <script src="assets/js/jquery.lineProgressbar.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/app.js"></script>

</body>

<!-- Mirrored from html.vikinglab.agency/seox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 May 2025 17:36:00 GMT -->

</html>
