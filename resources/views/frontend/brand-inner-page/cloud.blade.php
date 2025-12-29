@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Cloud</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Cloud</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Biamp -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/about.jpg" alt="">
                        <div class="w-50 bg-secondary p-3" style="margin-top: -25%;">
                            <h1 class="text-uppercase text-primary mb-3">Cloud</h1>
                            <p class="text-uppercase mb-0">Founded in 1983 in the UK, Cloud Electronics is a trusted leader
                                in commercial audio solutions, renowned for delivering reliable, high-quality sound systems
                                for public spaces worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Biamp End-->

    {{-- <div class="container py-5 border" style="background: #191C24">
        <div class="row split-layout">
            <div class="col-md-7">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Biamp – Smarter Sound for Smarter Spaces</h1>
                    <p class="subheading">
                        Unlock the power of intelligent sound. From boardrooms to classrooms, Biamp's advanced DSP
                        technology and seamless integration deliver crystal-clear communication and effortless
                        control —
                        every time.
                    </p>
                    <p class="highlighted">Integrated by Acoustic Arts Pvt. Ltd.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="image-side">
                    <img src="{{ asset('assets/img/Office-Biamp system.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border border">
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Trusted Start -->
    <div class="container-xxl pb-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">About Biamp</p> --}}
                <h1 class="text-uppercase"> Cloud – The Standard of Reliability in Commercial Audio</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100">
                        <div
                            class="bg-white text-dark text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Redefining Reliability in Commercial Audio
                            </h2>

                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd. proudly distributes Cloud Electronics — a renowned British brand
                                synonymous with dependable, high-fidelity audio solutions for commercial environments.
                                Trusted by hospitality chains, retail stores, educational institutions, and corporate
                                spaces, Cloud products deliver consistent sound clarity, intuitive control, and exceptional
                                longevity. Every unit is built with precision engineering and a commitment to performance
                                you can count on.
                            </p>
                            <p class="mb-3">
                                Cloud Confidence. Delivered by Acoustic Arts.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/cloud-amp.png') }}" alt="Modern boardroom with Biamp system"
                            class="w-100 border border" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted End -->

    <!-- Globally Start -->
    <div class="container-xxl py-5 my-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">About Biamp</p> --}}
                <h1 class="text-uppercase">Sound You Can Rely On. Anywhere</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/cloud-1.png') }}"
                            alt="Biamp Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100">
                        <div
                            class="bg-white text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Trusted Worldwide for AV Excellence</h2>
                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes Cloud Electronics — a globally respected brand
                                renowned for its reliable, high-performance commercial audio solutions. For decades, Cloud
                                has set the standard in background music and paging systems, trusted by hospitality, retail,
                                leisure, and corporate environments across the world.
                            </p>
                            <p class="mb-3 text-color-secondary">
                                From multi-zone mixers and amplifiers to integrated paging systems and networked audio
                                solutions, Cloud delivers dependable performance, exceptional audio clarity, and
                                installation-friendly design.
                            </p>
                            {{-- <p class="mb-0">
                                Renowned for its advanced digital signal processing (DSP) platforms, state-of-the-art
                                beamtracking microphones, and intuitive control systems, Biamp ensures every word is
                                captured and every interaction is enhanced — from boardrooms and classrooms to airports and
                                houses of worship.
                            </p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Globally End -->

    <!-- Our Biamp Product Line Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p> --}}
                <h1 class="text-uppercase">Experience the Cloud Electronics Advantage</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Cloud Mixers & Zone Controllers
                            </h5>
                            <span class="">Renowned for their reliability and intuitive operation, Cloud mixers and
                                zone
                                controllers offer precise audio control for multi-zone installations in hospitality.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Cloud Amplifiers</h5>
                            <span class="">Designed for continuous operation and exceptional clarity, Cloud amplifiers
                                deliver consistent, high-quality sound across a variety of commercial spaces.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Cloud Paging & Announcements Systems</h5>
                            <span class="">Trusted for crystal-clear voice transmission, Cloud paging solutions ensure
                                clear
                                communication in airports, hotels, gyms.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Cloud Networked Audio Solutions</h5>
                            <span class="">Flexible, installation-friendly systems that integrate seamlessly with
                                modern AV
                                infrastructures.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Biamp Product Line End -->

    <!-- Applications Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">Applications</h1>
            </div>
            <div class="row g-4 align-items-stretch">
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white p-4 h-100 d-flex flex-column justify-content-center shadow-lg">
                        <h5 class="text-uppercase text-dark mb-3">Perfectly Tuned for Every Voice</h5>
                        <p class="text-white mb-0 text-color-secondary">
                            Acoustic Arts Pvt. Ltd. proudly distributes Cloud Electronics — a globally trusted name in
                            commercial audio, renowned for its dependable performance and installation-friendly design. For
                            decades, Cloud has been the choice of hospitality venues, retail chains, leisure facilities, and
                            corporate environments worldwide.
                        </p>
                        <p class="text-white mb-0 text-color-secondary">
                            From boutique hotels and fine-dining restaurants to bustling airports and expansive gyms, Cloud
                            delivers consistent, high-quality sound tailored to every environment.
                        </p>
                    </div>
                </div>

                <!-- Start Icon Grid Section -->
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 rounded-4 shadow">
                        <table class="table table-bordered text-center align-middle shadow-sm">
                            <tbody>
                                <tr>
                                    <td class="fw-semibold text-uppercase small py-4">Arts &amp; Theatre</td>
                                    <td class="fw-semibold text-uppercase small py-4">Live Sound</td>
                                    <td class="fw-semibold text-uppercase small py-4">Bars / Restaurants</td>
                                    <td class="fw-semibold text-uppercase small py-4">Corporate</td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-uppercase small py-4">Houses of Worship</td>
                                    <td class="fw-semibold text-uppercase small py-4">Clubs &amp; Venues</td>
                                    <td class="fw-semibold text-uppercase small py-4">Museums</td>
                                    <td class="fw-semibold text-uppercase small py-4">Malls &amp; Shopping</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- End Icon Grid Section -->
            </div>
        </div>
    </div>
    <!-- Applications End -->

    <!-- Experience. Certified Biamp Integration Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">Reliable Sound Innovation — Powered by Cloud.</h1>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-1 h-100 border">
                        <img src="{{ asset('assets/img/cloud-2.png') }}" alt="Installation"
                            class="img-fluid rounded-3 shadow-lg border h-100"
                            style="box-shadow: 2px 2px 10px !important;">
                    </div>
                </div> <!-- End Icon Grid -->
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">Cloud Electronics, Engineered for Excellence by
                            Acoustic Arts
                        </h5>
                        <p class="text-white mb-0">
                            As a premier AV solutions provider with over 25 years of experience, Acoustic Arts Pvt. Ltd. is
                            proud to offer Cloud Electronics — a trusted leader in commercial audio solutions. Designed for
                            reliability, clarity, and ease of integration, Cloud products power hospitality, retail,
                            leisure, and corporate environments around the world.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Multi-Zone Audio Solutions for Hospitality, Retail & Leisure Spaces</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Reliable Mixers, Amplifiers & Paging Systems</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Engineered for Continuous Operation & Superior Clarity</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Flexible Designs for Easy Integration & Scalability</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Full Design, Installation & Support by Acoustic Arts</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
