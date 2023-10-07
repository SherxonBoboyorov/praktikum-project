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
                        <h4>Address:</h4>
                        <p>Hanfweg 4, 85302 Gerolsbach, Germany
                        </p>
                    </div>
                    <div class="info">
                        <h4>Phone:</h4>
                        <a href="#">0049 (0)8445 9298270</a>
                        <a href="#">0049 (0)8445 9298271</a>
                    </div>
                    <div class="info">
                        <h4>Email:</h4>
                        <a href="#">info@praktikum4people.com</a>
                    </div>
                </div>
                <div class="contact__right">
                    <form action="" class="contact-form">
                        <div class="contact-form__item">
                            <label for="name">Name</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="email">Email</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="company">Company</label>
                            <div class="input">
                                <input type="text">
                            </div>
                        </div>
                        <div class="contact-form__item">
                            <label for="phone">Phone</label>
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
                                Send message
                                <span></span><span></span><span></span><span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

  @endsection