@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Audix</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Audix</li>
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
                            <h1 class="text-uppercase text-primary mb-3">Audix</h1>
                            <p class="text-uppercase mb-0">Founded in 1984 in Wilsonville, Oregon, Audix is a globally
                                respected leader in microphone innovation.</p>
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
                <h1 class="text-uppercase"> Audix – Redefining Sound with Unmatched Clarity</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 shadow-lg">
                        <div
                            class="bg-white text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4">
                            <h2 class="text-dark mb-4">Experience the Future of Professional Amplification</h2>

                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes Audix — a trusted name in professional
                                microphones and audio solutions.
                                Renowned for innovation, durability, and pristine sound quality, Audix products are designed
                                to meet the demands of
                                live performances, studio recordings, and corporate installations alike. Every microphone
                                reflects a commitment to
                                accuracy, reliability, and craftsmanship.
                            </p>
                             <p class="mb-3 text-color-secondary">
                                Audix Excellence. Distributed by Acoustic Arts.
                             </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow fadeInUp border p-1" style="background: #191C24" data-wow-delay="0.1s">
                    <div class="team-item h-100 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/img/microphoneaudio.png') }}" alt="Modern boardroom with Biamp system"
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
                        <img class="img-fluid w-100" src="{{ asset('assets/img/audix_category.webp') }}"
                            alt="Biamp Trusted Worldwide" style="box-shadow: 2px 2px 10px">
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item h-100 shadow-lg">
                        <div
                            class="bg-white text-white text-center p-3 h-100 d-flex flex-column justify-content-center rounded-4 shadow-lg">
                            <h2 class="text-dark mb-4">Trusted Worldwide for AV Excellence</h2>
                            <p class="mb-3 text-color-secondary">
                                Acoustic Arts Pvt. Ltd. proudly distributes Audix — a globally recognized brand known for
                                precision, durability, and exceptional sound reproduction. Since its inception, Audix has
                                been setting new standards in professional microphone technology, trusted by performers,
                                studios, and venues worldwide.
                            </p>
                            <p class="mb-3 text-color-secondary">
                                From high‑performance vocal and instrument microphones to innovative wireless systems and
                                conference solutions, Audix delivers unmatched clarity and consistency. Whether it’s live
                                concerts, corporate events, houses of worship, or recording studios.
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

    <!-- Our Biamp Product Line Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">Our Barber</p> --}}
                <h1 class="text-uppercase">Our Audix Product Line</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item shadow-lg h-100 border-top border-danger hovwer">
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Audix Vocal Microphones
                            </h5>
                            <span class="">Renowned for their clarity, durability, and precision, Audix vocal microphones
                                are trusted by performers and Engineered.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="tteam-item shadow-lg h-100 border-top border-danger hovwer">
                        {{-- <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/img/Trusted-Worldwide.png') }}" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div> --}}
                        <div class="bg-white text-center p-4">
                            <h5 class="text-uppercase text-dark">Audix Instrument Microphones</h5>
                            <span class="">Engineered for drums, guitars, horns, and more, these microphones capture the
                                full character of instruments with remarkable detail and accuracy.</span>
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
                        <div class="bg-white text-dark p-4">
                            <h5 class="text-uppercase text-dark">Audix Wireless Systems</h5>
                            <span class="">Cutting-edge wireless solutions designed for seamless connectivity and
                                uncompromising audio quality.</span>
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
                            <h5 class="text-uppercase text-dark">Audix Installed Sound Solutions</h5>
                            <span class="">From corporate boardrooms and classrooms to houses of worship and government
                                facilitie.

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

                            Acoustic Arts Pvt. Ltd. proudly distributes Audix — a globally trusted name in professional
                            microphones and audio solutions. From corporate boardrooms and houses of worship to concert
                            stages and broadcast studios, Audix captures every word and every note with unmatched clarity
                            and precision.
                        </p>
                        <p class="text-white mb-0 text-color-secondary">
                            With cutting‑edge technology, rugged reliability, and a reputation for delivering studio‑quality
                            sound in any environment.
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
                <h1 class="text-uppercase">25 Years of Experience. Certified Audix Distributor.</h1>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Icons Grid -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-1 h-100 border">
                        <img src="{{ asset('assets/img/Biamp Distributor.png') }}" alt="Installation"
                            class="img-fluid rounded-3 shadow-lg border h-100" style="box-shadow: 2px 2px 10px !important;">
                    </div>
                </div> <!-- End Icon Grid -->
                <!-- Text Block -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-4 h-100 d-flex flex-column justify-content-center border">
                        <h5 class="text-uppercase text-primary mb-3">Audix Microphones, Perfected by Acoustic Arts</h5>
                        <p class="text-white mb-0">
                            As an official AV partner with decades of expertise, Acoustic Arts Pvt. Ltd. brings you Audix —
                            a world-renowned innovator in professional microphones and audio solutions. Trusted since 1984
                            and proudly designed, engineered, and assembled in the USA, Audix products are celebrated for
                            delivering pristine sound quality and rock‑solid reliability.
                        </p>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span> Precision‑Engineered Microphones for Every Application</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Live Sound, Studio Recording & Installed Audio Solutions</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span> Robust Designs Built for Long-Term Reliability</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Custom Integration for Houses of Worship, Education & Corporate</span>
                            </li>
                            <li class="d-flex align-items-center mb-0">
                                <span class="me-3 text-danger fs-5">✔</span>
                                <span>Dedicated Support & Maintenance from Certified Experts</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection