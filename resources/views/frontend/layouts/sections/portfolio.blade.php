<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <span class="sub-title">
                    <img class="sub-title-shape" src="{{ asset('public') }}/images/shape/hero-shape-2.png" alt="image">
                    Our Portfolio
                </span>
                <h2>{{ $title[4]->maintitle }}</h2>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div id="news-slider" class="owl-carousel">


                            @foreach ($p_cards as $p_card)
                                <div class="post-slide">
                                    <div class="post-img">
                                        <img src="{{ url('public/images/portfolio/' . @$p_card->image) }}" alt="image">
                                        {{--  <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506"
                                        alt="">  --}}
                                        {{--  <a href="#" class="over-layer"><i class="fa fa-link"></i></a>  --}}
                                    </div>
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="{{ route('portfolio', $p_card->id) }}">{{ $p_card->title }}</a>
                                        </h3>
                                        <p class="post-description">{{ $p_card->description }}</p>
                                        {{--  <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>  --}}
                                        <a href="{{ route('portfolio', $p_card->id) }}" class="read-more">read more</a>
                                        <br><br>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    <img class="service-shape-1 rotate" src="{{ asset('public') }}/images/shape/service-shape-1.png" alt="image">
</div>
