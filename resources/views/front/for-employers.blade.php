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
        <section class="vnutreny-banner-baton">
            <div class="container">
                <div class="vnutreny-banner-baton-element">
                    <h1 class="title">OUR PROGRAMS FOR EMPLOYERS</h1>
                    <div class="content">
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="100">
                            <a href="./products.html">
                                <div class="content__card card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-1.jpg" alt="">
                                    </div>
                                    <h3 class="desc">INTERNSHIP</h3>
                                </div>
                            </a>
                        </div>
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="200">
                            <a href="./products.html">
                                <div class="content__card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-2.jpg" alt="">
                                    </div>
                                    <h3 class="desc">HOLIDAY WORK</h3>
                                </div>
                            </a>
                        </div>
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="300">
                            <a href="./products.html">
                                <div class="content__card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-3.webp" alt="">
                                    </div>
                                    <h3 class="desc">APPRENTICESHIP </h3>
                                </div>
                            </a>
                        </div>
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                            <a href="./products.html">
                                <div class="content__card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-4.jpg" alt="">
                                    </div>
                                    <h3 class="desc">SKILLED LABOUR </h3>
                                </div>
                            </a>
                        </div>
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="500">
                            <a href="./products.html">
                                <div class="content__card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-5.jpg" alt="">
                                    </div>
                                    <h3 class="desc">Advanced Training</h3>
                                </div>
                            </a>
                        </div>
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                            <a href="./products.html">
                                <div class="content__card">
                                    <div class="img">
                                        <img src="../../public/img/our-prog-6.jpg" alt="">
                                    </div>
                                    <h3 class="desc">VOLUNTARY SOCIAL YEAR </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contactus">
            <p class="contactus__text">
                contact us
                <span></span><span></span><span></span><span></span>
            </p>
            <div class="overlay hidden"></div>
            <div class="sweet-modal">
                <div class="sweet-modal-content hidden">
                    <div class="sweet-modal-close">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                                fill="%23292c34" />
                        </svg>
                    </div>
                    <h2 class="modal-feedback-title">Kontakt-formular </h2>
                    <p class="modal-feedback-desc">Bitte füllen Sie dieses Formular aus, damit wir mit Ihnen Kontakt
                        aufnehmen
                        können</p>
                    <form class='feedback' action="#">
                        <div class="modal-feedback-form-group">
                            <label for="company">Unternehmen</label>
                            <input type="text" name="company">
                        </div>
                        <div class="modal-feedback-form-group">
                            <label for="name">Name *</label>
                            <input type="text" name="name">
                        </div>
                        <div class="modal-feedback-form-group">
                            <label for="email">E-Mail *</label>
                            <input type="email" name="email">
                        </div>
                        <div class="modal-feedback-form-group">
                            <label for="phone">Telefon *</label>
                            <input type="text" name="phone">
                        </div>
                        <div class="modal-feedback-form-group">
                            <label for="comment">Text</label>
                            <textarea name="comment"></textarea>
                        </div>
                        <div class="modal-feedback-batton">
                            <button class="btn-hexagon" type="submit">absenden</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </main>


@endsection