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
                    <h1 class="title">@lang('main.download')</h1>
                    <div class="downloads-main">
                        <div class="downloads-main__txt">
                            @foreach ($downloads as $download)
                            <p>
                                {!! $download->{'content_' . app()->getLocale()} !!}
                            </p>
                            <p>&nbsp;</p>
                            <div class="downloads-main__txt-item"></div>
                            @endforeach
                        </div>

                        @foreach($categories as $category)
                        <div class="downloads-main__txt">
                            <p>{{ $category->{'title_' . app()->getLocale()} }}</p>
                            @foreach ($category->documents as $document)
                            <div class="downloads-main__txt-item">
                                {{ $document->{'title_' . app()->getLocale()} }}
                                <a href="{{ asset($document->image) }}">(@lang('main.download'))</a>
                            </div>
                            @endforeach
                        </div>
                        @endforeach

                        <div class="interesting-links">
                            <p class="interesting-links__title">@lang('main.interesting_links'): </p>
                            <p>&nbsp;</p>
                            @foreach ($links as $link)
                            <div class="interesting-links__link">
                                <span>{{ $link->{'title_' . app()->getLocale()} }}: </span>
                                <a href="{{ $link->link }}">{{ $link->link }}
                                </a>
                            </div>
                            @endforeach
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