<div class="story-area pt-100">
    <div class="container-fluid">
        <div class="section-title">
            <span class="sub-title">
                <img class="sub-title-shape" src="{{ asset('public') }}/images/shape/video-shape-1.png"
                    alt="image">
                CHECK 1 MIN OUR INTRO VIDEO
            </span>
            <h2>{{$title[3]->maintitle}}</h2>
        </div>
        {{--  href="http://www.youtube.com/watch?v=0O2aH4XLbto"  --}}
        <a class="popup-youtube popup-btn" href="{{ $video[0]->url }}" >
            <div class="play-icon">
                <img src="{{ asset('public') }}/images/svg/play.svg" alt="image">
            </div>
        </a>
    </div>
</div>
<div class="container">
    <div class="painter-area" data-cues="slideInUp" data-duration="900">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-6">
                <div class="count-info">
                    <h3 class="odometer odometer-auto-theme" data-count="{{ $video[0]->project }}">000</h3>
                    <span class="target">
                        <i class='bx bx-wifi-0'></i>
                    </span>
                    <p><i class='bx bx-plus'></i>Project Done</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="count-info">
                    <h3 class="odometer odometer-auto-theme" data-count="{{ $video[0]->tea }}">000</h3>
                    <span class="target">
                        <i class='bx bx-wifi-0'></i>
                    </span>
                    <p><i class='bx bx-plus'></i>Cup Of Tea</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="count-info">
                    <h3 class="odometer odometer-auto-theme" data-count="{{ $video[0]->employee }}">000</h3>
                    <span class="target">
                        <i class='bx bx-wifi-0'></i>
                    </span>
                    <p><i class='bx bx-plus'></i>Total Employee
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-6">
                <div class="count-info">
                    <h3 class="odometer odometer-auto-theme" data-count="{{ $video[0]->awards }}">000</h3>
                    <span class="target">
                        <i class='bx bx-wifi-0'></i>
                    </span>
                    <p><i class='bx bx-plus'></i>Win Awards</p>
                </div>
            </div>
        </div>
        <img class="count-shape-1" src="{{ asset('public') }}/images/shape/count-shape-1.png" alt="image">
    </div>
</div>
