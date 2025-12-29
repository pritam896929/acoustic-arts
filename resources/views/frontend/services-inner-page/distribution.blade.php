@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Distribution</h1>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- What We Do -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column bg-secondary shadow-lg" style="padding: 60px; border:5px solid #C81313;">
                        <h1 class="text-center pb-5 text-white">What We Do</h1>
                        <div class="row text-center g-4">
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center justify-content-center rounded-circle border border-danger mx-auto mb-3"
                                    style="width:120px; height:120px;">
                                    <i class="fas fa-ship fs-1 text-danger"></i>
                                </div>
                                <h5 class="text-uppercase text-danger">Import</h5>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center justify-content-center rounded-circle border border-danger mx-auto mb-3"
                                    style="width:120px; height:120px;">
                                    <i class="fas fa-truck fs-1 text-danger"></i>
                                </div>
                                <h5 class="text-uppercase text-danger">Distribute</h5>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center justify-content-center rounded-circle border border-danger mx-auto mb-3"
                                    style="width:120px; height:120px;">
                                    <i class="fas fa-clipboard fs-1 text-danger"></i>
                                </div>
                                <h5 class="text-uppercase text-danger">Educate</h5>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="d-flex align-items-center justify-content-center rounded-circle border border-danger mx-auto mb-3"
                                    style="width:120px; height:120px;">
                                    <i class="fas fa-headset fs-1 text-danger"></i>
                                </div>
                                <h5 class="text-uppercase text-danger">Support</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- What We Do End -->

    <!-- Distribution Sections -->
    <div class="container py-5">
        <div class="row g-4 align-items-stretch">
            <div class="col-md-6 d-flex">
                <div class="bg-white shadow-lg p-4 w-100 d-flex flex-column justify-content-center">
                    <h1 class="mb-4 text-dark">Quality > Quantity</h1>
                    <p>
                        With 25 years of experience in the industry, we’ve gained more than just technical knowledge —
                        we’ve built a legacy of trust, quality, and dedication. Over the years, our journey has allowed us
                        to form strong and lasting relationships with some of the world’s most trusted and respected
                        audio and visual brands. Each collaboration has not only broadened our expertise but also reinforced
                        our commitment to delivering the highest standards of performance and reliability.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="w-100">
                    <img src="{{ asset('assets/img/DS.png') }}" alt="Modern boardroom with Biamp system"
                         class="img-fluid w-100 h-100 rounded border fixed-image">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4 align-items-stretch flex-md-row-reverse">
            <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center">
                    <h1 class="mb-4 text-dark">Detailed Discussions</h1>
                    <p>
                        We know how much thought goes into choosing a product. Each individual project or customer has a
                        unique need and we appreciate that. Even an excellent device can be the wrong device for you or
                        your project. We’re here to make sure you get matched with the right brand. We will gladly offer
                        detailed discussions and assess which brand is best suited to you.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="w-100">
                    <img src="{{ asset('assets/img/deteail.png') }}" alt="Modern boardroom with Biamp system"
                         class="img-fluid w-100 h-100 rounded border fixed-image">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row g-4 align-items-stretch">
            <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center">
                    <h1 class="mb-4 text-dark">Guided Choices, Trusted Expertise</h1>
                    <p>
                        At Acoustic Arts, we understand that every project is unique. Choosing the right equipment isn’t
                        just about features — it’s about finding the perfect fit for your space, vision, and goals. That’s
                        why we don’t believe in one-size-fits-all solutions. Our team takes the time to understand your
                        needs and guide you toward the brand and product that will truly elevate your experience.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="w-100">
                    <img src="{{ asset('assets/img/D3.png') }}" alt="Modern boardroom with Biamp system"
                         class="img-fluid w-100 h-100 rounded border fixed-image">
                </div>
            </div>
        </div>
    </div>
    <!-- Distribution Sections End -->
@endsection
