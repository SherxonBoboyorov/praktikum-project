<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum4People</title>
    <!-- AOS ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- SWIPER SLIDER-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ asset('front/src/css/swiper.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/src/css/main.min.css') }}">
</head>

<body>
    <div class="loading">
        <div class="loader"></div>
    </div>
    <header>
        <nav class="nav">
            <div class="container">
                <div class="logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('front/src/images/main-logo.png') }}" alt="logo" width="157" height="54">
                    </a>
                </div>
                <ul class="nav__list">
                    <li>
                        <a class="{{ (\Request::route()->getName() == '/') ? 'active' : '' }}" href="{{ route('/') }}">@lang('main.home')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'for-employers') ? 'active' : '' }}" href="{{ route('for-employers') }}">@lang('main.for_employers')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'for-applicants') ? 'active' : '' }}" href="{{ route('for-applicants') }}">@lang('main.for_applicants')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}" href="{{ route('about') }}">@lang('main.about_us')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">@lang('main.contact')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'downloads') ? 'active' : '' }}" href="{{ route('downloads') }}">@lang('main.download')</a>
                    </li>
                    <li>
                        <a class="{{ (\Request::route()->getName() == 'partners') ? 'active' : '' }}" href="{{ route('partners') }}">@lang('main.faq')</a>
                    </li>
                    {{-- <li class="lang"> --}}
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="{{ $properties['native'] }} active" style="margin-left: 10px">
                           {{ $properties['native'] }}
                        </a>
                        @endforeach
                    {{-- </li> --}}
                </ul>
                <div class="bars">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="footer-top__content">
                    <div class="footer-top__item">
                        <ul class="footer-top-list">
                            <li>
                                <a class="{{ (\Request::route()->getName() == 'for-employers') ? 'active' : '' }}" href="{{ route('for-employers') }}">@lang('main.for_employers')</a>
                            </li>
                            <li>
                                <a class="{{ (\Request::route()->getName() == 'for-applicants') ? 'active' : '' }}" href="{{ route('for-applicants') }}">@lang('main.for_applicants')</a>
                            </li>
                            <li>
                                <a class="{{ (\Request::route()->getName() == 'about') ? 'active' : '' }}" href="{{ route('about') }}">@lang('main.about_us')</a>
                            </li>
                            <li>
                                <a class="{{ (\Request::route()->getName() == 'downloads') ? 'active' : '' }}" href="{{ route('downloads') }}">@lang('main.download')</a>
                            </li>
                            <li>
                                <a class="{{ (\Request::route()->getName() == 'partners') ? 'active' : '' }}" href="{{ route('partners') }}">@lang('main.faq')</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-top__item">
                        <ul class="footer-top-list">
                            <li><a href="{{ route('impressum') }}">@lang('main.impressum')</a></li>
                            
                            <li><a href="{{ route('data-protection') }}">@lang('main.datemschutz')</a></li>
                        </ul>
                    </div>
                    <div class="footer-top__item">
                        <p class="footer-top-title">PRAKTIKUM4PEOPLE</p>
                        <ul class="footer-top-right-element">
                            <li>
                                <span>@lang('main.address'):</span>
                                <a>{{ $options->where('key', 'address_' . app()->getLocale())->first()->value }}</a>
                            </li>
                            <li>
                                <span>@lang('main.phone'):</span>
                                <a href="tel:{{ $options->where('key', 'phone')->first()->value }}">{{ $options->where('key', 'phone')->first()->value }}</a>
                            </li>
                            <li>
                                <span>@lang('main.fax'):</span>
                                <a href="tel:{{ $options->where('key', 'fax')->first()->value }}">{{ $options->where('key', 'fax')->first()->value }}</a>
                            </li>
                            <li>
                                <span>@lang('main.email'):</span>
                                <a href="mailto:{{ $options->where('key', 'email')->first()->value }}">{{ $options->where('key', 'email')->first()->value }}</a>
                            </li>
                            <li>
                                <span>@lang('main.web'):</span>
                                <a>{{ $options->where('key', 'web')->first()->value }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer__logo">
                    <a href="{{ route('/') }}">
                        <img src="{{ asset('front/src/images/main-logo.png') }}" alt="footer-logo" width="157" height="54">
                    </a>
                </div>
                <div class="footer__sosgroup">
                    <p>© Copyright 2018 - @lang('main.web_developed_by') <a href="https://sos.uz/">SOS Group</a></p>
                </div>
                <ul class="footer__satsial">
                    <li>
                        <a href="{{ $options->where('key', 'facebook')->first()->value }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="20" height="20" fill="#044f7c;">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $options->where('key', 'instagram')->first()->value }}">
                            <svg class="praktikum-instagram-element" height="19" viewBox="0 0 511 511.9" width="19" xmlns="http://www.w3.org/2000/svg">
                                <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0">
                                </path>
                                <path
                                    d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0">
                                </path>
                                <path
                                    d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $options->where('key', 'telegram')->first()->value }}">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 496 512">
                                <path
                                    d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- AOS ANIMATION -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- SWIPER SLIDER-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('front/src/js/swiper.js') }}"></script>
    <!-- JS -->
    <script src="{{ asset('front/src/js/main.js') }}"></script>
    <script src="{{ asset('front/src/js/faq-list.js') }}"></script>
    <script src="{{ asset('front/src/js/contact-form.js') }}"></script>
</body>

</html>