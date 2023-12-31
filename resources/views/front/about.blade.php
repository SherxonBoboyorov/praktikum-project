@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/img5.jpg') }}" alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>
    
<main>
    <section class="team-members">
        <div class="container">
            <div class="vnutreny-banner-baton-element" data-aos="flip-down" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <h1 class="title">@lang('main.about_us')</h1>
                @foreach ($pages as $page)
                <div class="container team-members__txt">
                        {!! $page->{'content_' . app()->getLocale()} !!}
                </div>
                @endforeach

                @foreach ($contacts as $contact)
                <div class="team-members__member-item">
                    <div class="img">
                        <img src="{{ asset($contact->image) }}" alt="">
                    </div>
                    <div class="member-desc">
                        <span class="member-name">{{ $contact->{'title_' . app()->getLocale()} }}</span>
                        <span class="member-role">{{ $contact->{'job_' . app()->getLocale()} }}</span>
                        <div class="member-info">
                            <p>{!! $contact->{'content_' . app()->getLocale()} !!}</p>
                        </div>
                        <a href="mailto:{{ $contact->email }}" class="member-desc__contact">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
                            </svg>
                            {{ $contact->email }}
                        </a>
                        <a href="tel:{{ $contact->number }}" class="member-desc__contact">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg>
                            {{ $contact->number }}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('layouts.contact-us')

</main>


@endsection