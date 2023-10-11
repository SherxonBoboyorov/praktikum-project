@extends('layouts.front')

@section('content')

        <section class="banner">
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('front/public/img/contact-img.jpg') }}" alt="">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </section>

    <main>
        <section class="contact">
            <div class="container" data-aos="flip-right" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <div class="contact__left">
                    <div class="info">
                        <h4>@lang('main.address'):</h4>
                        <p>Hanfweg 4, 85302 Gerolsbach, Germany
                        </p>
                    </div>
                    <div class="info">
                        <h4>@lang('main.phone'):</h4>
                        <a href="#">0049 (0)8445 9298270</a>
                        <a href="#">0049 (0)8445 9298271</a>
                    </div>
                    <div class="info">
                        <h4>@lang('main.email'):</h4>
                        <a href="#">info@praktikum4people.com</a>
                    </div>
                </div>
                <div class="contact__right">
                    <form action="" class="contact-form">
                        <div class="contact-form__item">
                            <label for="name">@lang('main.name')</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="email">@lang('main.email')</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="company">@lang('main.company')</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="phone">@lang('main.phone')</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item contact-form__textarea">
                            <div class="input">
                                <textarea name="" id=""  rows="7" placeholder="Enter message here"></textarea>
                            </div>
                        </div>
                        <div class="contact-form__btn">
                            <button class="view-btn">
                                @lang('main.send_message')
                                <span></span><span></span><span></span><span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

  @endsection