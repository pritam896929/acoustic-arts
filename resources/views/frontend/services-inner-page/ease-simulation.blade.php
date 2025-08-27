@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">EASE Simulation and Modeling</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bimap</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <p class="subheading py-4">
                        Thanks to our diverse portfolio of clients, we understand the challenges surrounding audio - each
                        room is different and therefore has different needs. An auditorium requires a robust and compact
                        sound system as well as a controlled dispersion and frequency response. An airport will require
                        something else. Whatever the project, we’re here to meet your needs using the latest technology and
                        relying on data to back up our decisions.
                    </p>
                </div>
            </div>
        </div>
    </div>
   <!-- Page Header End -->

    <!-- #DISTRUBUTION START-->
    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Foreseeing the Future</h1>
                    <p class="subheading">
                        Even if the room isn’t built yet, EASE helps generate an exact simulation of speech intelligibility,
                        reverberation times and other important acoustic metrics using data generated from CAD modules of
                        your future room. Using CAD, we can easily model the space you are envisioning and assign absorption
                        coefficients to surfaces, adding sound sources as well as listener positions to simulate the
                        listening experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/Foreseeing.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/savemoney.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Save Money and Time</h1>
                    <p class="subheading">
                        Simulations play a vital role in the success of modern audio and acoustic projects by allowing us to
                        foresee potential obstacles that might otherwise remain hidden until much later in the process. By
                        identifying and addressing these challenges at an early stage, we not only prevent costly errors but
                        also significantly reduce the amount of time spent on revisions once on site. This proactive
                        approach ensures that your project moves forward smoothly and efficiently, minimizing unnecessary
                        disruptions and maximizing resource utilization.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Trust the Data</h1>
                    <p class="subheading">
                        At Acoustic Arts, we believe that exceptional sound isn’t just an art — it’s a science. With EASE
                        (Enhanced Acoustic Simulation for Engineers), every decision we make is grounded in accurate,
                        real-world data. No more guesswork, no more inflated costs, and no more overcomplicated proposals.
                        Instead, we deliver solutions that are transparent, precise, and tailored to your exact
                        requirements.
                    </p>
                    <p class="subheading">
                        Using EASE, we can effortlessly meet and even exceed the most demanding standards for SPL (Sound
                        Pressure Level), STI (Speech Transmission Index), and other crucial acoustic performance metrics.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/trus-data.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
        </div>
    </div>
    <!-- #DISTRUBUTION END-->
@endsection