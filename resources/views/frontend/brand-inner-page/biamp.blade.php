@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Biamp</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bimap</li>
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
                            <h1 class="text-uppercase text-primary mb-3">Biamp</h1>
                            <p class="text-uppercase mb-0">founded in 1976, is a global leader in science-driven professional AV solutions, delivering high-quality audio for modern spaces worldwide.</p>
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
                <h1 class="text-uppercase">Biamp – Smarter Sound for Smarter Spaces</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 shadow-lg">
                        <div
                            class="bg-white text-dark text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4">
                            <h2 class="text-dark mb-4">Experience the Future of Audio with Biamp</h2>
                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd., an authorized distributor of Biamp, brings you the very best in
                                professional audio innovation. From boardrooms and classrooms to auditoriums and large-scale
                                venues, Biamp’s cutting-edge DSP technology ensures unmatched clarity, seamless
                                compatibility, and proven reliability. With our 25+ years of expertise, we deliver not just
                                world-class products, but also the assurance of expert guidance and dedicated support — so
                                every installation achieves exceptional results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/evoko.png') }}" alt="Modern boardroom with Biamp system"
                            class="w-100 border border" style="box-shadow: 2px 2px 10px">
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
                        <img class="img-fluid w-100" src="{{ asset('assets/img/tesira-forte-ci.png') }}"
                            alt="Biamp Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 shadow-lg">
                        <div
                            class="bg-white text-dark text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4">
                            <h2 class="text-dark mb-4">Trusted Worldwide for AV Excellence</h2>
                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd. proudly distributes Biamp — a global pioneer in professional
                                audiovisual technology known for its unmatched clarity, reliability, and innovation. With
                                decades of engineering excellence, Biamp delivers cutting-edge AV solutions trusted across
                                industries worldwide.


                            </p>
                            <p class="mb-3">
                                From advanced DSP platforms and beamtracking microphones to intuitive control systems, Biamp
                                products ensure every word is heard and every interaction is enhanced. Whether in
                                boardrooms, classrooms, airports, or houses of worship, our distribution expertise
                                guarantees Biamp’s world-class technology is accessible.
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
    <!-- Trusted End -->
<!-- Home Cinema Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
             <h1 class="text-uppercase text-dark mt-3">Crystal-Clear Audio for 15-Seat Meeting Rooms</h1>
        </div>
        <div class="row g-4 justify-content-between">
            <!-- Image Column -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative rounded-4 overflow-hidden shadow-lg h-100">
                    <img src="{{ asset('assets/img/parel.png') }}" alt="" class="w-100">
                    <!-- Subtle overlay -->
                    {{-- <div class="position-absolute top-0 start-0 w-100 h-100"
                         style="background: rgba(0,0,0,0.2);"></div> --}}
                </div>
            </div>

            <!-- Content Column -->
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white rounded-4 shadow-lg p-5 h-100 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold mb-4" style="color: #1a1a1a;">Precision Sound, Every Voice, Every Word</h2>
                    <p class="mb-4 text-muted" style="line-height:1.7;">
                       Designing audio for a 15-seat meeting room is about more than just coverage — it’s about precision, clarity, and seamless communication. Biamp’s advanced DSP platforms, smart beamtracking microphones, and intuitive control systems ensure that every voice is heard clearly, whether participants are speaking softly, moving around, or joining remotely. Experience consistent, high-fidelity sound that makes every meeting productive and immersive.
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Home Cinema End -->
    <!-- Our Biamp Product Line Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p> --}}
                <h1 class="text-uppercase">Our Biamp Product Line</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Tesira® DSP Platform</h5>
                            <span class="">Advanced digital signal processing with AVB and Dante support for complete
                                audio and video control.</span>
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
                            <h5 class="text-uppercase text-dark">Devio® Collaboration Hub</h5>
                            <span class="">Perfect for small meeting rooms and BYOD setups. Plug-and-play USB
                                conferencing with high clarity.</span>
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
                            <h5 class="text-uppercase text-dark">Parle Beamtracking Microphones</h5>
                            <span class="">Revolutionary microphones that track voice dynamically, ensuring 360°
                                coverage and clarity.</span>
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
                            <h5 class="text-uppercase text-dark">Biamp Control & Amplifiers</h5>
                            <span class="">Room automation, custom touch interfaces, and robust power amplification
                                for professional AV spaces.</span>
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
                            From corporate boardrooms and government chambers to academic lecture halls and training
                            centers, Biamp systems — distributed in India by <strong> Acoustic Arts Pvt. Ltd.</strong> — are
                            designed to meet the diverse acoustic needs of every environment. Whether it’s a compact meeting
                            room or a large-scale auditorium, Biamp’s advanced signal processing, modular design, and
                            intelligent audio routing deliver consistently clear, high-quality sound. With scalable
                            architecture suited for both new AV projects and retrofit installations, Biamp ensures unmatched
                            performance, reliability, and flexibility — empowering integrators and clients to create audio
                            experiences that evolve with their space requirements.
                        </p>
                    </div>
                </div>

                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 rounded-4 shadow h-100">
                        <table class="table table-bordered text-center align-middle shadow-sm">
                            <tbody>
                                <tr>
                                    <td class="fw-semibold text-uppercase small py-4">Boardrooms & Meeting Rooms</td>
                                    <td class="fw-semibold text-uppercase small py-4">Classrooms & Training Centres </td>
                                    <td class="fw-semibold text-uppercase small py-4">Houses of Worship
                                    </td>
                                    <td class="fw-semibold text-uppercase small py-4">Government & Civic Facilities </td>
                                </tr>
                                <tr>
                                    <td class="fw-semibold text-uppercase small py-4">Hospitality & Event Venues</td>
                                    <td class="fw-semibold text-uppercase small py-4">Performance Spaces
                                    </td>
                                    {{-- <td class="fw-semibold text-uppercase small py-4">Museums</td>
            <td class="fw-semibold text-uppercase small py-4">Malls &amp; Shopping</td> --}}
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div> <!-- End Icon Grid -->
            </div>
        </div>
    </div>

    <!-- Applications End -->

    <!-- Experience. Certified Biamp Integration Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-uppercase">25 Years of Experience. Authorized Biamp Distributor.</h1>
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
                        <h5 class="text-uppercase text-primary mb-3">Biamp Solutions, Perfected by Acoustic Arts</h5>
                        <p class="text-white mb-0">
                            With over 25 years of proven excellence, Acoustic Arts Pvt. Ltd. proudly distributes Biamp’s
                            world-class audio solutions across India. As an official AV partner, we don’t just provide
                            cutting-edge technology — we ensure every system is tailored to deliver unmatched clarity,
                            reliability, and performance. From consultation and system design to installation and ongoing
                            support.
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
