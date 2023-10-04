@extends('layouts.front')

@section('content')
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
                        <div class="aktuell__content-item" data-aos="fade-up" data-aos-duration="700">
                            <div class="aktuell-left-element">
                                <div class="aktuell-left-element-txt">
                                    <div class="time">10.09.2022</div>
                                    <div class="aktuell-left-element-title">Advanced Training </div>
                                    <div class="aktuell-left-element-text">work opportunities...</div>
                                    <div class="aktuell-left-element-link">
                                        <a href="./src/pages/news.html" class="view-btn">
                                            view
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="aktuell-left-element-img">
                                    <img src="{{ asset('front/public/img/aktuell-left-element-img.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="aktuell__content-item" data-aos="fade-down" data-aos-duration="700">
                            <div class="aktuell-right-element-txt">
                                <div class="aktuell-right-element-link">
                                    <div class="time">10.09.2022</div>
                                    <a href="./src/pages/news.html" class="view-btn">
                                        view
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                                <p class="aktuell-right-element-title">
                                    Important Information
                                </p>
                                <div class="aktuell-left-element-text-wrap-item">
                                    <p>Dear Students, please pay attention... </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

   @endsection