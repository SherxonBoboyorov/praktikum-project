@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($sliders as $slider)
            <div class="swiper-slide">
                <img src="{{ asset($slider->image) }}" alt="">
            </div>
            @endforeach
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
                  <h1 class="title">@lang('main.our_programs_for_employers')</h1>
                    <div class="content">
                      @foreach ($employers as $employer)  
                        <div class="content__item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="100">
                            <a href="{{ route('show.for-employer', $employer->{'slug_' . app()->getLocale()}) }}">
                                <div class="content__card card">
                                    <div class="img">
                                        <img src="{{ asset($employer->image) }}" alt="">
                                        <h3 class="desc">{{ $employer->{'title_' . app()->getLocale()} }}</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.contact-us')

    </main>


@endsection