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
                            @lang('main.datemschutz')
                        </div>
                        <div class="inline-header-breadcrumb">
                            <a href="{{ route('/') }}">@lang('main.home')</a>
                            /
                            <span> @lang('main.datemschutz')</span>
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
                    @foreach ($protections as $protection)  
                    <p>
                        {!! $protection->{'content_' . app()->getLocale()} !!}
                    </p>
                    @endforeach
                </div>
            </div>
        </section>

        @include('layouts.contact-us')

    </main>

@endsection