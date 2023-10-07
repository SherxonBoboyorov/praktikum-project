@extends('layouts.front')

@section('content')


<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/downloadPageImg.jpg') }}" alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="downloads">
            <div class="container">
                <div class="downloads__el vnutreny-banner-baton-element" data-aos="fade-down" data-aos-duration="1200" data-aos-easing="ease-in-back">
                    <h1 class="title">DOWNLOADS</h1>
                    <div class="downloads-main">
                        <div class="downloads-main__txt">
                            <p>Dear applicant, below you will find a selection of the documents with which you can apply
                                to us, as well as some links to our programs with interesting background information.
                            </p>
                            <p>&nbsp;</p>
                            <div class="downloads-main__txt-item"></div>
                        </div>
                        <div class="downloads-main__txt">
                            <p> CV in word </p>
                            <div class="downloads-main__txt-item">
                                German Version
                                <a href="#">(Download)</a>
                            </div>
                            <div class="downloads-main__txt-item">
                                English Version
                                <a href="#">( Download )</a>
                            </div>
                        </div>
                        <div class="downloads-main__txt">
                            <p>Motivation letter in word </p>
                            <div class="downloads-main__txt-item">
                                German Version
                                <a href="#">( Download )</a>
                            </div>
                            <div class="downloads-main__txt-item">
                                English Version
                                <a href="#">( Download )</a>
                            </div>
                        </div>
                        <div class="downloads-main__txt">
                            <p>Certificate of enrolment </p>
                            <div class="downloads-main__txt-item">
                                Certificate of Enrolment for Work and Trave
                                <a href="#">( Download )</a>
                            </div>
                            <div class="downloads-main__txt-item">
                                Certificate of Enrolment for Internship
                                <a href="#">( Download )</a>
                            </div>
                        </div>
                        <div class="downloads-main__txt">
                            <p>Data consent </p>
                            <div class="downloads-main__txt-item">
                                German version
                                <a href="#">( Download )</a>
                            </div>
                            <div class="downloads-main__txt-item">
                                English version
                                <a href="webpage.zip">( Download )</a>
                            </div>
                        </div>
                        <div class="interesting-links">
                            <p class="interesting-links__title">Interesting links: </p>
                            <p>&nbsp;</p>
                            <div class="interesting-links__link">
                                <span>Internship: </span>
                                <a
                                    href="https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/studienfachbezogene-praktika">https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/studienfachbezogene-praktika&nbsp;</a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Holiday Work : </span>
                                <a
                                    href="https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/auslaendische-studierende">https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/auslaendische-studierende&nbsp;</a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Apprenticeship: </span>
                                <a
                                    href="https://www.anerkennung-in-deutschland.de/html/de/index.php">http://https://www.anerkennung-in-deutschland.de/html/de/index.php</a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Skilled Labour: </span>
                                <a href="http://www.anerkennung-in-deutschland.de/html/de/index.php">
                                    https://www.anerkennung-in-deutschland.de/html/de/index.php </a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Study in Germany: </span>
                                <a href="http://www.uni-assist.de/"> https://www.uni-assist.de/&nbsp;</a>
                                <a href="https://www.daad.de/de/">https://www.daad.de/de/</a>
                                <a href="https://www.study-in-germany.de/de/">https://www.study-in-germany.de/de/ </a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Au-Pair: </span>
                                <a href="https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/au-pair">https://www.arbeitsagentur.de/unternehmen/arbeitskraefte/au-pair
                                </a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Voluntary Social Year: </span>
                                <a href="https://www.arbeitsagentur.de/bildung/zwischenzeit/freiwilligendienst-leisten">https://www.arbeitsagentur.de/bildung/zwischenzeit/freiwilligendienst-leisten
                                </a>
                            </div>
                            <div class="interesting-links__link">
                                <span>Learn German: </span>
                                <a
                                    href="http://www.make-it-in-germany.com/de/leben-in-deutschland/deutsch/online/">&nbsp;https://www.make-it-in-germany.com/de/leben-in-deutschland/deutsch/online/&nbsp;</a>
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