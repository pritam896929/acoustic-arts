@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="img/about.jpg" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%; border-bottom:2px solid #eb1616;">
                            <h1 class="text-uppercase text-primary mb-3">25 Years</h1>
                            <h2 class="text-uppercase mb-0">Experience</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Company Story & Mission Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Over 25 Years Section -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item h-100" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5 h-100">
                            <h5 class="text-uppercase">Over 25 Years of Sound Innovation</h5>
                            <span class="text-light">
                                It all began in 1999 with two passionate audiophiles and a shared mission — to bring world-class sound to India. Since then, Acoustic Arts Pvt. Ltd. has evolved into a nationally respected leader in the sales and distribution of high-end audiovisual systems.
                                <br>
                                Representing some of the most renowned global manufacturers, we combine deep industry knowledge, technical precision, premium product lines, and ethical business practices to deliver exceptional value.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Mission -->
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item h-100" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5 h-100">
                            <h5 class="text-uppercase">Our Mission</h5>
                            <span class="text-light">
                                At Acoustic Arts, our mission is to deliver total AV integration solutions using the latest technologies, executed with precision, and always on schedule. We are committed to providing outstanding service, upholding professional ethics, and continuously striving for excellence in every project we undertake.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- What We Do -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5">
                            <h5 class="text-uppercase">What We Do</h5>
                            <span class="text-light">
                                We serve over 150 system integrators and AV specialists across India, offering advanced audio solutions that are tailored, integrated, and future-ready. With over 1500 successful projects, our team handles everything from concept to commissioning — including acoustic design, project management, turnkey execution, and long-term maintenance.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Awards & Recognition -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5">
                            <h5 class="text-uppercase">Awards & Recognition</h5>
                            <span class="text-light">
                                Acoustic Arts Pvt. Ltd. is a certified partner of top global AV brands including Biamp, Powersoft, GoldenEar, Cloud, Audix & JL Audio. 
                                We have received multiple industry awards for excellence in AV integration and innovative solutions.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5">
                            <h5 class="text-uppercase">Our Vision</h5>
                            <span class="text-light">
                                To redefine India’s audio-visual landscape by pioneering cutting-edge solutions, creating immersive experiences, and delivering unmatched quality in every project.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Selected Projects -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5">
                            <h5 class="text-uppercase">Selected Projects</h5>
                            <span class="text-light">
                                Successfully executed high-end AV solutions in luxury residences, corporate offices, auditoriums, and entertainment venues across India.
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Founder Quote -->
                <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item" style="border-bottom: 2px solid">
                        <div class="bg-secondary p-4 py-5">
                            <h5 class="text-uppercase">From Our Founder</h5>
                            <span class="text-light">
                                "Our mission has always been more than delivering sound – it's about crafting experiences that leave a lasting impact." – Acoustic Arts Founder
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Company Story & Mission End -->

    <!-- Stats Section Start -->
    <section class="py-5" style="background-color: #191C24; color: #ffffff;">
        <div class="container">
            <div class="row text-center g-4">

                <!-- Dealers & Integrators -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="p-4 rounded-4 shadow" style="background-color: #1f222d;">
                        <div style="font-size: 3rem; color: #eb1616; font-weight: 700;">
                            <span class="counter" data-target="150">0</span>+
                        </div>
                        <p class="text-uppercase mt-2 mb-0" style="letter-spacing: 1px; font-size: 0.9rem;">Dealers & Integrators</p>
                    </div>
                </div>

                <!-- Projects -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="p-4 rounded-4 shadow" style="background-color: #1f222d;">
                        <div style="font-size: 3rem; color: #eb1616; font-weight: 700;">
                            <span class="counter" data-target="1500">0</span>+
                        </div>
                        <p class="text-uppercase mt-2 mb-0" style="letter-spacing: 1px; font-size: 0.9rem;">Projects Completed</p>
                    </div>
                </div>

                <!-- Years of Experience -->
                <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="p-4 rounded-4 shadow" style="background-color: #1f222d;">
                        <div style="font-size: 3rem; color: #eb1616; font-weight: 700;">
                            <span class="counter" data-target="25">0</span>+
                        </div>
                        <p class="text-uppercase mt-2 mb-0" style="letter-spacing: 1px; font-size: 0.9rem;">Years of Experience</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Stats Section End -->
@endsection
