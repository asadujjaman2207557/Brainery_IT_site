<div class="business-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">
                <img class="sub-title-shape" src="{{asset('public')}}/images/shape/hero-shape-2.png" alt="image">
                OUR FEATURES
            </span>
            <h2>{{$title[0]->maintitle}}</h2>
        </div>
        <div class="row justify-content-center" data-cues="slideInUp" data-duration="900">
            @foreach($f_cards as $f_card)
            <div class="col-lg-4 col-md-6">
                <div class="business-card">

                    {{--  <img class="data-image-1" src="{{asset('public')}}/images/features/data-image-1.png" alt="image">  --}}
                    <img class="data-image-1" src="{{url('public/images/features/'.@$f_card->image)}}" alt="image">
                    <div class="business-card-content">
                        <h4><a href="{{ route('feature',$f_card->id) }}">{{$f_card->title}}</a></h4>
                        <p>{{$f_card->description}}</p>
                        <a class="business-btn" href="{{ route('feature',$f_card->id) }}">View More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

    <img class="business-shape-1" src="{{asset('public')}}/images/shape/business-shape-1.png" alt="image">
    <img class="business-shape-2" src="{{asset('public')}}/images/shape/business-shape-2.png" alt="image">
</div>
