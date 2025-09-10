@extends('layouts.app')
@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Company</a>
                    </li> --}}
                    <li class="breadcrumb-item text-primary active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Carousel Start -->
    <div class="container my-5">

        <div
            class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0 border rounded-3 shadow">
            <div class="ps-4">
                <h1 class="fw-bold">The Art of Musical Expression</h1>
                <p class="mt-3">
                    Since 1999, Acoustic-Arts Pvt. Ltd. has been creating powerful audio experiences that move people.
                    From sacred rituals to modern performance spaces, sound has always connected deeply with emotion—and
                    we carry that legacy forward.
                    With decades of expertise in High End Audio Video, we design custom solutions using cutting edge
                    technologies. From Hi-Fi and home cinemas to cafes, houses of worship, auditoriums, corporate offices,
                    Airports and night clubs we bring spaces to life through sound. Contact us to elevate your AV
                    experience.
                </p>
            </div>
        </div>

        <div id="projectCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/ATTARI.PNG') }}"
                                class="d-block w-100 rounded shadow project-img img-click" alt="Project 1"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img="{{ asset('/assets/img/ATTARI.PNG') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Attari</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia impedit accusamus
                                    vel similique cum assumenda aliquam placeat necessitatibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/Cirrus-New-Delhi.png') }}"
                                class="d-block w-100 rounded shadow project-img img-click" alt="Project 2"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img="{{ asset('/assets/img/Cirrus-New-Delhi.png') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Cirrus9, The Oberoi, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repudiandae quidem
                                    exercitationem nam ea nesciunt aut similique recusandae temporibus?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/iit.jpg') }}"
                                class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img="{{ asset('/assets/img/iit.jpg') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>IIT Project</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/Isckon.webp') }}"
                                class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-img="{{ asset('/assets/img/Isckon.webp') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Delhi Isckon</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/G2.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/G2.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Fig, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 6 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/G1.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/G1.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Boya, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 7 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/G6.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/G6.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>F Bar, Dehradun</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 8 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/stadium.jpg
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/stadium.jpg
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Guwahati Stadium</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 9 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/prem-mandir.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/prem-mandir.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Prem Mandir, Vrindavan</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 10 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/G7.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/G7.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Anjeer, Gurugram</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 11 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/G8.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/G8.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Rashtrapati Bhavan, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 12 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/playboy-club.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/playboy-club.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3>Playboy Club, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 13 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/Vidyalankar.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/Vidyalankar.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3> Vidyalankar Institute Auditorium, Mumbai</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 14 -->
                <div class="carousel-item">
                    <div class="row g-4 d-flex align-items-stretch">
                        <div class="col-md-6">
                            <img src="{{ asset('/assets/img/Hybrid.webp
                                    ') }}" class="d-block w-100 rounded shadow project-img img-click" alt="Project 3"
                                data-bs-toggle="modal" data-bs-target="#imageModal" data-img="{{ asset('/assets/img/Hybrid.webp
                                    ') }}">
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="p-4 bg-secondary border rounded shadow project-box flex-fill">
                                <h3> Hybrid, New Delhi</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odio velit dolore
                                    repellat?
                                    Illum, voluptates consectetur!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <!-- Image Modal -->
        <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content bg-transparent border-0">
                    <div class="modal-body p-0 position-relative">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                            data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="" id="modalImage" class="img-fluid rounded w-100" alt="Project Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Modal for Image View -->
    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 position-relative">
                    <!-- Close Button -->
                    <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <!-- Full Width Image -->
                    <img src="" id="modalImage" class="w-100 h-auto rounded width"
                        style="max-height: 90vh !important; object-fit: contain !important;" alt="Project Image">
                </div>
            </div>
        </div>
    </div>
    <!-- Projects & Testimonials Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block bg-secondary text-primary py-1 px-4">Acoustic Arts</p>
                <h1 class="text-uppercase">Projects We’re Proud Of</h1>
                <p class="mb-0">From studio installations to live sound setups — here’s what our clients say about our
                    work.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/project-1.jpg' alt=''>">
                    <h4 class="text-uppercase">Concert Hall Setup</h4>
                    <p class="text-primary">Client: Ravi Mehra</p>
                    <span class="fs-5">"Acoustic Arts delivered a powerful sound setup for our open-air concert. The
                        Powersoft system brought life to the event with crystal clarity."</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/project-2.jpg' alt=''>">
                    <h4 class="text-uppercase">Recording Studio Design</h4>
                    <p class="text-primary">Client: Priya Kapoor</p>
                    <span class="fs-5">"They built our dream studio with perfect acoustics. The soundproofing, speaker
                        placement, and tuning were done like true pros."</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/project-3.jpg' alt=''>">
                    <h4 class="text-uppercase">Cafe Chain Sound Installation</h4>
                    <p class="text-primary">Client: Aditya Verma</p>
                    <span class="fs-5">"From background music to announcements, the sound system in our cafes is smooth,
                        clear, and easy to control. Thank you, Acoustic Arts!"</span>
                </div>
            </div>
        </div>
    </div>
@endsection