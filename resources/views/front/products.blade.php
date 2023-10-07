@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img1.webp') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img2.webp') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img3.jpg"') }} alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img4.jpg"') }} alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img5.jpg"') }} alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img6.jpg"') }} alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img7.jpg"') }} alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="vnutreny-banner-baton products">
            <div class="container">
                <div class="vnutreny-banner-baton-element">
                    <div class="content">
                        <div class="content__item">
                            <div class="products__card">
                                <div class="products__title">
                                    <span>OUR APPLICANTS</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                        <li>Our applicants are foreign students who want to earn money for their studies during the summer semester break.</li>
                                        <li>They support you wherever there is a need, e.g. as a harvest helper in agriculture, as a waiter, kitchen help or in housekeeping in the catering and hotel industry, as an assembly line worker in industry or as cleaning staff in industrial cleaning.</li>
                                        <li>The maximum duration of employment is 90 days per year from May to October.</li>
                                        <li>Communication in German or English is ensured.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content__item">
                            <div class="products__card">
                                <div class="products__title">
                                    <span>OUR SERVICES</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                        <li>We will introduce you to suitable students with their individual CV.</li>
                                        <li>We prepare the necessary application documents for the work permit on your behalf and submit the application to the ZAV.</li>
                                        <li>We provide an individual health, liability and accident insurance (Dr-Walter).</li>
                                        <li>We help the students to apply for the visa.</li>
                                        <li>We organize the arrival at your company.</li>
                                        <li>We are available to provide advice throughout the entire period.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content__item">
                            <div class="products__card">
                                <div class="products__title">
                                    <span>OUR CONDITIONS</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                        <li>The students receive minimum wage and are available for 90 days for at least 40 hours / week.</li>
                                        <li>TThe employer provides accommodation, cooking facilities and work clothes. The costs can be deducted from the wages.</li>
                                        <li>The holiday work is free of social security contributions, only income tax (tax class 1) has to be paid by the student.</li>
                                        <li>Students are not required to register with the registration office (Einwohnermeldeamt).</li>
                                        <li>The students have to pay for their travel expenses themselves</li>
                                        <li>Praktikum4People receives a monthly administration fee of 80 euros for the duration of their employment.</li>
                                    </ul>
                                </div>
                            </div>
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
                            <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" fill="%23292c34" />
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