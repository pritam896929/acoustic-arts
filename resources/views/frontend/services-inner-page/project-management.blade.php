@extends('layouts.app')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">
            Project Management, Installation & Consulting
        </h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Project Management Sections -->
<div class="container py-5">
    <div class="row g-4 align-items-stretch">
        <div class="col-md-6 d-flex">
            <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4 text-dark">Honest Advice</h1>
                <p>
                    At Acoustic Arts, we recognize the vital role consultants play in shaping successful audio projects.
                    Entrusting your vision to just anyone isn’t an option — you deserve guidance backed by knowledge,
                    integrity, and experience.
                </p>
                <p>
                    Whether you’re looking for an open discussion about the latest technologies or require in-depth
                    design support for a major project, our seasoned team of specialists, consultants, and technicians
                    is here to help. With us, you’ll always receive straightforward advice, transparent communication,
                    and solutions tailored to your goals.
                </p>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="w-100">
                <img src="{{ asset('assets/img/honset-advise.png') }}"
                     alt="Modern boardroom with Biamp system"
                     class="img-fluid w-100 h-100 rounded fixed-image">
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 align-items-stretch flex-md-row-reverse">
        <div class="col-md-6 d-flex">
            <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4 text-dark">Installation Made Easy</h1>
                <p>
                    From large auditoriums and awesome arenas to the coziness of candlelit bars. Sprawling airports to
                    lush velvet theater halls. Professional conference rooms and vibrant places of worships, Acoustic
                    Arts has installed them all. We provide expert installation services, ensure you understand how your
                    new sound system works and instruct employees on how to support and maintain the system. We are here
                    for you every step of the way, and are more than happy to be your support system should any
                    questions, maintenance requirements or changes arise in the future. You can count on us to help you
                    quickly and competently.
                </p>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="w-100">
                <img src="{{ asset('assets/img/InstallationMadeEasy.png') }}"
                     alt="Modern boardroom with Biamp system"
                     class="img-fluid w-100 h-100 rounded border fixed-image">
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row g-4 align-items-stretch">
        <div class="col-md-6 d-flex">
            <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4 text-dark">Loyally Yours</h1>
                <p>
                    Have a huge project and have no idea to begin? We love challenges of all shapes and sizes. Our
                    competent system technicians have over 25+ years of experience and will ensure you meet your project
                    deliverables, on time, every time. We are happy to assist you with every phase of your project -
                    from pre-planning to final reviews post project. Leave the complexity of the audio sector and your
                    sound system needs to us. We will meet all project requirements and deliverables and will provide
                    regular updates to you as we complete each phase of your project. We guarantee the best quality and
                    loyal support for your project. Oh, and we haven’t even got to our fair prices yet.
                </p>
            </div>
        </div>
        <div class="col-md-6 d-flex">
            <div class="w-100">
                <img src="{{ asset('assets/img/LoyallyYours.png') }}"
                     alt="Modern boardroom with Biamp system"
                     class="img-fluid w-100 h-100 rounded border fixed-image">
            </div>
        </div>
    </div>
</div>
<!-- Project Management Sections End -->
@endsection
