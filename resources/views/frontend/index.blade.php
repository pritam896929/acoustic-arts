@extends('layouts.app')
@section('content')
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 2rem;
            height: 2rem;
            font-weight: 900 !important;
        }
    </style>
    <!-- Modern Acoustic Arts Carousel Start -->
    <div class="container-fluid p-0 position-relative">
        <div id="acousticCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/s1.png') }}" class="d-block w-100"
                        style="height: 90vh; object-fit: cover;" alt="Slide 1">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35); backdrop-filter: blur(2px);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Pure Sound. Real Emotion.</h1>
                        <p class="text-white-50 fs-5 mb-4 ps-5">Welcome to Acoustic Arts — where every beat, tone, and
                            silence has meaning.</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/microphone-mic.png') }}" class="d-block w-100"
                        style="height: 90vh; object-fit: cover;" alt="Slide 2">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35); backdrop-filter: blur(2px);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Crafting Soundscapes</h1>
                        <p class="text-white-50 fs-5 mb-4 ps-5">From raw audio to refined brilliance — experience
                            studio-grade
                            production.</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/S3.webp') }}" class="d-block w-100"
                        style="height: 90vh; object-fit: cover;" alt="Slide 3">
                    <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100 px-5"
                        style="background: rgba(0,0,0,0.35); backdrop-filter: blur(2px);">
                        <h1 class="display-3 fw-bold text-white mb-3 ps-5">Where Sound Becomes Art</h1>
                        <p class="text-white-50 fs-5 mb-4 ps-5">At Acoustic Arts, sound isn't heard — it's felt.</p>
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
        </div>
    </div>

    <!-- Modern Acoustic Arts Carousel End -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-3 ps-0 border">
                    {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                        style="width: 60px; height: 60px;">
                        <img class="img-fluid" src="img/haircut.png" alt="">
                    </div> --}}
                    <div class="ps-4">
                        <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                            WELCOME
                            <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                        </h3>

                        <p class="">We are Acoustic Arts Pvt. Ltd., India’s premier audio-visual distribution company since
                            1999. For over 25 years, we have been redefining how India experiences sound and vision,
                            delivering world-class AV solutions that blend cutting-edge technology with unmatched
                            craftsmanship.
                            With a hand-picked portfolio of the finest global brands, competitive pricing, nationwide reach,
                            and the most trusted technical support team in the industry, we ensure that every installation,
                            every system, and every product exceeds expectations.
                            From car audio that turns drives into concerts, to home theatres that rival cinema halls, from
                            audiophile-grade stereo systems to immersive installed sound for commercial spaces, and from
                            precision headphones to portable Bluetooth speakers, Acoustic Arts brings the world’s most
                            celebrated AV experiences directly to your doorstep — backed by genuine warranty and lifetime
                            after-sales care.
                            Experience the sound of perfection. Experience Acoustic Arts.</p>
                        {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                    </div>
                    {{-- <a class="btn btn-square" href="{{ route('biamp') }}"><i class="fa fa-plus text-primary"></i></a>
                    --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start copy-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                {{-- <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p> --}}
                <h1 class="text-uppercase">Powered by the Best – Experience Iconic Audio Brands</h1>
                <p>At Acoustic-Arts, we partner only with industry-leading audio brands that guarantee performance,
                    innovation, and reliability. </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/haircut.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                Biamp
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>

                            <p class="">Biamp is a global leader in networked audio-visual solutions, trusted for its
                                seamless integration, powerful DSP processing, and rock-solid reliability. At Acoustic-Arts,
                                we use Biamp to bring scalable, smart control into boardrooms, auditoriums, houses of
                                worship, and more.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('biamp') }}"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/haircut.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                Powersoft
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;">
                                </span>
                            </h3>
                            <p class="">Italian-engineered and globally trusted, Powersoft delivers class-leading
                                amplifier technology with intelligent DSP control. Known for their energy efficiency,
                                reliability, and compact design, Powersoft amps are the powerhouse behind concert venues,
                                stadiums, and mission-critical installations.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('powersoft') }}"><i
                                class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/beard-trim.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                Audix
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>
                            <p>
                                From corporate boardrooms to live music stages, 
                                Audix    
                                microphones are designed to capture
                                sound with pristine clarity. Engineered in the USA, Audix products are trusted by
                                professionals for their rugged build, feedback resistance, and pure voice reproduction.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('audix') }}"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mans-shave.png" alt="">
                        </div> --}}
                        <div class="ps-4">

                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                Void
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>
                            <p>Void is where art meets sound. Their uniquely designed, high-performance loudspeakers are
                                both sonic and visual masterpieces—perfect for premium clubs, lounges, and lifestyle venues.
                            </p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('void') }}"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/hair-dyeing.png" alt="">
                        </div> --}}
                        <div class="ps-4">

                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                Cloud
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>
                            <p>Cloud is the backbone of smart multi-zone audio. Whether it's a hotel, restaurant, mall, or
                                public building, Cloud allows you to control background music, paging, and room-to-room
                                audio effortlessly.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('cloud') }}"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mustache.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                GoldenEar
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>
                            <p>Known for their ribbon tweeters and ultra-transparent sound, GoldenEar speakers are revered
                                in the home theatre and Hi-Fi world. With wide imaging and natural tonality, they transform
                                rooms into immersive soundscapes.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('goldenear') }}"><i
                                class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/stacking.png" alt="">
                        </div> --}}
                        <div class="ps-4">

                            <h3 class="text-uppercase mb-3 position-relative d-inline-block">
                                JL Audio
                                <span class="d-block bg-danger mt-2" style="height: 3px; width: 100%;"></span>
                            </h3>
                            <p>When it comes to deep, controlled, and distortion-free bass, JL Audio stands unmatched. Their
                                subwoofers are engineered for accuracy and impact—essential for both home theatres and
                                high-performance audio systems.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        <a class="btn btn-square" href="{{ route('JL_Audio') }}"><i class="fa fa-plus text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Services</p>
                <h1 class="text-uppercase">What We Provide – The Acoustc Arts Experience</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/haircut.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Biamp Premium Sound Systems</h3>
                            <p>We design and install customized Biamp solutions that deliver crystal-clear audio in any
                                environment — from conference rooms and classrooms to large-scale auditoriums and event
                                venues.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/beard-trim.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Powersoft Amplifier Integration</h3>
                            <p>We exclusively use Powersoft amplifiers for their unmatched power efficiency, clarity, and
                                reliability—ensuring peak performance every time.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mans-shave.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Acoustic Design & Consultation</h3>
                            <p>Get expert advice on optimizing sound in any space—home theaters, auditoriums, or commercial
                                venues.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/hair-dyeing.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">On-Site Audio Management</h3>
                            <p>From setup to live mixing, our professional team ensures every sound hits just right.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/mustache.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">System Tuning & Calibration</h3>
                            <p>We fine-tune every frequency to match your space’s acoustic profile perfectly.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/stacking.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Premium Sound Systems</h3>
                            <p>We design and install customized sound setups that deliver crystal-clear audio in any
                                environment—from intimate spaces to large venues.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        {{-- <div class="bg-dark d-flex flex-shrink-0 align-items-center justify-content-center"
                            style="width: 60px; height: 60px;">
                            <img class="img-fluid" src="img/stacking.png" alt="">
                        </div> --}}
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Stacking</h3>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam.</p>
                            {{-- <span class="text-uppercase text-primary">From $15</span> --}}
                        </div>
                        {{-- <a class="btn btn-square" href=""><i class="fa fa-plus text-primary"></i></a> --}}
                    </div>
                </div>
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
                        <h1 class="text-uppercase mb-4">Check Out Our Barber Services And Prices</h1>
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-around">
                <h1 class="text-uppercase text-center">Home Cinema</h1>
                {{-- <h3 class="text-uppercase mb-3 text-center"></h3> --}}
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 w-100 ps-0 border border">
                        {{-- <img src="{{ asset('assets/img/conferencing.png') }}" alt="" class=""> --}}
                        <img src="{{ asset('/assets/img/home-cinema.jpg') }}" alt="home cinema" class="w-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                    <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border">

                        <div class="ps-4">
                            <h1><b>Public/Private Theater by Acoustic Arts Pvt. Ltd.</b></h1>
                            <p>
                                Experience the magic of cinema—right in your home. We design and build luxurious private
                                theaters that rival the best commercial cinemas. From immersive Dolby Atmos audio to
                                stunning 4K/8K visuals, intelligent lighting, and acoustic perfection—every detail is
                                crafted to impress.

                                Whether it's a cozy media den or a grand entertainment room, our solutions are bespoke,
                                refined, and future-ready. Acoustic Arts delivers cinema that doesn’t just entertain—it
                                transports.

                            </p>
                            <a class="button-1" href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- home cinema End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-around">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.5s"
                    style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 w-100 ps-0 border border">
                        <img src="{{ asset('assets/img/conferencing.png') }}" alt="" class="w-100">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div
                        class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border border">
                        <div class="ps-4">
                            <h3 class="text-uppercase mb-3">Meeting rooms of all 15 Seats &amp; Calibration</h3>
                            <p>Designing audio for a 15-seat meeting room demands more than just basic sound coverage — it
                                requires exceptional clarity, intelligent design, and acoustic precision. With varied
                                seating arrangements and increased participant interaction, it’s crucial that every voice is
                                captured accurately and every word is delivered without distortion. Biamp’s industry-leading
                                DSP platforms, paired with advanced beamtracking microphones and intuitive control
                                interfaces, provide a seamless, immersive audio experience. Whether participants are
                                speaking softly or moving around the table, in-person or joining remotely, Biamp ensures
                                consistent, high-fidelity sound across the entire space.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Working Hours Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-20">
                <h1 class="text-center pb-4">Acoustic Arts Pvt. Ltd. is Open to Serve You</h1>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5 border">
                        <p class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Working Hours</p>
                        {{-- <h1 class="text-uppercase mb-4 fs-5">Acoustic Arts Pvt. Ltd. is Open to Serve You</h1> --}}
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0">Monday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0">Tuesday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0">Wednesday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0">Thursday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-1">
                                <h6 class="text-uppercase mb-0">Friday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Saturday</h6>
                                <span class="text-uppercase">10 AM - 6 PM</span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="text-uppercase mb-0">Sunday</h6>
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
                <h1 class="text-uppercase">What Our Clients Say!</h1>
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