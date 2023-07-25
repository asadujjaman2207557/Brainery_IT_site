<div class="banner-slider owl-carousel owl-theme">
    @foreach($sliders as $slider)
    <div class="banner-area ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <span class="sub-title">
                            <img class="hero-shape-2" src="{{asset('public')}}/images/shape/hero-shape-2.png" alt="image">
                            {{$slider->mintitle}}
                        </span>
                        <h1>{{$slider->title}}</h1>
                        <p>{{$slider->description}}</p>
                        <a class="common-btn" href="{{$slider->url}}">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image" data-cues="slideInUp" data-duration="1000">
                        <img class="hero-image-1" src="{{url('public/images/slider/'.@$slider->image)}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{--  <div class="banner-area ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-content">
                        <span class="sub-title">
                            <img class="hero-shape-2" src="{{asset('public')}}/images/shape/hero-shape-2.png" alt="image">
                            BIG DATA ANALYTICS
                        </span>
                        <h1>Data Science And Analytics Solutions For Startup Agency</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                            ectetur ullam corper mattis, pulvinar dapibus leo.</p>
                        <a class="common-btn" href="#">Get Started</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-image" data-cues="slideInUp" data-duration="1000">
                        <img class="hero-image-1" src="{{asset('public')}}/images/hero/hero-image-1.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

</div>
