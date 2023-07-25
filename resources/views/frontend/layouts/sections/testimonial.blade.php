<div class="testimonial-area ptb-100 bg-color-f6fcff">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                <img class="sub-title-shape" src="{{ asset('public') }}/images/shape/hero-shape-2.png"
                    alt="image">
                Our Testimonial
            </span>
            <h2>{{ $title[6]->maintitle }}</h2>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="testimonials">
                    <div class="testimonial-slider owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                        <div class="testimonial-card">
                            <div class="content d-flex position-relative align-items-center">
                                <a href="#">
                                    <img src="{{ url('public/images/testimonial/' . @$testimonial->image) }}"
                                        class="flex-shrink-0 me-4" alt="image">
                                </a>
                                <div class="name">
                                    <h2 class="mt-0">{{ $testimonial->name }}</h2>
                                    <h5>{{ $testimonial->user }}</h5>
                                </div>
                            </div>
                            <p> {{ $testimonial->review }} </p>
                            <ul>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                            <i class="flaticon-017-right-quote quote"></i>
                        </div>
                        @endforeach
                        {{--  <div class="testimonial-card">
                            <div class="content d-flex position-relative align-items-center">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images/user/user-1.jpg"
                                        class="flex-shrink-0 me-4" alt="image">
                                </a>
                                <div class="name">
                                    <h5 class="mt-0">Maria A Quintero</h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour or randomised words which don't
                                look even. Lorem Ipsum available, the majority have suffered alteration in some form
                            </p>
                            <ul>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                            <i class="flaticon-017-right-quote quote"></i>
                        </div>
                        <div class="testimonial-card">
                            <div class="content d-flex position-relative align-items-center">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images/user/user-1.jpg"
                                        class="flex-shrink-0 me-4" alt="image">
                                </a>
                                <div class="name">
                                    <h5 class="mt-0">Maria A Quintero</h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour or randomised words which don't
                                look even. Lorem Ipsum available, the majority have suffered alteration in some form
                            </p>
                            <ul>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                            <i class="flaticon-017-right-quote quote"></i>
                        </div>
                        <div class="testimonial-card">
                            <div class="content d-flex position-relative align-items-center">
                                <a href="#">
                                    <img src="{{ asset('public') }}/images/user/user-1.jpg"
                                        class="flex-shrink-0 me-4" alt="image">
                                </a>
                                <div class="name">
                                    <h5 class="mt-0">Maria A Quintero</h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour or randomised words which don't
                                look even. Lorem Ipsum available, the majority have suffered alteration in some form
                            </p>
                            <ul>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                                <li><i class='bx bxs-star'></i></li>
                            </ul>
                            <i class="flaticon-017-right-quote quote"></i>
                        </div>  --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="testimonial-image" data-cues="slideInDown" data-duration="900">
                    <img class="about-image-3" src="{{ asset('public') }}/images/about/about-image-3.png"
                        alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
