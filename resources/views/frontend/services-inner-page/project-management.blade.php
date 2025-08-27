@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Project Management, Installation &
                Consulting</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bimap</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Biamp -->
    {{-- <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column border" style="background-color: #191C24; padding: 60px;">
                        <h1 class="text-center pb-5">What We Do</h1>
                        <div class="">
                            <div class="row text-center g-4">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-ship fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Import</h5>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-truck fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Distribute</h5>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-clipboard fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Educate</h5>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-headset fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Support</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Biamp End-->
    <!-- #DISTRUBUTION START-->
    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Honest Advice</h1>
                    <p class="subheading">
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
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/honset-advise.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/InstallationMadeEasy.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Installation Made Easy</h1>
                    <p class="subheading">
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
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Loyally Yours</h1>
                    <p class="subheading">
                        Have a huge project and have no idea to begin? We love challenges of all shapes and sizes. Our
                        competent system technicians have over 20 years of experience and will ensure you meet your project
                        deliverables, on time, every time. We are happy to assist you with every phase of your project -
                        from pre-planning to final reviews post project. Leave the complexity of the audio sector and your
                        sound system needs to us. We will meet all project requirements and deliverables and will provide
                        regular updates to you as we complete each phase of your project. We guarantee the best quality and
                        loyal support for your project. Oh, and we haven’t even got to our fair prices yet.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/LoyallyYours.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
        </div>
    </div>
    <!-- #DISTRUBUTION END-->
@endsection