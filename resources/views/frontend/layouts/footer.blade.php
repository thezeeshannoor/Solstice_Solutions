

    <!-- Footer Start -->
    <div
      class="container-fluid btns  footer  pt-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
    <div class=" mt-5 get-touch btns d-flex align-items-center justify-content-center wow fadeInUp">
        <a href="contact.html" target="_blank">
            <h1 >Get in Touch with US <img src="img/icon/anchor.png" alt="" width="20px"></h1>
        </a>
    </div>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="text-white mb-4">
                        <img
                            class="img-fluid me-3"
                            src="img/logo-white.png"
                            alt=""
                        />
                    </h1>
                    <p>
                        Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat
                        ipsum et lorem et sit, sed stet lorem sit clita
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""
                        ><i class="fab fa-twitter"></i
                        ></a>
                        <a class="btn btn-square me-1" href="https://www.facebook.com/SolsticesolutionDigital/"
                        ><i class="fab fa-facebook-f"></i
                        ></a>
                        <a class="btn btn-square me-1" href=""
                        ><i class="fab fa-youtube"></i
                        ></a>
                        <a class="btn btn-square me-0" href="https://www.linkedin.com/company/solstice-solution/"
                        ><i class="fab fa-linkedin-in"></i
                        ></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>House No. 754-C, Faisal Town, LHR.
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+92-321-5552245</p>
                    <p><i class="fa fa-envelope me-3"></i> info@solsticesolution.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light  mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white" href="">About Us</a>
                    <a class="btn btn-link text-white" href="">Contact Us</a>
                    <a class="btn btn-link text-white" href="">Our Services</a>
                    <a class="btn btn-link text-white" href="">Terms & Condition</a>
                    <a class="btn btn-link text-white" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Our Services</h5>
                    <a class="btn btn-link text-white" href="">Web Development</a>
                    <a class="btn btn-link text-white" href="">Software Development</a>
                    <a class="btn btn-link text-white" href="">Ditigal Marketing</a>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="/">Solstice Solution</a>, All Right Reserved.
                    </div>
                    <!-- <div class="col-md-6 text-center text-md-end">
                    <This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. 
                    Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                    <br />Distributed By:
                    <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btns btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
        ></a>
        </html>
    </body>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('lib\wow\wow.min.js')}}"></script>
    <script src="{{asset('lib\easing\easing.min.js')}}"></script>
    <script src="{{asset('lib\waypoints\waypoints.min.js')}}"></script>
    <script src="{{asset('lib\owlcarousel\owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib\counterup\counterup.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('js\main.js')}}"></script>
    <!-- Main jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Owl Carousel -->
    <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
    <!-- filter -->
    <script src="{{asset('plugins/filterizr/jquery.filterizr.min.js')}}"></script>
    <script>
    	$('.hero-slider').slickAnimation();
        /* ========================================================================= */
        /*	Portfolio Filtering Hook
        /* =========================================================================  */
        // filter
        setTimeout(function(){
          var containerEl = document.querySelector('.filtr-container');
          var filterizd;
          if (containerEl) {
        	filterizd = $('.filtr-container').filterizr({});
          }
        }, 500);
    </script>