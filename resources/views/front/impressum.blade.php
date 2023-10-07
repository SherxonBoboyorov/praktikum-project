@extends('layouts.front')

@section('content')
    
<section class="banner data-production-banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide data-production-banner__slider">
                <img src="{{ asset('front/public/img/contact-img.jpg') }}" alt="">
                <div class="data-production-banner__info">
                    <div class="container">
                        <div class="inline-header-title">
                            IMPRINT
                        </div>
                        <div class="inline-header-breadcrumb">
                            <a href="{{ route('/') }}">Home</a>
                            /
                            <span> IMPRINT</span>
                        </div>
                    </div>
                </div>
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="data-production-main">
            <div class="container">
                <div class="data-production-main__content" data-aos="fade-up" data-aos-anchor-placement="top-bottom"  data-aos-duration="700">
                    <p><strong>Imprint</strong></p>
                    <p>Information under § 5 TMG</p>
                    <p>Praktikum4People UG (haftungsbeschränkt)</p>
                    <p>Hanfweg 4</p>
                    <p>85302 Gerolsbach</p>
                    <p>Germany</p>
                    <p>Commercial Register: HRB 8840 Register-Court: Ingolstadt</p>
                    <p><strong>Vat</strong></p>
                    <p>VAT identification number in accordance with Section 27 (a) VAT Act:</p>
                    <p>DE 124/135/42276</p>
                    <p><strong>Proof of photos</strong></p>
                    <p>All images are the property of Praktikum4People and may not be used for any other purpose.</p>
                    <p class="source">
                        <strong>Source:</strong>
                    E-Recht24
                    <a href="http://www.e-recht24.de/">www.e-recht24.de</a>
                    </p>
                    </p>
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