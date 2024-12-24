<footer class="site-footer">
    <div class="site-footer-bg" style="background-image: url('{{ asset('assets/images/backgrounds/site-footer-bg.jpg') }}')">
    </div>
    <div class="site-footer__top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__about-logo">
                            <a href="/"><img src="{{ asset('assets/images/resources/footer-logo.png') }}" alt=""></a>
                        </div>
                        <div class="footer-widget__about-text-box">
                            <p class="footer-widget__about-text">Nulla ultricies justo sit amet ante efficitur,
                                eget pharetra augue efficitur. Vestibulum viverra, dolor sit amet ultricies.</p>
                        </div>
                        <div class="footer-widget__btn">
                            <a href="{{ route('donateNow') }}"> <span class="fa fa-heart"></span>Donate now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__links clearfix">
                        <h3 class="footer-widget__title">Links</h3>
                        <ul class="footer-widget__links-list list-unstyled clearfix">
                            <li><a href="{{ route('about') }}">About us</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('news') }}">Latest News</a></li>
                            <li><a href="{{ route('eventDetails') }}">Recent Events</a></li>
                            <li><a href="{{ route('donation') }}">Donations</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__non-profit clearfix">
                        <h3 class="footer-widget__title">Non profit</h3>
                        <ul class="footer-widget__non-profit-list list-unstyled clearfix">
                            <li><a href="{{ route('donationDetails') }}">Differently Abled Kids</a></li>
                            <li><a href="{{ route('donationDetails') }}">Help Child Cancer</a></li>
                            <li><a href="{{ route('donationDetails') }}">Clean Pure Water</a></li>
                            <li><a href="{{ route('donationDetails') }}">Give them Education</a></li>
                            <li><a href="{{ route('donationDetails') }}">Start a Fundraising</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <p class="footer-widget__contact-text">380 Street Kilda Broklyn Road <br> Melbourne
                            Australia
                        </p>
                        <ul class="list-unstyled footer-widget__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a href="mailto:shahzaibtariq559@gmail.com ">shahzaibtariq559@gmail.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <p><a href="tel:+923056266559">+92 (305) 626 6559</a></p>
                                </div>
                            </li>
                        </ul>
                        <div class="site-footer__social">
                            <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                            <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <p class="site-footer__bottom-text">© All Copyright 2025 by <a href="https://shahzaib.choicetechai.com">Shahzaib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>