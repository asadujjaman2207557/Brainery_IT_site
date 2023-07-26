<div class="footer-area pt-100 bg-color-000f5c" id="footer">
    <div class="container pb-100">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-in">
                    <a class="d-inline-block" href="{{ url('') }}">
                        <img class="footer-logo" src="{{ asset('public') }}/images/logo-2.png" alt="image">
                    </a>
                    <p>There are many variations of passages of Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour or randomised words which.</p>
                    <ul>
                        <li>
                            <a href="{{ $contact->facebook }}" target="_blank">
                                <i class="flaticon-067-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $contact->twitter }}" target="_blank">
                                <i class="flaticon-066-twitter-2"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $contact->instagram }}" target="_blank">
                                <i class="flaticon-068-instagram-3"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $contact->linkedin }}" target="_blank">
                                <i class="flaticon-069-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-we">
                    <h4>Our Services</h4>
                    <ul>
                        @foreach ($s5_cards as $s5_card)
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="{{ route('service', $s5_card->id) }}">{{ $s5_card->title }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer-we">
                    <h4>Our Links</h4>
                    <ul>
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="{{ url('') }}">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="#service">Services</a>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="#">Our Team</a>
                        </li>
                        <li>
                            <i class='bx bx-check'></i>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-we address">
                    <h4>Contact Us</h4>
                    <ul>
                        <li>
                            <i class="flaticon-008-location"></i>
                            <p>{{ $contact->address }}</p>
                        </li>
                        <li>
                            <i class="flaticon-009-phone-call"></i>
                            <a href="tel:{{ $contact->phone1 }}">{{ $contact->phone1 }}</a>
                            <a href="tel:{{ $contact->phone2 }}">{{ $contact->phone2 }}</a>
                        </li>
                        <li>
                            <i class="flaticon-010-at"></i>
                            <a href="mailto:{{ $contact->email1 }}">{{ $contact->email1 }}</a>
                            <a href="mailto:{{ $contact->email2 }}">{{ $contact->email2 }}</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{--  <div class="copy-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="first-side">
                        <p>© <span>Tiva </span>is Proudly Owned by <a href="https://hibootstrap.com/"
                                target="_blank">HiBootstrap</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="second-side">
                        <ul>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-conditions.html">Term Or Use</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}
</div>
