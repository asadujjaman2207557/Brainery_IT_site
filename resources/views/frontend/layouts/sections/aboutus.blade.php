<div class="about-area ptb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="about-image" data-cues="slideInUp" data-delay="300">
                    <img class="about-image-1" src="{{url('public/upload/other_images/'.@$about->image)}}"
                        alt="image">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content">
                    <div class="section-heading">
                        <span class="about-sub-title">
                            <img class="sub-title-image"
                                src="{{ asset('public') }}/images/shape/hero-shape-2.png" alt="image">
                            ABOUT US
                        </span>
                        <h2>{{$about->title}}</h2>

                    </div>
                    <p>{{$about->description}}</p>
                    <ul>
                        <li>
                            <i class="flaticon-083-check-mark"></i>
                            Various analysis options.
                        </li>
                        <li>
                            <i class="flaticon-083-check-mark"></i>
                            Page Load (time, size, number of requests).
                        </li>
                        <li>
                            <i class="flaticon-083-check-mark"></i>
                            Big data analysis.
                        </li>
                    </ul>
                      <a class="common-btn" href="{{ route('about') }}">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>
