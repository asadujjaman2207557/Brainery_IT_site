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
                                    <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('about') }}" class="nav-link">Our Teams</a>
                                </li>
                        
                        <li class="nav-item">
                            <a href="#service" class="nav-link">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#port" class="nav-link">
                                Portfolio
                            </a>
                        </li>
                       
                        <li class="nav-item">
                            <a href="#footer" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                       
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
                <img src="{{ asset('public/upload/logo_images/' .$logo->image) }}" class="white-logo" alt="image">
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
                            <a href="tel:{{ $contact->phone1 }}">{{ $contact->phone1 }}</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mail:braineryit@gmail.com">{{ $contact->email1 }}</a>
                        </li>
                        <li>
                            <i class='bx bx-map'></i>{{ $contact->address }}
                        </li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="{{ $contact->facebook }}" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $contact->twitter }}" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $contact->linkedin }}" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $contact->instagram }}" target="_blank">
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
                                    Message</button>
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
