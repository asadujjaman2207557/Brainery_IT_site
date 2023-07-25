<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="	https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('public/frontend/css/maicons.css') }}">
    <link href="{{ asset('public/') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/owl.theme.default.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/magnific-popup.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/scrollcue.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/aos.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/fancybox.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/odometer.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/flaticon_tiva.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/meanmenu.min.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('public/') }}/css/responsive.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css"
        rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css"
        rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>

    <title>Brainery - IT & Training Institute</title>
    <link rel="icon" type="image/png" href="{{ asset('public/') }}/images/favicon.png">

    <style>
        .owl-nav button {
            position: absolute;
            top: 50%;
            background-color: #000;
            color: #fff;
            margin: 0;
            transition: all 0.3s ease-in-out;
            display: none !important;
        }

        .owl-nav button.owl-prev {


            left: 0;
        }

        .owl-nav button.owl-next {
            right: 0;
        }

        .owl-dots {
            text-align: center;
            padding-top: 15px;
            display: none !important;
        }

        .owl-dots button.owl-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            display: inline-block;
            background: #ccc;
            margin: 0 3px;
        }

        .owl-dots button.owl-dot.active {
            background-color: #000;
        }

        .owl-dots button.owl-dot:focus {
            outline: none;
        }

        .owl-nav button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.38) !important;
        }

        span {
            font-size: 70px;
            position: relative;
            top: -5px;
        }

        .owl-nav button:focus {
            outline: none;
        }
    </style>
    <style>
        #news-slider {
            margin-top: 80px;
        }

        .post-slide {
            background: #fff;
            margin: 20px 15px 20px;
            border-radius: 15px;
            padding-top: 1px;
            box-shadow: 0px 14px 22px -9px #bbcbd8;
        }

        .post-slide .post-img {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin: -12px 15px 8px 15px;
            margin-left: -10px;
        }

        .post-slide .post-img img {
            width: 100%;
            height: auto;
            transform: scale(1, 1);
            transition: transform 0.2s linear;
        }

        .post-slide:hover .post-img img {
            transform: scale(1.1, 1.1);
        }

        .post-slide .over-layer {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            background: linear-gradient(-45deg,
                    rgba(6, 190, 244, 0.75) 0%,
                    rgba(45, 112, 253, 0.6) 100%);
            transition: all 0.5s linear;
        }

        .post-slide:hover .over-layer {
            opacity: 1;
            text-decoration: none;
        }

        .post-slide .over-layer i {
            position: relative;
            top: 45%;
            text-align: center;
            display: block;
            color: #fff;
            font-size: 25px;
        }

        .post-slide .post-content {
            background: #fff;
            padding: 2px 20px 40px;
            border-radius: 15px;
        }

        .post-slide .post-title a {
            font-size: 15px;
            font-weight: bold;
            color: #333;
            display: inline-block;
            text-transform: uppercase;
            transition: all 0.3s ease 0s;
        }

        .post-slide .post-title a:hover {
            text-decoration: none;
            color: #3498db;
        }

        .post-slide .post-description {
            line-height: 24px;
            color: #808080;
            margin-bottom: 25px;
        }

        .post-slide .post-date {
            color: #a9a9a9;
            font-size: 14px;
        }

        .post-slide .post-date i {
            font-size: 20px;
            margin-right: 8px;
            color: #cfdace;
        }

        .post-slide .read-more {
            padding: 7px 20px;
            float: right;
            font-size: 12px;
            background: #2196f3;
            color: #ffffff;
            box-shadow: 0px 10px 20px -10px #1376c5;
            border-radius: 25px;
            text-transform: uppercase;
        }

        .post-slide .read-more:hover {
            background: #3498db;
            text-decoration: none;
            color: #fff;
        }

        .owl-controls .owl-buttons {
            text-align: center;
            margin-top: 20px;
        }

        .owl-controls .owl-buttons .owl-prev {
            background: #fff;
            position: absolute;
            top: -13%;
            left: 15px;
            padding: 0 18px 0 15px;
            border-radius: 50px;
            box-shadow: 3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-next {
            background: #fff;
            position: absolute;
            top: -13%;
            right: 15px;
            padding: 0 15px 0 18px;
            border-radius: 50px;
            box-shadow: -3px 14px 25px -10px #92b4d0;
            transition: background 0.5s ease 0s;
        }

        .owl-controls .owl-buttons .owl-prev:after,
        .owl-controls .owl-buttons .owl-next:after {
            content: "\f104";
            font-family: FontAwesome;
            color: #333;
            font-size: 30px;
        }

        .owl-controls .owl-buttons .owl-next:after {
            content: "\f105";
        }

        @media only screen and (max-width: 1280px) {
            .post-slide .post-content {
                padding: 0px 15px 25px 15px;
            }
        }
    </style>
</head>

<body>

    <div id="preloader">
        <div id="loader"></div>
    </div>




    {{--  navbar  --}}
    @include('Frontend.layouts.navbar')


    {{--  slider  --}}
    @include('Frontend.layouts.sections.carousel')

    {{--  our Features  --}}
    @include('Frontend.layouts.sections.features')

    {{--  aboutus  --}}
    @include('Frontend.layouts.sections.aboutus')


    {{--  services  --}}
    @include('Frontend.layouts.sections.services')

    {{--  cources  --}}
    @include('Frontend.layouts.sections.courses')

    {{--  video_count  --}}
    @include('Frontend.layouts.sections.video_count')



    {{--  weare  --}}
    {{--  @include('Frontend.layouts.sections.weare')  --}}

    {{--  portfolio  --}}
    @include('Frontend.layouts.sections.portfolio')


    {{--  pricing  --}}
    @include('Frontend.layouts.sections.pricing')


    {{--  testimonial  --}}
    @include('Frontend.layouts.sections.testimonial')



    {{--  clients  --}}
    {{--  @include('Frontend.layouts.sections.clients')  --}}


    {{--  blogs  --}}
    {{--  @include('Frontend.layouts.sections.blogs')  --}}


    {{--  newsletter  --}}
    @include('Frontend.layouts.sections.newsletter')


    {{--  footer  --}}
    @include('Frontend.layouts.footer')




    <div class="go-top">
        <i class='bx bxs-up-arrow-alt'></i>
    </div>

    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({

                autoplay: true,
                /*rewind: true,  use rewind if you don't want loop */
                loop: true,
                margin: 20,

                responsiveClass: true,
                autoHeight: true,
                autoplayTimeout: 3000,
                smartSpeed: 800,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },

                    600: {
                        items: 1
                    },

                    1024: {
                        items: 3,
                    },

                    1366: {
                        items: 3
                    }
                }
            });
        });
    </script>

    <script>
        jQuery("#carousel").owlCarousel({
            autoplay: true,
            /*rewind: true,  use rewind if you don't want loop */
            loop: true,
            margin: 20,

            responsiveClass: true,
            autoHeight: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },

                600: {
                    items: 1
                },

                1024: {
                    items: 3,
                },

                1366: {
                    items: 3
                }
            }
        });
    </script>



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



</html>
