<!-- Spinner Start -->
<div id="spinner"
    class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
        <img src="{{ asset('assets/img/acoustic.png') }}" alt="" class="w-75 width">
        {{-- <h1 class="mb-0 text-primary text-uppercase"><i class="fa-solid fa-speaker me-3"></i>
            Acoustic arts</h1> --}}
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0"> 
            <a href="{{ route('index') }}" class="nav-item nav-link nav-link-ltr one active">Home</a>
            <a href="{{ route('awards') }}" class="nav-item nav-link nav-link-ltr one">Awards</a>
            <a href="{{ route('about') }}" class="nav-item nav-link nav-link-ltr one">About</a>
            <a href="{{ route('service') }}" class="nav-item nav-link nav-link-ltr one">Service</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('teams') }}" class="dropdown-item">Team</a>
                    <a href="{{ route('testimonial') }}" class="dropdown-item">Testimonial</a> --}}
                    {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                    {{--
                </div>
            </div> --}}
            {{-- <a href="{{ route('products') }}" class="nav-item nav-link nav-link-ltr one">Products</a> --}}

            <a href="{{ route('project') }}" class="nav-item nav-link nav-link-ltr one">Projects</a>

            <a href="{{ route('contact') }}" class="btn btn-primary rounded-0 py-2 px-lg-1 d-lg-block one">Get in
                Touch<i class="fa fa-arrow-right ms-3"></i></a>
        </div>


    </div>
</nav>
<!-- Navbar End -->