<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('public') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/scrollcue.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/aos.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/fancybox.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/odometer.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/flaticon_tiva.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/meanmenu.min.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('public') }}/css/responsive.css" rel="stylesheet">
    <title>Tiva - Data Science & Analytics HTML Template</title>
    <link rel="icon" type="image/png" href="{{ asset('public') }}/images/favicon.png">
</head>

<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>


    {{--  navbar  --}}
    @include('frontend.layouts.navbar')

    @yield('content')

    {{--  <div class="page-banner-area bg-color-f6fcff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-content">
                        <h2>About Us</h2>
                        <ul>
                            <li><a href="{{ url('') }}">Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image" data-cues="slideInUp" data-duration="900">
                        <img class="about-image-9" src="{{ asset('public') }}/images/about/about-image-9.png"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

    {{--  <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details">
                        <div class="blog-card">

                            <div class="blog-card-content">
                                <h4>{{ $about->title }}</h4>
                                <ul>
                                    <li>
                                        <i class="bx bx-wifi-0"></i>
                                        Mission
                                    </li>
                                    <li>June 08, 2022</li>
                                </ul>
                            </div>
                            <p>{{ $about->mision }}</p>

                        </div>
                        <div class="blog-card">
                            <div class="blog-card-content">
                                <ul>
                                    <li>
                                        <i class="bx bx-wifi-0"></i>
                                        Vision
                                    </li>
                                    <li>June 08, 2022</li>
                                </ul>
                            </div>
                            <p>{{ $about->vision }}</p>
                        </div>

                        <div class="robert">
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium doloremque otam rem aperiam, eaque ipsa quae ab
                                illo inventore veritatis et quasi architecto beatae nt
                                explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut.
                            </p>
                            <span>_Robert Brown</span>
                            <img class="quote-2" src="{{ asset('public') }}/images/svg/quote-2.svg" alt="image" />
                        </div>
                        <div class="blog-card">

                            <div class="blog-card-content">

                                <ul>
                                    <li>
                                        <i class="bx bx-wifi-0"></i>
                                        Goal
                                    </li>
                                    <li>June 08, 2022</li>
                                </ul>
                            </div>
                            <p>{{ $about->goal }}</p>

                        </div>




                    </div>
                </div>

            </div>
        </div>
    </div>  --}}


    {{--  footer  --}}

    @include('frontend.layouts.footer')

    <div class="go-top">
        <i class='bx bxs-up-arrow-alt'></i>
    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('public') }}/js/jquery.min.js"></script>
    <script src="{{ asset('public') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('public') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('public') }}/js/scrollcue.js"></script>
    <script src="{{ asset('public') }}/js/aos.min.js"></script>
    <script src="{{ asset('public') }}/js/fancybox.min.js"></script>
    <script src="{{ asset('public') }}/js/appear.min.js"></script>
    <script src="{{ asset('public') }}/js/odometer.min.js"></script>
    <script src="{{ asset('public') }}/js/meanmenu.min.js"></script>
    <script src="{{ asset('public') }}/js/form-validator.min.js"></script>
    <script src="{{ asset('public') }}/js/contact-form-script.js"></script>
    <script src="{{ asset('public') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('public') }}/js/main.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/tiva/default/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 May 2023 08:10:07 GMT -->

</html>
