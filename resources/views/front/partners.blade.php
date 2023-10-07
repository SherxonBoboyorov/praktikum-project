@extends('layouts.front')

@section('content')

<section class="banner">
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <img src="{{ asset('front/public/img/faq-img.jpg') }}" alt="">
            </div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

    <main>
        <section class="team-members partners">
            <div class="container" data-aos="zoom-in" data-aos-duration="1200" data-aos-easing="ease-in-back">
                <div class="inline-header-breadcrumb sub-menu-2">
                    <a href="{{ route('/') }}">Home </a>
                    /
                    <span> FAQ</span>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">When can I start with the individual programs?</p>
                    <div class="member-item member-item-custom">
                        <p>We accept the students for all programs throughout the year. You can apply whenever you want.
                            One exeption is holiday work: Please apply between December and January for the following
                            summer. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">How much does it cost to study in Germany?</p>
                    <div class="member-item member-item-custom">
                        <p>Undergraduate costs to study in Germany. Although you can study for free at public German
                            universities as an undergraduate, there is a charge per semester for enrolment, confirmation
                            and administration. This is typically no more than €250 (~US$290) per semester, but varies
                            depending on the university.</p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">When should I pay the program fee?</p>
                    <div class="member-item member-item-custom">
                        <p>The program fee is due within a week after you have recieved the work contract from us. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">What happens, if I don't receive the visa/ I cancel my
                        participation due to personal reasons?</p>
                    <div class="member-item member-item-custom">
                        <p>Basically, all students get the visa issued. If you cancel your participation, we will refund
                            part of the program fee and the costs for the insurance. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">What is included in the program fee?</p>
                    <div class="member-item member-item-custom">
                        <p>The program fee includes a German healh, accident and liability insurance for the entire
                            duration of your stay in Germany. It also includes the costs for the postal shipment of the
                            original documents to your country and our administration fee. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">What should I do, if I get sick/ I have a work accident
                        during my stay in Germany?</p>
                    <div class="member-item member-item-custom">
                        <p>First of all, you should contact your employer / your company. He will help you to find a
                            doctor. Prior to your stay in Germany we will provide you with all necessary insurance
                            documents, which you have to take to the doctor. Somethimes you pay cash for the treatment
                            in advance. In order to get your money back from the insurance, you have to fill out the
                            claim form of the insurance. We will assist you if you need help. After that the insurance
                            company will refund the money to you. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">When do I get my first salary?</p>
                    <div class="member-item member-item-custom">
                        <p>You will receive the salary at the end of each month in cash or transferred to your bank
                            account. If you don't have a bank account, the host company can support you to open a bank
                            account. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">Which documents do I need for the visa?</p>
                    <div class="member-item member-item-custom">
                        <p>I. For the internship (national visa, D category) you need the following documents: </p>
                        <p>- Visa Application 2x </p>
                        <p>- CV and Motivation Letter (optional depending on the embassy) </p>
                        <p>- Student ID </p>
                        <p>- valid travel document (passport)</p>
                        <p>- 2 biometric photos </p>
                        <p>- work permit for Germany</p>
                        <p>- work contract and internship plan </p>
                        <p>- insurance documents for Germany </p>
                        <p>- visa fee (approx.80 EUR)</p>
                        <p>&nbsp;</p>
                        <p>II. For Holiday Work (Shengen with job permission) you will need the following documents:
                        </p>
                        <p>- Application form</p>
                        <p>- work permit and work contract</p>
                        <p>- visa fee (approx. 60 EUR)</p>
                        <p>- valid travel document (passport)</p>
                        <p>- 2 biometric photos </p>
                        <p>- insurance documents for Germany </p>
                        <p>- flight confirmation</p>
                        <p>&nbsp;</p>
                        <p>Please also check the website of the German embassy in your home country. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">When do I buy the flight ticket?</p>
                    <div class="member-item member-item-custom">
                        <p>After you have received your visa you should coordinate your arrival in Germany with us and
                            book your flight. </p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">How is accommodation and food regulated?</p>
                    <div class="member-item member-item-custom">
                        <p>I. Internship/ Voluntary social year:
                            The costs for accommodation and meals are free. </p>
                        <p>&nbsp;</p>
                        <br>
                        <p>II. Holiday Work/ Apprenticeship:

                            The cost for accommodation and meals will be deducted from your salary. The exact amount can
                            be found in your employment contract. It varies depending on the company and is between
                            250-450 Euros per month.</p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">How can I prepare for the interview in the embassy?</p>
                    <div class="member-item member-item-custom">
                        <p>Before you have your appointment at the German Embassy, you will receive a leaflet with
                            important information how to prepare for your appointment.</p>
                    </div>
                </div>
                <div class="member-item-wrap">
                    <p class="member-name member-name-custom">What are the language requirements for the programs?</p>
                    <div class="member-item member-item-custom">
                        <p>The language requirements vary depending on the individual program.
                            For internship and holiday work in a hotel you have to speak German at level A2-B1.
                            For an internship or holiday work in Agriculture basic knowledge of the German language is
                            desirable. If you do not speak German, you should be able to speak good English.
                            For our program Advanced Training you should have a German B1 Language certificate in order
                            to receive your visa at the German embassy.
                            If you want to come to Germany to study of to do an apprenticeship, you need a German
                            language certificate (B1 / B2 / C1). </p>
                    </div>
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

 @endsection