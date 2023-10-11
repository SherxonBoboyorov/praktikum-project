@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset($applicant->image) }}" alt="">
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
                                        <li>{!! $applicant->{'applicants_' . app()->getLocale()} !!}</li> 
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
                                        <li>{!! $applicant->{'services_' . app()->getLocale()} !!}</li>
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
                                        <li>{!! $applicant->{'conditions_' . app()->getLocale()} !!}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('layouts.contact-us')

    </main>

@endsection