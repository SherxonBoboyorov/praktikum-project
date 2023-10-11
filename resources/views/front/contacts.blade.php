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

        @include('alert')
        <section class="contact">
            <div class="container" data-aos="flip-right" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <div class="contact__left">
                    <div class="info">
                        <h4>@lang('main.address'):</h4>
                        <p>{{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}
                        </p>
                    </div>
                    <div class="info">
                        <h4>@lang('main.phone'):</h4>
                        <a href="tel:{{ $options->where('key', 'phone')->first()->value }}">{{ $options->where('key', 'phone')->first()->value }}</a><br>
                        <a href="tel:{{ $options->where('key', 'fax')->first()->value }}">{{ $options->where('key', 'fax')->first()->value }}</a>
                    </div>
                    <div class="info">
                        <h4>@lang('main.email'):</h4>
                        <a href="mailto:{{ $options->where('key', 'email')->first()->value }}">{{ $options->where('key', 'email')->first()->value }}</a>
                    </div>
                </div>
                <div class="contact__right">

                    @if($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li style="color: red">{{ $error }}</li>
                          @endforeach
                      </ul>
                    </div>
                    @endif
                    <form action="{{ route('contact-form.store') }}" class="contact-form" method="POST">
                        {{ csrf_field() }}
                        <div class="contact-form__item">
                            <label for="name">@lang('main.name')</label>
                            <div class="input">
                                <input type="text" name="names">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="email">@lang('main.email')</label>
                            <div class="input">
                                <input type="text" name="gmail">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="company">@lang('main.company')</label>
                            <div class="input">
                                <input type="text" name="company">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="phone">@lang('main.phone')</label>
                            <div class="input">
                                <input type="text" name="numbers">
                            </div>
                        </div>
                        <div class="contact-form__item contact-form__textarea">
                            <div class="input">
                                <textarea name="content" id=""  rows="7" placeholder="Enter message here"></textarea>
                            </div>
                        </div>
                        <div class="contact-form__btn">
                            <button type="submit" class="view-btn">
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