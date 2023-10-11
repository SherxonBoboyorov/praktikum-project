@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/faq-img.jpg') }}" alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="team-members partners">
            <div class="container" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <div class="inline-header-breadcrumb sub-menu-2">
                    <a href="{{ route('/') }}">@lang('main.home') </a>
                    /
                    <span> @lang('main.faq')</span>
                </div>
                <div class="member-item-wrap">
                    @foreach ($faqs as $faq)
                    <p class="member-name member-name-custom">{{ $faq->{'title_' . app()->getLocale()} }}</p>
                    <div class="member-item member-item-custom">
                        <p>
                            {!! $faq->{'content_' . app()->getLocale()} !!}
                        </p>
                    </div>
                    @endforeach
                </div>
 

            </div>
        </section>

        @include('layouts.contact-us')

    </main>

 @endsection