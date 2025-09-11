@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">product</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Page Header End -->
    <div class="container">
        <div class="py-3">
            <h2 class="text-danger">Speakers</h2>
            <p>Speakers deliver powerful, high-fidelity sound for every space. With brands like Void, Biamp, Cloud
                Electronics,Cloud Electronics and
                more, they are designed to provide clarity, precision, and immersive audio experiences.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/BIAMP-speakser.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Commercial Loudspeakers CM20</h5>
                        <p class="card-text">The CM20 is a versatile and discreet in-ceiling loudspeaker, designed for
                            professional commercial audio installations. With its sleek design and high-quality performance,
                            it blends seamlessly into any environment—be it retail, hospitality, offices, or public spaces.
                        </p>
                        <a href="{{ route('commercialLoudspeakers') }}">Read more..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/VOID.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">VOID AIR 8</h5>
                        <p class="card-text">The Void Air 8 is a compact two-way loudspeaker designed to deliver powerful,
                            high-fidelity sound with a sleek, modern aesthetic. Equipped with an 8-inch low-frequency driver
                            and a 1-inch neodymium high-frequency compression driver.</p>
                        <a href="{{ route('voidair') }}">Read more..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/audix-microphone.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Boundary Condenser Microphone</h5>
                        <p class="card-text">A boundary condenser microphone is designed to capture clear and natural sound
                            by being placed on flat surfaces such as tables, floors, or walls. Its boundary-layer design
                            reduces phase interference and picks up voices evenly across the spaces.</p>
                        <a href="{{ route('audixmicrophone') }}">Read more..</a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/cvs-c83t_f-b_cms.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Cloud Electronics CVS-C83TB/W - Ceiling Speaker</h5>
                        <p class="card-text">8″ Ceiling Speaker
                            2-way coaxial, open-back design with 8Ω (max 50W) or 100V (24W/12W/6W) options. Available in
                            white or black with a magnetic grille.</p>
                        <a href="{{ route('CloudelEctronicsCeilingSpeaker') }}">Read more..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/goldenear-speakers.webp') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Aon 3</h5>
                        <p class="card-text">The Aon 3 Bookshelf Monitor, standing just 14″ tall, is a compact yet powerful
                            speaker engineered for high-definition sound. It features a 7″ cast-basket mid-bass driver with
                            a Multi-Vaned Phase Plug.</p>
                        <a href="{{ route('Aon3') }}">Read more..</a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/JL-audio.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger"> JL Audio Custom Fit car speakers</h5>
                        <p class="card-text">Designed for easy, drop-in installations, the JL Audio Custom Fit speakers can
                            be used as mid-tweeters in passive systems or in active systems as true mid-range drivers or
                            mid-tweeters.</p>
                        <a href="{{ route('JLAudioCustomFitCarSpeakers') }}">Read more..</a>

                    </div>
                </div>
            </div>

        </div>

        <div class="pt-5 pb-3">
            <h2 class="text-danger">Amplifiers</h2>
            <p>Amplifiers deliver clean, powerful, and reliable sound for every application. With brands like Powersoft,
                Biamp, Void, and JL Audio, they are designed to provide clarity, precision, and the perfect driving force
                behind any audio system.</p>
            {{-- <a href="">Read more..</a> --}}
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/biamp-amp.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Voltera D M</h5>
                        <p class="card-text">Series — like Voltera D — seamlessly integrates amplification into a powerful
                            loudspeaker controller, while also adding a fully programmable DSP onboard with enough headroom
                            to handle even complex audio processing and distribution needs.</p>
                        <a href="">Read more..</a>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/void-amp.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Inca 500</h5>
                        <p class="card-text">The Inca 500 is a high-performance amplifier designed for reliable power and
                            exceptional sound quality. Compact yet powerful, it delivers clean, distortion-free audio,
                            making it ideal for both professional installations and demanding environments.
                        </p>
                        <a href="">Read more..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/Jl-amp.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">JL Audio® HD Car System Amplifier</h5>
                        <p class="card-text">The JL Audio® HD Series Car Amplifier is engineered to deliver powerful,
                            crystal-clear sound in a compact and efficient design. Built with advanced Class D technology,
                            it offers high output with minimal heat and energy loss, making it perfect for demanding car
                            audio systems.</p>
                        <a href="">Read more..</a>

                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/biamp-amp.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">UNICA</h5>
                        <p class="card-text">Unica represents the next-generation amplifier platform designed to deliver
                            unmatched performance and flexibility.
                            It combines high-quality amplification with advanced DSP capabilities, providing users with
                            exceptional sound reproduction and control.</p>
                        <a href="">Read more..</a>

                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/goldenear-speakers.webp') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger">Aon 3</h5>
                        <p class="card-text">The Aon 3 Bookshelf Monitor, standing just 14″ tall, is a compact yet powerful
                            speaker engineered for high-definition sound. It features a 7″ cast-basket mid-bass driver with
                            a Multi-Vaned Phase Plug.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-dark text-center">
                    <img class="card-img-top" src="{{ asset('assets/img/JL-audio.jpeg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="text-danger"> JL Audio Custom Fit car speakers</h5>
                        <p class="card-text">Designed for easy, drop-in installations, the JL Audio Custom Fit speakers can
                            be used as mid-tweeters in passive systems or in active systems as true mid-range drivers or
                            mid-tweeters.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

@endsection