@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img1.web') }}p" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img2.web') }}p" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img3.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img4.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img5.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img6.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img7.jpg') }}" alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="practicum-main">
            <div class="container">
                <div class="prac-main">
                    <h1 class="title">WHAT WE DO </h1>
                    <div class="prac-main__content">
                        <div class="prac-main__item" data-aos="fade-up" data-aos-duration="700">
                            <div class="prac-main-people">
                                <a href="./src/pages/for-employers.html">
                                    <div class="prac-main__card">
                                        <div class="img">
                                            <img src="{{ asset('front/public/img/prac-main-img1.jpg') }}" alt="">
                                        </div>
                                        <h2 class="desc">FOR EMPLOYERS</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="prac-main__item" data-aos="fade-down" data-aos-duration="700">
                            <div class="prac-main-people">
                                <a href="./src/pages/for-applicants.html">
                                    <div class="prac-main__card">
                                        <div class="img">
                                            <img src="{{ asset('front/public/img/prac-main-img2.jpg') }}" alt="">
                                        </div>
                                        <h2 class="desc">FOR APPLICANTS</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aktuell">
                    <h1 class="title">News</h1>
                    <div class="aktuell__content">
                      @foreach ($articles as $article)    
                        <div class="aktuell__content-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="aktuell-left-element">
                                <div class="aktuell-left-element-txt">
                                    <div class="time">10.09.2022</div>
                                    <div class="aktuell-left-element-title">{{ $article->{'title_' . app()->getLocale()} }}</div>
                                    <div class="aktuell-left-element-text">{!! $article->{'content_' . app()->getLocale()} !!}</div>
                                    <div class="aktuell-left-element-link">
                                        <a href="{{ route('article', $article->id) }}" class="view-btn">
                                            view
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="aktuell-left-element-img">
                                    <img src="{{ asset($article->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

   @endsection