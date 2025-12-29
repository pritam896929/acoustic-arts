<style>
.project-img {
    transition: transform 0.3s ease;
    cursor: pointer;
}
.project-img:hover {
    transform: scale(1.05);
}
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-size: 100%, 100%;
}
.img-label {
    position: absolute;
    bottom: 10px;
    right: 15px;
    background-color: rgba(0, 0, 0, 0.6);
    color: #fff;
    padding: 4px 8px;
    border-radius: 5px;
    font-size: 0.9rem;
    font-weight: 500;
}
@media(max-width: 992px){
    .project-img {
        height: 300px !important;
    }
}
@media(max-width: 576px){
    .project-img {
        height: 200px !important;
    }
}
</style>
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
 

<!-- Portfolio Section Start -->
<div class="container my-6">
    <div class="row align-items-center">
        <!-- Left Side: Text -->
        <div class="col-lg-6 mb-4 mb-lg-0">
           <div class="shadow-lg py-5 px-3">
             <h1 class="fw-bold display-6 text-dark mb-3">The Art of Musical Expression</h1>
            <p class="text-secondary">
                Since 1999, Acoustic-Arts Pvt. Ltd. has been creating powerful audio experiences that move people. 
                From sacred rituals to modern performance spaces, sound has always connected deeply with emotion—
                and we carry that legacy forward.
            </p>
             <p class="text-secondary">
                With decades of expertise in High-End Audio Video, we design custom solutions using cutting-edge technologies.
                From Hi-Fi and home cinemas to cafes, houses of worship, auditoriums, corporate offices, airports, 
                and nightclubs, we bring spaces to life through sound. Contact us to elevate your AV experience.
            </p>
           </div>
        </div>

        <!-- Right Side: Carousel -->
        <div class="col-lg-6">
            <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active position-relative">
                        <img src="{{ asset('/assets/img/PAKIST_3.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="ATTARI" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/PAKIST_3.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">ATTARI</span>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/Cirrus-New-Delhi.png') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Cirrus New Delhi" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/Cirrus-New-Delhi.png') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Cirrus New Delhi</span>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/iit.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="IIT Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/iit.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">IIT Roorkee</span>
                    </div>
                    <!-- Slide 4 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/Isckon.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="ISKCON" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/Isckon.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Iskcon Temple</span>
                    </div>
                    <!-- Slide 5 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/G2.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="G2 Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/G2.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Fig</span>
                    </div>
                    <!-- Slide 6 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/G1.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="G1 Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/G1.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Boya</span>
                    </div>
                    <!-- Slide 7 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/G6.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="G6 Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/G6.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">F Bar, Dehradun</span>
                    </div>
                    <!-- Slide 8 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/stadium.png') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Stadium Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/stadium.png') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Guwahati Stadium</span>
                    </div>
                    <!-- Slide 9 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/prem-mandir.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Prem Mandir" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/prem-mandir.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Prem Mandir, Vrindavan</span>
                    </div>
                    <!-- Slide 10 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/G7.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="G7 Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/G7.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Anjeer</span>
                    </div>
                    <!-- Slide 11 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/G8.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="G8 Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/G8.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Rashtrapati bhavan</span>
                    </div>
                    <!-- Slide 12 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/playboy-club.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Playboy Club" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/playboy-club.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Playboy Club</span>
                    </div>
                    <!-- Slide 13 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/Vidyalankar.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Vidyalankar" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/Vidyalankar.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Vidyalankar Institute Auditorium, Mumbai</span>
                    </div>
                    <!-- Slide 14 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/Hybrid.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Hybrid Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/Hybrid.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Hybrid, New Delhi</span>
                    </div>
                      <!-- Slide 15 -->
                    <div class="carousel-item position-relative">
                        <img src="{{ asset('/assets/img/airport-terminal.webp') }}" 
                             class="d-block w-100 rounded shadow-sm project-img img-click"
                             alt="Hybrid Project" data-bs-toggle="modal" data-bs-target="#imageModal"
                             data-img="{{ asset('/assets/img/airport-terminal.webp') }}"
                             style="height: 400px; object-fit: cover;">
                        <span class="img-label">Airport- Terminal 1 & 2 – New Delhi</span>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio Section End -->

<!-- Modal for Image View -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0 position-relative">
                <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3" 
                        data-bs-dismiss="modal" aria-label="Close"></button>
                <img src="" id="modalImage" class="w-100 h-auto rounded" 
                     style="max-height: 90vh; object-fit: contain;" alt="Project Image">
            </div>
        </div>
    </div>
</div>

<!-- CSS for Image Labels -->





@endsection