<!-- Footer Start -->

<div class="container-fluid bg-secondary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-3 mt-md-4">
                {{-- <h4 class="text-uppercase mb-4">social links</h4> --}}
                <a href="/"><img src="http://127.0.0.1:8000/assets/img/acoustic.png" alt="" class="w-100">
                </a>
                <p class="p-4 pt-0">For over 25 years, Acoustic-Arts has been at the forefront of professional audio
                    integration across India.</p>
                {{-- <div class="position-relative mb-4">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button"
                        class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div> --}}

            </div>
            <div class="col-lg-3 col-md-3">
                <h4 class="text-uppercase mb-4">Our Links</h4>
                <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                <a class="btn btn-link" href="{{ route('service') }}">Services</a>
                {{-- <a class="btn btn-link" href="{{ route('products') }}">Products</a> --}}
                <a class="btn btn-link" href="{{ route('project') }}">Projects</a>
                {{-- <a class="btn btn-link" href="">Support</a> --}}
                <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
            </div>
              <div class="col-lg-3 col-md-3">
                <h4 class="text-uppercase mb-4">Our Brands</h4>
                <a class="btn btn-link" href="{{ route("biamp") }}">Biamp</a>
                <a class="btn btn-link" href="{{ route("powersoft") }}">Powersoft</a>
                <a class="btn btn-link" href="{{ route("audix") }}">Audix</a>
                <a class="btn btn-link" href="{{ route("void") }}">Void</a>
                <a class="btn btn-link" href="{{route('cloud')}}">Cloud</a>
                <a class="btn btn-link" href="{{ route("goldenear") }}">GoldenEar</a>
                <a class="btn btn-link" href="{{ route("JL_Audio") }}">JL Audio</a>
            </div>
            <div class="col-lg-3 col-md-3">
                <h4 class="text-uppercase mb-4">social links</h4>

                <div class="d-flex pt-1 m-n1">
                    <a class="btn btn-lg-square btn-dark text-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-dark text-primary m-1"
                        href="https://www.facebook.com/AcousticArts/"><i class="fab fa-facebook-f"></i></a>

                    <a class="btn btn-lg-square btn-dark text-primary m-1"
                        href="https://www.linkedin.com/company/acoustic-arts-private-limited/"><i
                            class="fab fa-linkedin-in"></i></a>

                    <a class="btn btn-lg-square btn-dark text-primary m-1"
                        href="https://www.linkedin.com/company/acoustic-arts-private-limited/"><i
                            class="fab fa-instagram"></i></a>
                </div>

                <!-- Clickable Address (Optional - Google Maps) -->
                {{-- <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-map-marker-alt text-primary"></span>
                    </div>
                    <a href="https://www.google.com/maps/place/K-1/110,+2nd+Floor,+C.R.+Park,+New+Delhi-110019,+India"
                        target="_blank" class="text-white text-decoration-none">
                        K-1/110, 2nd Floor C.R. Park New Delhi-110019 India
                    </a>
                </div> --}}

                <!-- Clickable Phone -->
                {{-- <div class="d-flex align-items-center mb-2">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-phone-alt text-primary"></span>
                    </div>
                    <a href="tel:+917503982162" class="text-white text-decoration-none">+91 7503982162</a>
                </div> --}}

                <!-- Clickable Email -->
                {{-- <div class="d-flex align-items-center">
                    <div class="btn-square bg-dark flex-shrink-0 me-3">
                        <span class="fa fa-envelope-open text-primary"></span>
                    </div>
                    <a href="mailto:sunny@acoustic-arts.com" class="text-white text-decoration-none">
                        sunny@acoustic-arts.com
                    </a>
                </div> --}}

            </div>
        </div>
    </div>
    <div class="">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    &copy; <?php echo(date("Y")); ?> <a class="border-bottom" href="/">Acoustic-Arts Pvt.Ltd </a>
                </div>
                {{-- <div class="col-md-6 text-center text-md-end"> --}}
                    {{-- Designed By <a class="border-bottom" href="">Pritam</a> --}}
                    {{-- <br>Distributed By: <a class="border-bottom" href="https://themewagon.com"
                        target="_blank">ThemeWagon</a> --}}
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/688df4e988d9b3192aa82640/1j1l89cg9';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script> --}}
<!--End of Tawk.to Script-->
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<!-- GSAP CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>