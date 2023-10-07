@extends('layouts.front')

@section('content')

<section class="banner data-production-banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide data-production-banner__slider">
                <img src="{{ asset('front/public/img/data-protection.jpg') }}" alt="">
                <div class="data-production-banner__info">
                    <div class="container">
                        <div class="inline-header-title">
                            DATA PROTECTION
                        </div>
                        <div class="inline-header-breadcrumb">
                            <a href="{{ route('/') }}">Home</a>
                            /
                            <span> DATA-PROTECTION</span>
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
                    <p>1. Privacy at a glance</p>
                    <p><strong>General notes</strong></p>
                    <p>The following notes give a simple overview of what happens to your personal data when you visit
                        our website. Personal data is all data that can be used to identify you personally. Detailed
                        information on data protection can be found in our privacy policy listed under this text.</p>
                    <p><strong>Request by email, phone or fax</strong></p>
                    <p>If you contact us by e-mail, telephone or fax, your request, including all the personal data
                        (name, request), will be stored and processed with us for the purpose of processing your
                        request. We will not share this data without your consent.</p>
                    <p>This data is processed on the basis of Article 6 (1) bed. b GDPR, provided that your request is
                        related to the fulfillment of a contract or is necessary to carry out pre-contractual measures.
                        In all other cases, the processing is based on your consent (Article 6 (1) bed. a GDPR) and/or
                        on our legitimate interests (Article 6 (1) bed. f GDPR), as we have a legitimate interest in the
                        effective handling of the requests addressed to us.</p>
                    <p>The data you send to us via contact requests will remain with us until you ask us to delete it,
                        revoke your consent to store or the purpose of storing the data is omitted (e.g. after your
                        request has been processed). Mandatory legal provisions – in particular legal retention periods
                        – remain unaffected.</p>
                    <p class="source">
                        <strong>Source:</strong>
                        E-Recht24
                        <a href="http://www.e-recht24.de/">www.e-recht24.de</a>
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