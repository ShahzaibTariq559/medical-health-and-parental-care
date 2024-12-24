@extends('layout.layout1')

@php
    $headTitle='Volunteer Carousel';
    $img='assets/images/backgrounds/page-header-bg.jpg';
    $title='Home';
    $title2 = 'Pages';
    $subTitle = 'Volunteers carousel';
    $script='<script src="assets/js/oxpins.js"></script>';
@endphp

@section('content')

        <!--Team One Start-->
        <section class="team-carousel-page">
            <div class="container">
                <div class="team-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style" data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Sarah albert</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-2.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Kevin martin</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-3.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Aleesha eve</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-4.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">David cooper</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-5.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Mike hardson</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-6.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Jessica brown</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-7.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Yoni smith</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-8.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Christine rob</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                    <!--Team One Single Start-->
                    <div class="item">
                        <div class="team-one__single">
                            <div class="team-one__img">
                                <img src="{{ asset('assets/images/team/team-1-1.jpg') }}" alt="">
                                <div class="team-one__social">
                                    <a href="https://www.linkedin.com/in/shahzaibtariq559/"><i class="fab fa-linkedin"></i></a>
                                    
                                    <a href="https://github.com/shahzaibtariq559"><i class="fab fa-github"></i></a>
                                    
                                </div>
                            </div>
                            <div class="team-one__content">
                                <h3 class="team-one__name"><a href="#">Sarah albert</a></h3>
                                <p class="team-one__sub-title">Volunteer</p>
                            </div>
                        </div>
                    </div>
                    <!--Team One Single End-->
                </div>
            </div>
        </section>
        <!--Team One End-->

@endsection