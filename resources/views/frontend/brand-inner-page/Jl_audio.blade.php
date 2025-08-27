@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Jl audio</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">jl audio</li>
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
                            <h1 class="text-uppercase text-primary mb-3">JL Audio</h1>
                            <p class="text-uppercase mb-0">Founded in 1975 in the USA, JL Audio is renowned for crafting
                                high-performance audio products that deliver exceptional sound quality, precision
                                engineering, and uncompromising reliability for both home and mobile applications.</p>
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
                <h1 class="text-uppercase">JL Audio – The Power of Precision Sound</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 border">
                        <div
                            class="bg-secondary text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-primary mb-4">Elevating Excellence in Precision Audio
                            </h2>
                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd. proudly distributes JL Audio — a legendary American brand recognized
                                for its world-class subwoofers, speakers, and amplifiers. Engineered for those who demand
                                nothing less than perfection, JL Audio products deliver powerful, accurate, and immersive
                                sound that brings music and movies to life with unmatched realism. With a heritage of
                                innovation and craftsmanship, every JL Audio creation reflects a commitment to precision,
                                performance, and enduring quality.

                            </p>
                            <p class="mb-3">
                                JL Audio Brilliance. Delivered by Acoustic Arts.

                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/jlaudio1.png') }}" alt="Modern boardroom with Biamp system"
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
                        <img class="img-fluid w-100" src="{{ asset('assets/img/Jlaudio2.png') }}"
                            alt="Biamp Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 border">
                        <div
                            class="bg-secondary text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-primary mb-4">Celebrated Worldwide for Precision Audio Excellence</h2>
                            <p class="mb-3">
                                Acoustic Arts Pvt. Ltd. proudly distributes JL Audio — a globally respected brand renowned
                                for its high-performance subwoofers, speakers, and amplifiers. Since its founding, JL Audio
                                has set new benchmarks in sound reproduction.
                            </p>
                            <p class="mb-3">
                                From industry-leading subwoofers and versatile loudspeakers to advanced marine and
                                automotive audio solutions, JL Audio products deliver unmatched accuracy and impact — all
                                crafted with designs that blend seamlessly.
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
                <h1 class="text-uppercase">Experience the JL Audio Advantage</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border ">
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">JL Audio Subwoofers
                            </h5>
                            <span class="">World-renowned for their deep, precise, and impactful bass, JL Audio subwoofers set the standard for low-frequency performance in both home and mobile audio systems.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">JL Audio Speakers</h5>
                            <span class="">From compact bookshelf designs to powerful floor-standing models, JL Audio speakers deliver exceptional clarity, dynamics, and balance across the full frequency range.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border ">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">JL Audio Amplifiers</h5>
                            <span class="">Engineered for clean, efficient, and powerful output, JL Audio amplifiers provide the perfect foundation for achieving uncompromising sound quality.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item border ">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-secondary text-center p-4">
                            <h5 class="text-uppercase">JL Audio Marine & Automotive Solutions</h5>
                            <span class="">Specially crafted for challenging environments, these systems offer durability, precision, and high-impact sound — whether on the road or out at sea.
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
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">Perfectly Crafted for Every Beat</h5>
                        <p class="text-white mb-0">
                            Acoustic Arts Pvt. Ltd. proudly distributes JL Audio — a globally trusted leader in high-performance subwoofers, speakers, and amplifiers, celebrated for their precision, power, and enduring craftsmanship. Since its inception, JL Audio has been the choice of passionate music lovers, audiophiles.
                        </p>
                        <p class="text-white mb-0">
                           From luxury residences and dedicated home cinemas to high-end automotive and marine installations, JL Audio delivers thunderous yet controlled bass.
                        </p>
                    </div>
                </div>

                <!-- Start Icon Grid Section -->
                <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 rounded-4 shadow">
                        <div class="row row-cols-2 row-cols-md-4 g-3">

                            <!-- Arts & Theatre -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-palette-fill fs-2 text-primary mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Arts & Theatre</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Live Sound -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-speaker-fill fs-2 text-success mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Live Sound</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Bars/Restaurants -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-cup-straw fs-2 text-warning mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Bars/ Restaurants</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Corporate -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-briefcase-fill fs-2 text-danger mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Corporate</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Houses of Worship -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-building-columns fs-2 text-info mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Houses of Worship</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Clubs & Venues -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-vinyl-fill fs-2 text-secondary mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Clubs & Venues</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Museums -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-easel2-fill fs-2 text-dark mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Museums</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Malls & Shopping Centers -->
                            <div class="col">
                                <div class="card text-center border-0 shadow-sm h-100 py-3 px-0">
                                    <div class="card-body d-flex flex-column justify-content-center">
                                        {{-- <i class="bi bi-shop fs-2 text-primary mb-3"></i> --}}
                                        <p class="fw-semibold text-uppercase small mb-0">Malls & Shopping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <h1 class="text-uppercase">Inspired Audio Precision — Powered by JL Audio.</h1>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-1 h-100 border">
                        <img src="{{ asset('assets/img/JL3.png') }}" alt="Installation"
                            class="img-fluid rounded-3 shadow-lg border h-100" style="box-shadow: 2px 2px 10px !important;">
                    </div>
                </div> <!-- End Icon Grid -->
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">JL Audio, Engineered for Excellence by Acoustic Arts
                        </h5>
                        <p class="text-white mb-0">
                           As a premier AV solutions provider with over 25 years of experience, Acoustic Arts Pvt. Ltd. is proud to offer JL Audio — a world leader in precision-engineered subwoofers, speakers, and amplifiers. Designed for unmatched bass performance, crystal-clear detail, and seamless integration, JL Audio products transform music, home cinema, automotive, and marine audio experiences across the globe.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>High-Performance Subwoofers, Speakers & Amplifiers</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Industry-Leading Bass Accuracy & Impact</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Premium Solutions for Home, Automotive & Marine Applications</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Durable, Elegant Designs for Any Environment</span>
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