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
    <link rel="stylesheet" href="{{ asset('front/css/swiper.min.css') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
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
                        <img src="{{ asset('front/images/main-logo.png') }}" alt="logo" width="157" height="54">
                    </a>
                </div>
                <ul class="nav__list">
                    <li>
                        <a href="{{ route('/') }}">Home</a>
                    </li>
                    <li>
                        <a href="./for-employers.html">For Employers</a>
                    </li>
                    <li>
                        <a href="./for-applicants.html">For Applicants</a>
                    </li>
                    <li>
                        <a class="active" href="{{ route('about') }}">About us</a>
                    </li>
                    <li>
                        <a href="./contacts.html">Contact</a>
                    </li>
                    <li>
                        <a href="./downloads.html">DOWNLOADS</a>
                    </li>
                    <li>
                        <a href="./partners.html">FAQ</a>
                    </li>
                    <li class="lang">
                        <a href="">DE</a>
                        <span class="lang__drop"> / </span>
                        <a href="" class="active">EN</a>
                    </li>
                </ul>
                <div class="bars">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
        </nav>
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
    </header>

<main>
    <section class="team-members">
        <div class="container">
            <div class="vnutreny-banner-baton-element" data-aos="flip-down" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <h1 class="title">ABOUT US</h1>
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
    <section class="contactus">
        <p class="contactus__text">
            contact us
            <span></span><span></span><span></span><span></span>
        </p>
        <div class="overlay hidden"></div>
        <div class="sweet-modal">
            <div class="sweet-modal-content hidden">
                <div class="sweet-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                            fill="%23292c34" />
                    </svg>
                </div>
                <h2 class="modal-feedback-title">Kontakt-formular </h2>
                <p class="modal-feedback-desc">Bitte füllen Sie dieses Formular aus, damit wir mit Ihnen Kontakt
                    aufnehmen
                    können</p>
                <form class='feedback' action="#">
                    <div class="modal-feedback-form-group">
                        <label for="company">Unternehmen</label>
                        <input type="text" name="company">
                    </div>
                    <div class="modal-feedback-form-group">
                        <label for="name">Name *</label>
                        <input type="text" name="name">
                    </div>
                    <div class="modal-feedback-form-group">
                        <label for="email">E-Mail *</label>
                        <input type="email" name="email">
                    </div>
                    <div class="modal-feedback-form-group">
                        <label for="phone">Telefon *</label>
                        <input type="text" name="phone">
                    </div>
                    <div class="modal-feedback-form-group">
                        <label for="comment">Text</label>
                        <textarea name="comment"></textarea>
                    </div>
                    <div class="modal-feedback-batton">
                        <button class="btn-hexagon" type="submit">absenden</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

</main>


<footer>
    <div class="footer-top">
        <div class="container">
            <div class="footer-top__content">
                <div class="footer-top__item">
                    <ul class="footer-top-list">
                        <li>
                            <a href="./for-employers.html">For Employers</a>
                        </li>
                        <li>
                            <a href="./for-applicants.html">For Applicants</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About us</a>
                        </li>
                        <li>
                            <a href="./downloads.html">Downloads</a>
                        </li>
                        <li>
                            <a href="./partners.html">FAQ</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-top__item">
                    <ul class="footer-top-list">
                        <li><a href="./impressum.html">IMPRESSUM</a></li>
                        <li><a href="./data-protection.html">DATENSCHUTZ</a></li>
                    </ul>
                </div>
                <div class="footer-top__item">
                    <p class="footer-top-title">PRAKTIKUM4PEOPLE</p>
                    <ul class="footer-top-right-element">
                        <li>
                            <span>Address:</span>
                            <a href="">Hanfweg 4, 85302 Gerolsbach, Deutschland</a>
                        </li>
                        <li>
                            <span>Phone:</span>
                            <a href="">0049 (0)8445 9298270</a>
                        </li>
                        <li>
                            <span>Fax:</span>
                            <a href="">0049 (0)8445 9298271</a>
                        </li>
                        <li>
                            <span>Email:</span>
                            <a href="">info@praktikum4people.com</a>
                        </li>
                        <li>
                            <span>Web:</span>
                            <a href="">www.praktikum4people.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="footer__logo">
                <a href="../../index.html">
                    <img src="../images/main-logo.png" alt="footer-logo" width="157" height="54">
                </a>
            </div>
            <div class="footer__sosgroup">
                <p>© Copyright 2018 - Web developed by <a href="https://sos.uz/">SOS Group</a></p>
            </div>
            <ul class="footer__satsial">
                <li>
                    <a href="https://www.facebook.com/Praktikum4People/?modal=admin_todo_tour">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="20" height="20"
                            fill="#044f7c;">
                            <path
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                        </svg>
                </li>
                <li>
                    <a href="https://www.instagram.com/praktikum4people/">
                        <svg class="praktikum-instagram-element" height="19" viewBox="0 0 511 511.9" width="19"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0">
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
                    <a href="https://t.me/Praktikum4People">
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
<script src="{{ asset('front/js/swiper.js') }}"></script>
<!-- JS -->
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="{{ asset('front/js/contact-form.js') }}"></script>
</body>

</html>