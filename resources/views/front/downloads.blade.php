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
        @include('layouts.contact-us')

    </main>
@endsection