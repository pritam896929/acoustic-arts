@extends('layouts.app')
@section('content')

    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Aon 3</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Aon 3</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Bootstrap 5 Product Detail Page -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Left: Product Images -->
            <div class="col-lg-6">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Main Images -->
                    <div class="carousel-inner border rounded">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/aon3.png') }}" class="d-block w-100 img-fluid"
                                alt="Product Image">
                        </div>
                        {{-- <div class="carousel-item">
                            <img src="{{ asset('assets/img/voidair8black.png') }}" class="d-block w-100 img-fluid"
                                alt="Product Image">
                        </div> --}}
                        {{-- <div class="carousel-item">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                                class="d-block w-100 img-fluid" alt="shoe">
                        </div> --}}
                        {{-- <div class="carousel-item">
                            <img src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                                class="d-block w-100 img-fluid" alt="shoe">
                        </div> --}}

                    </div>
                    <!-- Thumbnails -->
                    <div class="mt-3 d-flex justify-content-center gap-2">
                        <img src="{{ asset('assets/img/aon3.png') }}" class="img-thumbnail" width="80"
                            data-bs-target="#productCarousel" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1">
{{-- 
                        <img src="{{ asset('assets/img/voidair8black.png') }}" class="img-thumbnail" width="80"
                            data-bs-target="#productCarousel" data-bs-slide-to="1" aria-label="Slide 2"> --}}
                        {{-- <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_3.jpg"
                            class="img-thumbnail" width="80" data-bs-target="#productCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"> --}}

                        {{-- <img
                            src="https://fadzrinmadu.github.io/hosted-assets/product-detail-page-design-with-image-slider-html-css-and-javascript/shoe_4.jpg"
                            class="img-thumbnail" width="80" data-bs-target="#productCarousel" data-bs-slide-to="3"
                            aria-label="Slide 4"> --}}
                    </div>
                </div>
            </div>
            <!-- Right: Product Content -->
            <div class="col-lg-6">
                <h2 class="fw-bold text-capitalize">Aon 3</h2>
                <span href="#" class="badge bg-primary text-decoration-none">Visit Acoustic-atrs Pvt.Ltd</span>
                <div class="my-3">
                    <!-- Pure yellow stars -->
                    <i class="fas fa-star" style="color: #FFD700;"></i>
                    <i class="fas fa-star" style="color: #FFD700;"></i>
                    <i class="fas fa-star" style="color: #FFD700;"></i>
                    <i class="fas fa-star" style="color: #FFD700;"></i>
                    <i class="fas fa-star-half-alt" style="color: #FFD700;"></i>
                    <span class="text-dark fw-semibold">4.7 (21)</span>
                </div>
                {{-- <div class="mb-3">
                    <p class="mb-1 text-muted">Old Price: <span class="text-decoration-line-through">$257.00</span></p>
                    <p class="fw-bold">New Price: <span class="text-primary">$249.00 (5%)</span></p>
                </div> --}}

                <h5>About this item:</h5>
                <p>The GoldenEar Aon 3 is a compact 14″ tall bookshelf speaker that delivers performance on par with much larger floorstanding models. At its core is a 7″ High-Definition cast-basket mid-bass driver featuring GoldenEar’s Multi-Vaned Phase Plug (MVPP™) for exceptional detail and control.</p>
                <ul class="list-unstyled">
                    <li><strong>Color:</strong>Black</li>
                    <li><strong>Available:</strong> <span class="text-success">In stock</span></li>
                    <li><strong>Category:</strong> Bookshelf Speakers</li>
                    {{-- <li><strong>Shipping Area:</strong>Worldwide</li> --}}
                    <li><strong>Shipping Fee:</strong> Free</li>
                </ul>
                <div class="d-flex align-items-center justify-content-end mb-3">
                    <a class="btn btn-danger" href="{{ route('contact') }}"><i class="fas fa-envelope px-1"></i>Get in
                        Touch</a>
                </div>
            </div>

        </div>
    </div>

    <!-- FontAwesome CDN for icons -->
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
@endsection