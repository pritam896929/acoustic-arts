@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Distribution</h1>
            {{-- <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bimap</li>
                </ol>
            </nav> --}}
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Biamp -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column border" style="background-color: #191C24; padding: 60px;">
                        <h1 class="text-center pb-5">What We Do</h1>
                        <div class="">
                            <div class="row text-center g-4">
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-ship fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Import</h5>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-truck fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Distribute</h5>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-clipboard fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Educate</h5>
                                </div>

                                <div class="col-md-3 col-6">
                                    <div class="d-flex align-items-center justify-content-center rounded-circle border border-light mx-auto mb-3"
                                        style="width:120px; height:120px;">
                                        <i class="fas fa-headset fs-1 text-danger"></i>
                                    </div>
                                    <h5 class="text-uppercase">Support</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Biamp End-->

    <!-- #DISTRUBUTION START-->
    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Quality > Quantity</h1>
                    <p class="subheading">
                        With 25 years of experience in the industry, we’ve gained more than just technical knowledge — we’ve
                        built a legacy of trust, quality, and dedication. Over the years, our journey has allowed us to form
                        strong and lasting relationships with some of the world’s most trusted and respected audio and
                        visual brands. Each collaboration has not only broadened our expertise but also reinforced our
                        commitment to delivering the highest standards of performance and reliability.
                        Our diverse portfolio is a reflection of the countless projects we’ve successfully undertaken, each
                        teaching us valuable lessons about what truly defines great quality.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/DS.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/D2.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border">
                </div>
            </div>
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.5s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Detailed Discussions</h1>
                    <p class="subheading">
                        We know how much thought goes into choosing a product. Each individual project or customer has a
                        unique need and we appreciate that. Even an excellent device can be the wrong device or application
                        for you or your project. We’re here to make sure that you get matched with the right brand. We will
                        gladly offer detailed discussions and assess which brand is best suited to you. Major investments
                        don’t need to be stressful. And, for our loyal customers, we can arrange to have the product used on
                        a trial basis, so you can test your compatibility with your new love (conditions apply!)
                        Have questions? We can work things out.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row split-layout">
            <div class="col-md-6 light-black border wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-side">
                    <h1 class="mb-5 mt-2">Guided Choices, Trusted Expertise</h1>
                    <p class="subheading">
                        At Acoustic Arts, we understand that every project is unique. Choosing the right equipment isn’t
                        just about features — it’s about finding the perfect fit for your space, vision, and goals. That’s
                        why we don’t believe in one-size-fits-all solutions. Our team takes the time to understand your
                        needs and guide you toward the brand and product that will truly elevate your experience.

                        We believe major investments should bring you peace of mind, not stress. For our valued clients, we
                        even offer trial opportunities (conditions apply) so you can experience the product first-hand
                        before making a decision.
                    </p>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="image-side">
                    <img src="{{ asset('assets/img/D3.png') }}" alt="Modern boardroom with Biamp system"
                        class="w-100 border">
                </div>
            </div>
        </div>
    </div>
    <!-- #DISTRUBUTION END-->

@endsection