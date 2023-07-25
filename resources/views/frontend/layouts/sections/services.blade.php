<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                <img class="sub-title-shape" src="{{ asset('public') }}/images/shape/hero-shape-2.png" alt="image">
                OUR SERVICES
            </span>
            <h2>{{ $title[1]->maintitle }}</h2>
        </div>
        <div class="owl-slider">
            <div id="carousel" class="owl-carousel">
                @foreach ($s_cards as $s_card)
                    <div class="item ">
                        <div class="services-card">
                            <div class="services-card-image">

                                <img class="service-1" src="{{ asset('public') }}/images/svg/{{ $s_card->image }}"
                                    alt="image">
                            </div>
                            <h4>
                                <a href="{{ route('service', $s_card->id) }}">{{ $s_card->title }}</a>
                            </h4>
                            <p>{{ $s_card->description }}</p>
                            <a class="service-btn" href="{{ route('service', $s_card->id) }}">Learn More</a>
                        </div>
                    </div>
                @endforeach
                {{--
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>
                <div class="item">
                    <div class="services-card">
                        <div class="services-card-image">
                            <img class="service-1" src="{{ asset('public') }}/images/svg/service-1.svg" alt="image">
                        </div>
                        <h4>
                            <a href="service-details.html">Big Data Consulting</a>
                        </h4>
                        <p>Lorem ipsum amet,conse adipiscing elit.Ut elit tellus,luctu ectetur ullam corper.</p>
                        <a class="service-btn" href="service-details.html">Learn More</a>
                    </div>
                </div>  --}}
            </div>
        </div>


        {{--  <p>Get Ready to Start It’s Fast & Easy. <a href="service.html">Click Here</a></p>  --}}
    </div>
    <img class="service-shape-1 rotate" src="{{ asset('public') }}/images/shape/service-shape-1.png" alt="image">
</div>
