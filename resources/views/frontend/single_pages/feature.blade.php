@extends('frontend.single_pages.master')
@section('content')
    @php
        $currentRoute = \Request::route()->getName();
    @endphp
    <div class="page-banner-area bg-color-f6fcff">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-content">
                        <h2>{{ $all_data[0]->title }}</h2>
                        <ul>
                            <li><a href="{{ url('') }}">Home</a></li>
                            {{--  <li>Our Features</li>  --}}
                            <li>
                                @if ($currentRoute == 'service')
                                    Our Services
                                @elseif ($currentRoute == 'course')
                                   Our Courses
                                @elseif ($currentRoute == 'portfolio')
                                Portfolio
                                @else
                                    Our Features
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="page-banner-image" data-cues="slideInUp" data-duration="900">
                        @if ($currentRoute == 'service' || $currentRoute == 'course')
                            <img class="service-1" src="{{ asset('public') }}/images/svg/{{ $all_data[0]->image }}"
                                alt="image">
                        @elseif ($currentRoute == 'portfolio')
                            {{--  <img class="about-image-9" src="{{ url('public/images/portfolio/' . @$all_data[0]->image) }}"
                                alt="image">  --}}
                        @else
                            <img class="about-image-9" src="{{ url('public/images/features/' . @$all_data[0]->image) }}"
                                alt="image">
                        @endif
                        {{--  <img class="about-image-9" src="{{url('public/images/features/'.@$all_data[0]->image)}}" alt="image">  --}}
                        {{--  <img class="about-image-9" src="{{ asset('public') }}/images/about/about-image-9.png" alt="image">  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-details">
                        <h4>{{ $all_data[0]->tab1_title }}</h4>
                        <p>{{ $all_data[0]->tab1_text }}</p>
                        <div class="service-analyses">
                            <h5>{{ $all_data[0]->tab2_title }}</h5>
                            <p>{{ $all_data[0]->tab2_text }}</p>
                            {{--  <p class="error">Sed ut perspiciatis unde omnis iste natus error sit voluptat accusantium
                                doloremque laudan tiumt.</p>
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <ul>
                                        <li>
                                            <i class="flaticon-083-check-mark"></i>Praesent risus pretium nec arcu in
                                            Mauris irot.
                                        </li>
                                        <li>
                                            <i class="flaticon-083-check-mark"></i>Integer at nibh eu ipsum scelerisque
                                        </li>
                                        <li>
                                            <i class="flaticon-083-check-mark"></i>Mauris pretium fringilla fermentum
                                            pretium
                                        </li>
                                        <li>
                                            <i class="flaticon-083-check-mark"></i>Duis semper justo quis vulputate
                                        </li>
                                        <li>
                                            <i class="flaticon-083-check-mark"></i>Sed venenatis elementum nisl tellus
                                            pretium dui
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-5" data-cues="zoomIn" data-duration="2000">
                                    <img class="details-image" src="{{ asset('public') }}/images/about/about-image-5.png" alt="image">
                                </div>
                            </div>  --}}
                            <h5>{{ $all_data[0]->tab3_title }}</h5>
                            <p class="quia">{{ $all_data[0]->tab3_text }}</p>
                            @if ($currentRoute == 'course')
                                <a class="common-btn" href="#">Contact Us</a>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
