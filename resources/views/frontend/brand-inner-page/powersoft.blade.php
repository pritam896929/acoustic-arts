@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Powersoft</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Powersoft</li>
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
                            <h1 class="text-uppercase text-primary mb-3">Powersoft</h1>
                            <p class="text-uppercase mb-0">Founded in 1995 in Florence, Italy, Powersoft is a global leader
                                in professional audio amplification technology.</p>
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
                <h1 class="text-uppercase">Powersoft – Powering Performance with Precision</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 shadow-lg">
                        <div
                            class="bg-white text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4">
                            <h2 class="text-dark mb-4">Unleash the Energy of True Audio Power</h2>
                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes Powersoft — the global leader in professional
                                amplification. Engineered for concerts, stadiums, theaters, and premium installations,
                                Powersoft amplifiers deliver unmatched clarity, efficiency, and reliability. With
                                intelligent power management and eco‑friendly design, every performance is both powerful and
                                sustainable.
                            </p>
                            <p class="mb-3">
                                Powersoft Performance. Distributed by Acoustic Arts.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/quattrocanali_stack.png') }}"
                            alt="Modern boardroom with Biamp system" class="w-100 h-100 border border"
                            style="box-shadow: 2px 2px 10px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted End -->

    <!-- Trusted Start -->
    <div class="container-xxl py-5 my-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">About Biamp</p> --}}
                <h1 class="text-uppercase">Trusted Worldwide. Engineered for Clarity</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img class="img-fluid w-100 h-100" src="{{ asset('assets/img/Setup.webp') }}"
                            alt="Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100">
                        <div
                            class="bg-white text-dark text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Trusted Worldwide for AV Excellence</h2>
                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd. proudly distributes Powersoft — a global leader setting benchmarks
                                in professional amplification, energy efficiency, and system reliability. With decades of
                                innovation in amplifier engineering, Powersoft delivers cutting‑edge audio solutions that
                                power unforgettable experiences across industries.
                            </p>
                            <p class="mb-3">
                                From high‑performance amplifiers and advanced DSP integration to intelligent power
                                management systems, Powersoft ensures every note is delivered with precision and every venue
                                resonates with clarity.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Trusted End -->

    <!-- Our Biamp Product Line Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p> --}}
                <h1 class="text-uppercase">Our Powersoft Product Line</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Powersoft Amplifiers</h5>
                            <span class="">World-renowned for reliability, efficiency, and sound quality, delivering
                                unmatched power in a compact form factor.</span>
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
                            <h5 class="text-uppercase text-dark">ArmoníaPlus System Management</h5>
                            <span class="">PIntuitive software for real-time system design, monitoring, and tuning,
                                ensuring
                                precise audio performance.</span>
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
                            <h5 class="text-uppercase text-dark">Mezzo Series Compact Amplifiers</h5>
                            <span class="">Designed for flexible installations, these half-rack amplifiers provide
                                high
                                power and efficiency in minimal space.</span>
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
                            <h5 class="text-uppercase text-dark">Ottocanali & Quattrocanali Series</h5>
                            <span class="">High-channel-count amplifiers with exceptional efficiency, ideal for
                                large-scale
                                installations and professional AV projects.</span>
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
                        <h5 class="text-uppercase text-dark mb-3">Perfectly Tuned for Every Space</h5>
                        <p class="text-white mb-0 text-color-secondary">
                            Acoustic Arts Pvt. Ltd. proudly distributes Powersoft — the world’s leader in high‑performance
                            amplification. From conference rooms and houses of worship to stadiums and entertainment venues,
                            Powersoft delivers flawless sound with unmatched reliability and precision.
                        </p>
                        <p class="text-white mb-0 text-color-secondary">
                            With industry‑leading energy efficiency, compact design, and advanced DSP capabilities,
                            Powersoft solutions adapt seamlessly to both new installations and system upgrades.
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
                <h1 class="text-uppercase">25 Years of Experience. Certified Powersoft Distributor.</h1>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-1 h-100 border">
                        <img src="{{ asset('assets/img/installation.jpg') }}" alt="Installation"
                            class="img-fluid rounded-3 shadow-lg border h-100"
                            style="box-shadow: 2px 2px 10px !important;">
                    </div>
                </div> <!-- End Icon Grid -->
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">Powersoft Amplification, Perfected by Acoustic Arts
                        </h5>
                        <p class="text-white mb-0">
                            As an official AV partner with decades of expertise, Acoustic Arts Pvt. Ltd. delivers Powersoft
                            amplifiers that redefine performance with unmatched clarity, efficiency, and reliability. Our
                            commitment goes beyond hardware — we ensure every project benefits from intelligent design and
                            flawless execution.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Certified Amplifier Specialists</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Energy-Efficient Power Solutions</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Custom System Design & Tuning</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Scalable Integration for Any Venue</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Comprehensive Support & Maintenance</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Experience. Certified Biamp Integration End -->
    {{--
    <section class="py-5" style="background-color: #191C24; color: #ffffff;">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Text Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h2 class="fw-bold mb-4" style="color: #eb1616;">25 Years of Experience.<br>
                        Certified Biamp Integration.</h2>
                    <p class="mb-4 text-light-emphasis" style="color: #cccccc;">
                        As an official AV partner with decades of hands-on experience,
                        <strong>Acoustic Arts Pvt. Ltd.</strong> specializes in designing and deploying
                        Biamp solutions that sound as stunning as they look. We provide full-stack services —
                        from consultation and system design to installation, calibration, and post-sale support.
                    </p>

                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center mb-0">
                            <span class="me-3 text-danger fs-5">✔</span>
                            <span>Certified Professionals</span>
                        </li>
                        <li class="d-flex align-items-center mb-0">
                            <span class="me-3 text-danger fs-5">✔</span>
                            <span>AV Network & Acoustic Design</span>
                        </li>
                        <li class="d-flex align-items-center mb-0">
                            <span class="me-3 text-danger fs-5">✔</span>
                            <span>On-site and Remote Setup</span>
                        </li>
                        <li class="d-flex align-items-center mb-0">
                            <span class="me-3 text-danger fs-5">✔</span>
                            <span>Multi-room Integration</span>
                        </li>
                        <li class="d-flex align-items-center mb-0">
                            <span class="me-3 text-danger fs-5">✔</span>
                            <span>Long-term Support & Maintenance</span>
                        </li>
                    </ul>
                </div>

                <!-- Image -->
                <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <img src="{{ asset('assets/img/installation.jpg') }}" alt="Installation"
                        class="img-fluid rounded-3 shadow-lg border">
                </div>

            </div>
        </div>
    </section> --}}
@endsection
