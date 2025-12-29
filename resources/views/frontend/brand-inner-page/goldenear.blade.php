@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">GoldenEar</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">GoldenEar</li>
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
                        <div class="w-50 bg-secondary p-3" style="margin-top:-25%;">
                            <h1 class="text-uppercase text-primary mb-3">GoldenEar</h1>
                            <p class="text-uppercase mb-0">Founded in 2010 in the USA, GoldenEar Technology is celebrated
                                for its innovative loudspeaker designs that combine stunning audio performance with elegant
                                aesthetics.</p>
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
                <h1 class="text-uppercase">GoldenEar – The Art of High-Fidelity Sound</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100">
                        <div
                            class="bg-white text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Elevating Excellence in High-Fidelity Sound
                            </h2>
                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes GoldenEar Technology — an acclaimed American
                                brand celebrated for its award-winning loudspeakers and cutting-edge audio innovation.
                                Designed for discerning listeners, GoldenEar products deliver breathtaking clarity,
                                expansive soundstage, and deep, impactful bass that transforms both music and movies into
                                unforgettable experiences. With elegant aesthetics and meticulous engineering, every
                                GoldenEar speaker embodies the perfect harmony of art and performance.
                            </p>
                            <p class="mb-3 text-color-secondary">
                                GoldenEar Brilliance. Delivered by Acoustic Arts.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/goldenear.jpg') }}" alt="Modern boardroom with Biamp system"
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
                <h1 class="text-uppercase">Sound That Inspires. Everywhere</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img class="img-fluid w-100" src="{{ asset('assets/img/goldenear2.png') }}"
                            alt="Biamp Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100">
                        <div
                            class="bg-white text-dark text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Celebrated Worldwide for High-Fidelity Audio</h2>
                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes GoldenEar Technology — a globally acclaimed
                                brand recognized for its exceptional loudspeakers and uncompromising audio performance.
                                Since its inception, GoldenEar has redefined the listening experience, captivating
                                audiophiles and home theater enthusiasts with sound that is rich, detailed, and lifelike.
                            </p>
                            <p class="mb-3 text-color-secondary">
                                From elegant floor-standing towers and versatile bookshelf speakers to advanced subwoofers
                                and immersive soundbars, natural soundstage — all housed in designs that complement any
                                space.
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
                <h1 class="text-uppercase">Experience the GoldenEar Technology Advantage</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">GoldenEar Tower Speakers
                            </h5>
                            <span class="">Engineered for breathtaking realism, GoldenEar tower speakers deliver expansive
                                soundstages, deep bass.</span>
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
                            <h5 class="text-uppercase text-dark">GoldenEar Bookshelf Speakers</h5>
                            <span class="">Compact yet powerful, these speakers offer rich, balanced sound that brings every
                                note and nuance to life in smaller spaces.</span>
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
                            <h5 class="text-uppercase text-dark">GoldenEar Subwoofers</h5>
                            <span class="">Designed for deep, impactful low frequencies, GoldenEar subwoofers add cinematic
                                depth and musical fullness to any system.</span>
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
                            <h5 class="text-uppercase text-dark">GoldenEar Soundbars & Surround Solutions</h5>
                            <span class="">Immersive, space-saving designs that deliver wide, room-filling audio for modern
                                home entertainment setups.
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
                        <h5 class="text-uppercase text-dark mb-3">Perfectly Crafted for Every Note</h5>
                        <p class="text-white mb-0 text-color-secondary">
                            Acoustic Arts Pvt. Ltd. proudly distributes GoldenEar Technology — a globally trusted name in
                            high-fidelity loudspeakers, celebrated for its immersive performance and elegant design. Since
                            its founding, GoldenEar has been the choice of discerning music lovers, audiophiles, and home
                            theater enthusiasts worldwide.
                        </p>
                        <p class="text-white mb-0 text-color-secondary">
                            From intimate listening rooms and luxury residences to dedicated home cinemas and premium audio
                            lounges, GoldenEar delivers breathtaking clarity, deep, impactful bass, and a lifelike
                            soundstage tailored to every listening space.
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
                <h1 class="text-uppercase">Inspired Audio Perfection — Powered by GoldenEar.</h1>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-1 h-100 border">
                        <img src="{{ asset('assets/img/supersat.webp') }}" alt="Installation"
                            class="img-fluid rounded-3 shadow-lg border h-100" style="box-shadow: 2px 2px 10px !important;">
                    </div>
                </div> <!-- End Icon Grid -->
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">GoldenEar Technology, Engineered for Excellence by
                            Acoustic Arts
                        </h5>
                        <p class="text-white mb-0">
                            As a premier AV solutions provider with over 25 years of experience, Acoustic Arts Pvt. Ltd. is
                            proud to offer GoldenEar Technology — an acclaimed innovator in high-fidelity loudspeakers.
                            Designed for breathtaking realism, elegant aesthetics, and seamless integration, GoldenEar
                            products elevate music and home cinema experiences in luxury residences, dedicated theaters, and
                            premium audio spaces worldwide.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>High-Performance Loudspeakers for Music & Home Theater</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Award-Winning Tower, Bookshelf, and Soundbar Designs</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Deep, Impactful Bass with Advanced Subwoofer Technology</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Elegant, Space-Friendly Solutions for Any Environment</span>
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