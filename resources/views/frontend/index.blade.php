@extends('layouts.app')
@section('content')
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 2rem;
            height: 2rem;
            font-weight: 900 !important;
        }

        .service-card {
            transition: all 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }
    </style>
    <!-- Modern Acoustic Arts Carousel Start -->
    <div class="container-fluid p-0 position-relative">
        <div id="acousticCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/void.jpg') }}" class="d-block w-100"
                        style="height: 100vh; object-fit: cover;" alt="Slide 1">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Pure Sound. Real Emotion.</h1>
                        <p class="text-white-100 fs-5 mb-4 ps-5">Welcome to Acoustic Arts — where every beat, tone, and
                            silence has meaning.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Arclite-15B.jpg') }}" class="d-block w-100"
                        style="height: 100vh; object-fit: cover;" alt="Slide 2">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Crafting Immersive Soundscapes
                        </h1>
                        <p class="text-white-100 fs-5 mb-4 ps-5 text-start">Studio-grade clarity with VOID Acoustics &
                            Arcline bass.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/S3.webp') }}" class="d-block w-100"
                        style="height: 100vh; object-fit: cover;" alt="Slide 3">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Where Sound Becomes Art</h1>
                        <p class="text-white-100 fs-5 mb-4 ps-5">At Acoustic Arts, sound isn't heard — it's felt.</p>
                        {{-- <a class="btn btn-light btn-lg shadow" href="#contact">Get in Touch</a> --}}
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/goldenear-banner.jpg') }}" class="d-block w-100"
                        style="height: 100vh; object-fit: cover;" alt="Slide 3">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Pure Sound. Timeless Design.</h1>
                        <p class="text-white-100 fs-5 mb-4 ps-5">GoldenEar performance for refined living.</p>
                        {{-- <a class="btn btn-light btn-lg shadow" href="#contact">Get in Touch</a> --}}
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#acousticCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon fs-5" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#acousticCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon fs-5" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="logo-marquee">
        <div class="logo-track">
            <div class="logo-set">
                <img src="{{ asset('assets/img/logo/powersoft.png') }}" alt="powersoft">
                <img src="{{ asset('assets/img/logo/jlaudio.png') }}" alt="jlaudio">
                <img src="{{ asset('assets/img/logo/biamp.png') }}" alt="biamp">
                <img src="{{ asset('assets/img/logo/goldenear.png') }}" alt="goldenear">
                <img src="{{ asset('assets/img/logo/void.png') }}" alt="void">
                <img src="{{ asset('assets/img/logo/cloud.png') }}" alt="cloud">
                <img src="{{ asset('assets/img/logo/audix.png') }}" alt="audix">
            </div>
            <div class="logo-set">
                <img src="{{ asset('assets/img/logo/powersoft.png') }}" alt="powersoft">
                <img src="{{ asset('assets/img/logo/jlaudio.png') }}" alt="jlaudio">
                <img src="{{ asset('assets/img/logo/biamp.png') }}" alt="biamp">
                <img src="{{ asset('assets/img/logo/goldenear.png') }}" alt="goldenear">
                <img src="{{ asset('assets/img/logo/void.png') }}" alt="void">
                <img src="{{ asset('assets/img/logo/cloud.png') }}" alt="cloud">
                <img src="{{ asset('assets/img/logo/audix.png') }}" alt="audix">
            </div>
            <div class="logo-set">
                <img src="{{ asset('assets/img/logo/powersoft.png') }}" alt="powersoft">
                <img src="{{ asset('assets/img/logo/jlaudio.png') }}" alt="jlaudio">
                <img src="{{ asset('assets/img/logo/biamp.png') }}" alt="biamp">
                <img src="{{ asset('assets/img/logo/goldenear.png') }}" alt="goldenear">
                <img src="{{ asset('assets/img/logo/void.png') }}" alt="void">
                <img src="{{ asset('assets/img/logo/cloud.png') }}" alt="cloud">
                <img src="{{ asset('assets/img/logo/audix.png') }}" alt="audix">
            </div>
        </div>
    </div>


    <!-- Modern Acoustic Arts Carousel End -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                <h1 class="text-uppercase fw-bold text-dark">Powered by the Best – Experience Iconic Audio Brands</h1>
                <p class="text-muted fs-5">
                    At Acoustic-Arts, we partner only with industry-leading audio brands that guarantee performance,
                    innovation, and reliability.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Biamp -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Biamp</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Biamp is a global leader in networked audio-visual solutions, trusted worldwide for its
                                seamless integration, powerful DSP processing, and rock-solid reliability. At Acoustic-Arts,
                                we use Biamp to bring
                                scalable, intelligent, and smart control into boardrooms, auditoriums, houses of worship,
                                and more.
                            </p>
                            <a href="{{ route('biamp') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>

                <!-- Powersoft -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Powersoft</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Italian-engineered and globally trusted, Powersoft delivers class-leading amplifier
                                technology with intelligent DSP control. Known for their energy efficiency, reliability, and
                                compact design, Powersoft amps power concert venues, stadiums, and mission-critical
                                installations.
                            </p>
                            <a href="{{ route('powersoft') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>

                <!-- Void -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary text-white bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Void</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Void is where art truly meets sound. Their uniquely designed, high-performance loudspeakers
                                are both sonic and visual masterpieces—perfect for premium clubs, lounges, lifestyle venues,
                                and beyond.
                            </p>
                            <a href="{{ route('void') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>
                <!-- Audix -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Audix</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                From corporate boardrooms to live music stages, Audix microphones are designed to capture
                                sound with pristine clarity. Engineered in the USA, Audix products are trusted by
                                professionals for rugged build, feedback resistance, and pure voice reproduction.
                            </p>
                            <a href="{{ route('audix') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>

                <!-- Void -->
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary text-white bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Void</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Void is where art truly meets sound. Their uniquely designed, high-performance loudspeakers
                                are both sonic and visual masterpieces—perfect for premium clubs, lounges, lifestyle venues,
                                and beyond.
                            </p>
                            <a href="{{ route('void') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div> --}}

                <!-- Cloud -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary text-white bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">Cloud</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Cloud is the trusted backbone of smart multi-zone audio. Whether it’s a hotel, restaurant,
                                shopping mall, or public building, Cloud enables effortless, reliable control of background
                                music, announcements, paging, and seamless audio.
                            </p>
                            <a href="{{ route('cloud') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>
                <!-- GoldenEar -->
                <div class="col-lg-4 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">GoldenEar</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                Known for their ribbon tweeters and ultra-transparent sound, GoldenEar speakers are revered
                                in the home theatre and Hi-Fi world. Wide imaging and natural tonality transform rooms into
                                immersive soundscapes.
                            </p>
                            <a href="{{ route('goldenear') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>

                <!-- JL Audio -->
                <div class="col-lg-12 col-md-6">
                    <div class="card rounded-4 border-0 shadow-lg h-100 transition">
                        <div class="card-body p-5 d-flex flex-column">
                            <div class="mb-3">
                                <span
                                    class="badge bg-primary bg-dark px-3 py-2 fs-6 text-uppercase border border-danger">JL
                                    Audio</span>
                            </div>
                            <p class="text-muted flex-grow-1">
                                When it comes to deep, controlled, and distortion-free bass, JL Audio stands unmatched.
                                Their subwoofers are engineered for accuracy and impact—essential for both home theatres and
                                high-performance audio systems.
                            </p>
                            <a href="{{ route('JL_Audio') }}"
                                class="mt-3 ms-auto fw-semibold text-primary text-decoration-none">Read more..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Start -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
                <h1 class="text-uppercase text-dark">What We Provide – The Acoustic Arts Experience</h1>
            </div>
            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">Cutting Edge Products</h3>
                            <p> We offer a selection of cutting edge products from the most respected brands worldwide</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">Powersoft Amplifiers </h3>
                            <p>We recommended use Powersoft amplifiers for their unmatched power efficiency, clarity, and
                                reliability — ensuring peak performance every time.</p>
                        </div>
                    </div>
                </div> --}}

                <!-- Service 3 -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">Acoustic Design & Consultation</h3>
                            <p>Get expert advice on optimizing sound in any space — home theaters, auditoriums, or
                                commercial
                                venues.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">On-Site Audio Management</h3>
                            <p>From setup to live mixing, our professional team ensures every sound hits just right.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">System Tuning & Calibration</h3>
                            <p>We fine-tune every frequency to match your space’s acoustic profile perfectly.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-dark mb-3">Service & AMC</h3>
                            <p>We also have an in house.</p>
                        </div>
                    </div>
                </div>
                <!-- Service 7 (Full Width) -->
                {{-- <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-card h-100 shadow-lg border-0 rounded-4 p-5 ps-0 d-flex">
                    <div class="ps-4">
                        <h3 class="text-uppercase text-dark mb-3">Stacking</h3>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                    </div>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Price Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Price & Plan</p>
                        <h1 class="text-uppercase text-dark mb-4">Check Out Our Barber Services And Prices</h1>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Haircut</h6>
                                <span class="text-uppercase text-primary">$29.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Beard Trim</h6>
                                <span class="text-uppercase text-primary">$35.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Mans Shave</h6>
                                <span class="text-uppercase text-primary">$23.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Hair Dyeing</h6>
                                <span class="text-uppercase text-primary">$19.00</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="text-uppercase mb-0">Mustache</h6>
                                <span class="text-uppercase text-primary">$15.00</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Stacking</h6>
                                <span class="text-uppercase text-primary">$39.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="img/price.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Price End -->

    <!-- home cinema Start -->
    {{-- <div class="container-xxl py-5">
        <section class="py-5 bg-black text-white">
            <div class="container">
                <div class="row g-5 align-items-center flex-column-reverse flex-md-row">

                    <!-- Text Section -->
                    <div class="col-md-6">
                        <div class="text-light">
                            <h2 class="display-5 fw-bold mb-4">Home Cinema</h2>
                            <p class="lead mb-3">
                                <strong>Public/Private Theater by Acoustic Arts Pvt. Ltd.</strong>
                            </p>
                            <p class="mb-4">
                                Experience the magic of cinema—right in your home. We design and build luxurious private
                                theaters that rival the best commercial cinemas. From immersive <strong>Dolby Atmos</strong>
                                audio to stunning <strong>4K/8K visuals</strong>, intelligent lighting, and acoustic
                                perfection—every detail is crafted to impress.
                            </p>
                            <p class="mb-4">
                                Whether it's a cozy media den or a grand entertainment room, our solutions are bespoke,
                                refined, and future-ready. Acoustic Arts delivers cinema that doesn’t just entertain—it
                                transports.
                            </p>

                        </div>
                    </div>

                    <!-- Image Section -->
                    <div class="col-md-6">
                        <div class="ratio ratio-16x9 rounded-4 shadow-lg overflow-hidden">
                            <img src="{{ asset('/assets/img/home-cinema.jpg') }}" alt="home cinema" class="">
                        </div>
                    </div>
                </div>
        </section>
    </div> --}}
    <!-- Home Cinema Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-uppercase text-dark mt-3">Home Cinema</h1>
            </div>
            <div class="row g-4 justify-content-between">
                <!-- Image Column -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative rounded-4 overflow-hidden shadow-lg h-100">
                        <img src="{{ asset('/assets/img/home-cinema.png') }}" alt="home-cinema"
                            class="w-100 h-100 object-fit-cover">
                        <!--Subtle overlay-->
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.2);">
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded-4 shadow-lg p-5 h-100 d-flex flex-column justify-content-center">
                        <h2 class="fw-bold mb-4" style="color: #1a1a1a;">Public/Private Theater by Acoustic Arts Pvt. Ltd.
                        </h2>
                        <p class="mb-4 text-muted" style="line-height:1.7;">
                            Experience the magic of cinema—right in your home. We design and build luxurious private
                            theaters that rival the best commercial cinemas. From immersive Dolby Atmos audio to
                            stunning 4K/8K visuals, intelligent lighting, and acoustic perfection—every detail is crafted to
                            impress.
                        </p>
                        <p class="mb-4 text-muted" style="line-height:1.7;">
                            Whether it's a cozy media den or a grand entertainment room, our solutions are bespoke,
                            refined, and future-ready. Acoustic Arts delivers cinema that doesn’t just entertain—it
                            transports.
                        </p>
                        <a href="{{ route('contact') }}" class="btn btn-primary btn-sm align-self-start"
                            style="transition: transform 0.3s ease, box-shadow 0.3s ease;"
                            onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.3)';"
                            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0,0,0,0.2)';">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Cinema End -->
    <!-- Home cristyal Start -->
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
                            Designing audio for a 15-seat meeting room is about more than just coverage — it’s about
                            precision, clarity, and seamless communication. Biamp’s advanced DSP platforms, smart
                            beamtracking microphones, and intuitive control systems ensure that every voice is heard
                            clearly, whether participants are speaking softly, moving around, or joining remotely.
                            Experience consistent, high-fidelity sound that makes every meeting productive and immersive.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home cristyal End -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-around">
                 <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
          
        </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 w-100 ps-0 border border">
                        <img src="{{ asset('assets/img/parel.png') }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        <div class="ps-4">
                            <h3 class="text-uppercase text-white mb-3">Precision Sound, Every Voice, Every Word</h3>
                            <p>Designing audio for a 15-seat meeting room is about more than just coverage — it’s about precision, clarity, and seamless communication. Biamp’s advanced DSP platforms, smart beamtracking microphones, and intuitive control systems ensure that every voice is heard clearly, whether participants are speaking softly, moving around, or joining remotely. Experience consistent, high-fidelity sound that makes every meeting productive and immersive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-20">
                <h1 class="text-center pb-4">Acoustic Arts Pvt. Ltd. is Open to Serve You</h1>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow-lg h-100 d-flex flex-column justify-content-center p-5 border">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Working Hours</p>
                        {{-- <h1 class="text-uppercase text-dark mb-4 fs-5">Acoustic Arts Pvt. Ltd. is Open to Serve You
                        </h1> --}}
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0 text-secondary">Monday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0 text-secondary">Tuesday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0 text-secondary">Wednesday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0 text-secondary">Thursday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0 text-secondary">Friday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0 text-secondary">Saturday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0 text-secondary">Sunday</h6>
                                <span class="text-uppercase text-primary">Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100 border" style="overflow:hidden;">
                        <img class="img-fluid h-100 w-100" src="{{ asset('assets/img/thank-you.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Working Hours End -->
    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Testimonial</p>
                <h1 class="text-uppercase text-dark">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/t1.jpeg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">John Deo</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/t2.jpeg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Khan Sir</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/t3.jpeg') }}' alt=''>">
                    <h4 class="text-uppercase">Client Name</h4>
                    <p class="text-primary">Ankit</p>
                    <span class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo
                        sea clita.
                    </span>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Testimonial End -->
@endsection
