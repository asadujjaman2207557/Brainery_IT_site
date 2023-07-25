@extends('frontend.single_pages.master')
@section('content')
    <div class="page-banner-area bg-color-f6fcff">
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
                        <img class="about-image-9" src="{{url('public/upload/other_images/'.@$about->image)}}"
                            alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-details-area pt-100 pb-70">
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
                            {{--  <p>{{$about->mision}}</p>  --}}
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
    </div>


    {{--  footer  --}}
@endsection
