@extends('layouts.app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">

        <div class="container text-center py-5">
            <h1 class="display-3 text-white text-uppercase mb-3 animated slideInDown">Awards</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Awards</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Page Header End -->
 
        <div class="container">
            <div class="py-3">
            <h2 class="text-danger">Recognized by Global Audio Leaders</h2>
            <p>For over 25 years, Acoustic Arts Pvt. Ltd. has been a trusted name in professional audio and audiovisual
                solutions across India.</p>
        </div>
            <div class="row g-3">
                @php
                    $brands = [
                        [
                            'name' => 'Void',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'Premium loudspeaker systems for clubs and large venues.',
                        ],
                        [
                            'name' => 'Biamp',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'Advanced DSP and audio networking solutions.',
                        ],
                        [
                            'name' => 'Powersoft',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'High-performance power amplifiers with DSP.',
                        ],
                        [
                            'name' => 'GoldenEar',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'Luxury home audio speakers with refined sound.',
                        ],
                        [
                            'name' => 'JL Audio',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'Premium car and marine audio  systems.',
                        ],
                        [
                            'name' => 'Audix',
                            'image' => 'assets/img/Trophy.png',
                            'description' => 'Professional microphones for stage and studio.',
                        ],
                    ];
                @endphp


                <div class="row g-3">
                    @foreach ($brands as $brand)
                        <div class="col-md-4">
                            <div class="text-dark text-center shadow-lg pb-2 px-2">

                                <img class="card-img-top w-100 gallery-img" src="{{ asset($brand['image']) }}"
                                    style="cursor:pointer" alt="{{ $brand['name'] }}">

                                <div class="card-body">
                                    <h5 class="text-danger">{{ $brand['name'] }}</h5>
                                    <p class="card-text">
                                        {{ $brand['description'] }}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>



        <!-- Modal -->
        <div id="imageModal" class="custom-modal">
            <span class="close-btn">&times;</span>
            <img class="modal-content" id="modalImg">
        </div>



        <script>
            const modal = document.getElementById("imageModal");
            const modalImg = document.getElementById("modalImg");
            const closeBtn = document.querySelector(".close-btn");

            // Apply click to ALL images automatically
            document.querySelectorAll(".gallery-img").forEach(img => {
                img.addEventListener("click", function() {
                    modal.classList.add("show");
                    modalImg.src = this.src;
                });
            });

            // Close button
            closeBtn.onclick = function() {
                modal.classList.remove("show");
            };

            // Close when clicking outside image
            modal.onclick = function(e) {
                if (e.target !== modalImg) {
                    modal.classList.remove("show");
                }
            };
        </script>
@endsection
