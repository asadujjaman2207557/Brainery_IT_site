<div class="navbar-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ url('') }}">
                        <img src="{{ asset('public/upload/logo_images/' .$logo->image) }}" class="main-logo" alt="logo">

                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('') }}">
                    {{--  <img src="{{url('public/upload/logo_images/'.@$logo->image)}}" class="main-logo" alt="logo">  --}}
                    <img src="{{ asset('public/upload/logo_images/' .$logo->image) }}" class="main-logo" alt="logo">

                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ url('') }}" class="nav-link active">
                                Home
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="pricing.html" class="nav-link">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">
                                        Team
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team-details.html" class="nav-link">Team Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="faq.html" class="nav-link">FAQ's</a>
                                </li>
                                <li class="nav-item">
                                    <a href="testimonials.html" class="nav-link">Testimonials</a>
                                </li>
                                <li class="nav-item">
                                    <a href="my-account.html" class="nav-link">My Account</a>
                                </li>
                                <li class="nav-item">
                                    <a href="terms-conditions.html" class="nav-link">Terms Conditions</a>
                                </li>
                                <li class="nav-item">
                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                </li>
                                <li class="nav-item">
                                    <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a href="error.html" class="nav-link">404 Error</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="service.html" class="nav-link">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a href="service-details.html" class="nav-link">Service Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Portfolio
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="portfolio.html" class="nav-link">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a href="portfolio-details.html" class="nav-link">Portfolio Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Blog
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="blog.html" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        {{--  <div class="option-item">
                            <i class="search-btn  bx bx-search"></i>
                            <i class="close-btn bx bx-x"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">
                                        <button class="search-button" type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>  --}}
                        <div class="menu">
                            <a href="{{ route('dashboard') }} " class="login-btn">Login</a>
                            <button class="menu-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">
                                <i class='bx bx-menu'></i>
                            </button>
                        </div>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-options">
                        <div class="option-item">
                            <i class="search-btn bx bx-search"></i>
                            <i class="close-btn bx bx-x"></i>
                            <div class="search-overlay search-popup">
                                <div class='search-box'>
                                    <form class="search-form">
                                        <input class="search-input" placeholder="Search..." type="text">
                                        <button class="search-button" type="submit">
                                            <i class="bx bx-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="my-account.html" class="common-btn">Login</a>
                        <button class="menu-btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                            aria-controls="offcanvasRight">
                            <i class='bx bx-menu'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="side-menu">
    <div class="offcanvas offcanvas-end" id="offcanvasRight" aria-labelledby="offcanvasRight">
        <div class="offcanvas-header">
            <a href="index.html">
                <img src="{{ asset('public') }}/images/logo.png" class="white-logo" alt="image">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="modal-body">
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a href="tel:9901234567">+990-123-4567</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mail:braineryit@gmail.com">braineryit@gmail.com</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>413 North Las Vegas, NV 89032
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/" target="_blank">
                            <i class='bx bxl-instagram-alt'></i>
                        </a>
                    </li>
                </ul>
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required=""
                                        data-error="Please enter your name" placeholder="Your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" required=""
                                        data-error="Please enter your email" placeholder="Your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" required=""
                                        data-error="Please enter your phone number" placeholder="Your phone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control textarea" cols="30" rows="6" required=""
                                        data-error="Please enter your message" placeholder="your message..."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="common-btn"
                                    style="pointer-events: all; cursor: pointer;">Send
                                    Message<span></span></button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
