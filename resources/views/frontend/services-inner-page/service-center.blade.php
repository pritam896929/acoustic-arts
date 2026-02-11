@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">
                Service Centre & Repair Workshop
            </h1>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Intro Section -->
    {{-- <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-12 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-start wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="text-dark">Service Centre & Technical Workshop</h1>
                    <p class="subheading">
                        Acoustic Arts operates a professional service centre and advanced technical workshop
                        dedicated to the repair, maintenance, and exchange of high-end audio equipment supplied by us. Our
                        facility is designed to support professional audio systems with accuracy, care, and
                        industry-approved practices.

                        We provide after-sales service only for genuine products purchased through Acoustic Arts. This
                        allows us to ensure correct diagnostics, the use of original components, and reliable repair
                        standards that protect performance and equipment lifespan.
                    </p>
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- Project Management Sections -->
    {{-- <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-start wow fadeInUp"
                    data-wow-delay="0.3s">
                    <h1 class="mb-4 text-dark">Our Service Process</h1>
                    <p>
                        Our service process is structured, transparent, and efficient. Customers submit their equipment at
                        our service centre, after which the unit is transferred to our technical workshop for detailed fault
                        diagnosis. Repairs are carried out by experienced technicians using genuine parts and approved
                        procedures. Each unit undergoes complete testing and quality checks before delivery.
                        Most repairs are completed and returned within 4–5 working days, subject to the nature and
                        complexity of the issue.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-start wow fadeInUp"
                    data-wow-delay="0.3s">
                    <h1 class="mb-4 text-dark">Brands We Service</h1>
                    <p>
                        We offer specialized service support for premium professional audio brands supplied by Acoustic
                        Arts, including Powersoft, Biamp, Void Acoustics, GoldenEar, JL Audio, Audix, and Cloud Electronics.
                    </p>
                    <p>

                        Service support is strictly limited to original equipment supplied by us to maintain service
                        quality, reliability, and brand integrity.
                    </p>
                </div>
            </div> 
    </div>
    </div> --}}

    {{-- <div class="container py-5">
        <div class="row g-4 flex-md-row-reverse">
    <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-start wow fadeInUp"
                    data-wow-delay="0.3s">
                    <h1 class="mb-4 text-dark">Repair, Maintenance & Exchange Policy</h1>
                    <p>
                        Repair and maintenance services are available only for equipment supplied by Acoustic Arts. All work
                        is handled by trained and experienced technicians following professional repair standards. Exchange
                        options may be offered based on technical inspection, product condition, and eligibility.
                    </p>
                    <p>
                        We follow a transparent service approach with honest technical recommendations, prioritizing safety,
                        long-term performance, and system reliability.
                    </p>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-start wow fadeInUp"
                    data-wow-delay="0.3s">
                    <h1 class="mb-4 text-dark">Why Choose Acoustic Arts</h1>
                    <p>
                        With over 25+ years of industry experience, Acoustic Arts is trusted for dependable after-sales
                        service and technical excellence. Our deep understanding of professional audio systems,
                        brand-specific expertise, and commitment to quality workmanship ensure reliable results.
                    </p>
                    <p>
                        Every serviced unit is thoroughly tested before delivery to ensure optimal performance and complete
                        customer satisfaction.
                    </p>
                </div>
            </div>
    
    </div>
    </div>  --}}

    {{-- <div class="container py-5">
        <div class="row g-4 align-items-stretch"> --}}
    {{-- <div class="col-md-12 d-flex">
                <div class="shadow-lg p-4 w-100 d-flex flex-column justify-content-center wow fadeInUp"
                    data-wow-delay="0.3s">
                    <h1 class="mb-4 text-dark">Why Choose Acoustic Arts</h1>
                    <p>
                        With over 25+ years of industry experience, Acoustic Arts is trusted for dependable after-sales
                        service and technical excellence. Our deep understanding of professional audio systems,
                        brand-specific expertise, and commitment to quality workmanship ensure reliable results.
                    </p>
                    <p>
                        Every serviced unit is thoroughly tested before delivery to ensure optimal performance and complete
                        customer satisfaction.
                    </p>
                </div>
            </div> --}}
    {{-- <div class="col-md-6 d-flex">
                <div class="w-100">
                    <img src="{{ asset('assets/img/LoyallyYours.png') }}" alt="Modern boardroom with Biamp system"
                        class="img-fluid w-100 h-100 rounded border fixed-image">
                </div>
            </div>  --}}
    {{-- </div>
    </div> --}}
    <!-- // end -->
    <section class="we-offer-area text-center bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading text-center">
                        <h2 class="text-dark">What We <span>Offer</span></h2>
                        <h4 class="text-dark">Professional Audio Solutions & Services</h4>
                    </div>
                </div>
            </div>

            <div class="row our-offer-items less-carousel">

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-drafting-compass"></i>

                        <h4 class="text-dark">Audio System Design</h4>
                        <p>
                            Customized professional audio system design for auditoriums,
                            cinemas, clubs, conference rooms, and large venues.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-project-diagram"></i>
                        <h4 class="text-dark">System Integration</h4>
                        <p>
                            Complete integration of premium audio equipment including
                            amplifiers, processors, speakers, and control systems.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-tasks"></i>

                        <h4 class="text-dark">Project Management</h4>
                        <p>
                            End-to-end project management ensuring timely execution,
                            coordination, and quality delivery of audio installations.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-plug"></i>

                        <h4 class="text-dark">Installation & Commissioning</h4>
                        <p>
                            Professional installation, calibration, and commissioning
                            to achieve optimal system performance and reliability.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-tools"></i>
                        <h4 class="text-dark">Maintenance & Service</h4>
                        <p>
                            Reliable after-sales service, preventive maintenance,
                            and technical support for genuine products supplied by us.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item h-100">
                        <i class="fas fa-headset"></i>
                        <h4 class="text-dark">Technical Support</h4>
                        <p>
                            Dedicated technical assistance and on-site support to ensure
                            smooth operation and long-term system performance.
                        </p>
                    </div>
                </div>
                <!-- End Single Item -->

            </div>
        </div>
    </section>
@endsection
