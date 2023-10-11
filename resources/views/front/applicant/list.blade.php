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
        <section class="vnutreny-banner-baton for-applicants">
            <div class="container">
                <div class="vnutreny-banner-baton-element">
                    <h1 class="title">@lang('main.our_programs_for_employers')</h1>
                    <div class="content">
                      @foreach ($applicants as $applicant)
                        <div class="content__item" data-aos="fade-up" data-aos-duration="500">
                            <a href="{{ route('show.for-applicant', $applicant->{'slug_' . app()->getLocale()}) }}">
                                <div class="content__card card">
                                    <div class="img">
                                        <img src="{{ asset($applicant->image) }}" alt="">
                                    </div>
                                    <h3 class="desc">{{ $applicant->{'title_' . app()->getLocale()} }}</h3>
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