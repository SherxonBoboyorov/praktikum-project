@extends('layouts.front')

@section('content')
    
<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach(\App\Models\Slider::orderBy('id')->get() as $item)
            <div class="swiper-slide">
                <img src="{{ asset($item->image) }}" alt="">
            </div>
            @endforeach
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="team-members news">
            <div class="container">
                <div class="vnutreny-banner-baton-element">
                    <h1 class="title">@lang('main.news')</h1>
                    <div class="container team-members__txt news__content">
                        <div class="news__img">
                            <img src="{{ asset($article->image) }}" alt="">
                        </div>
                        <div class="news__info">
                            <div class="aktuell-right-element-link news__info__time">
                                <div class="time">10.09.22</div>
                            </div>
                            <h2 class="news__info__title">
                                {{ $article->{'title_' . app()->getLocale()} }}
                            </h2>
                            <div class="news__info__desc">
                                <p>
                                   {!! $article->{'content_' . app()->getLocale()} !!} 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       @include('layouts.contact-us')

    </main>

 @endsection