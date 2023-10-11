@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset($employer->image) }}" alt="">
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
                                    <span>@lang('main.our_applicants')</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                    <li>{!! $employer->{'applicants_' . app()->getLocale()} !!}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content__item">
                            <div class="products__card">
                                <div class="products__title">
                                    <span>@lang('main.our_services')</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                        <li>{!! $employer->{'services_' . app()->getLocale()} !!}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="content__item">
                            <div class="products__card">
                                <div class="products__title">
                                    <span>@lang('main.our_conditions')</span>
                                </div>
                                <div class="products__text">
                                    <ul>
                                        <li>{!! $employer->{'conditions_' . app()->getLocale()} !!}</li>
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