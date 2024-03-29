@extends('frontend.layouts.main')
@section('main-content')
	
	<!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      	<div class="container py-5">
	        <h1 class="display-4 animated slideInDown mb-4">About Us</h1>
	        <nav aria-label="breadcrumb animated slideInDown">
	          	<ol class="breadcrumb mb-0">
	            	<li class="breadcrumb-item"><a href="#">Home</a></li>
	            	<!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
	            	<li class="breadcrumb-item active" aria-current="page">About</li>
	         	 </ol>
	        </nav>
      	</div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      	<div class="container">
        	<div class="row g-5">
          		<div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
            		<div class="h-100">
		              	<h1 class="display-6 mb-5">
		               		WHO WE ARE
		              	</h1>
		              	<!-- <p class="fs-5 text-primary mb-4">
		                Solstice Solution is a responsive IT agency in Lahore, Pakistan. We emphasize on colliding creativity and innovation in the best possible way. With unique and aspiring ideas we tend to boost your business. We have a vision and with a futuristic approach, we assist you in getting your hands on the latest and advancing technologies. We stand in your shoes and provide the best digital solutions in Lahore, Pakistan. You dream and we turn them into reality. Your wish is our command.
		              	</p>
		              	<div class="row g-4 mb-4">
		                <div class="col-sm-6">
		                  <div class="d-flex align-items-center">
		                    <img
		                      class="flex-shrink-0 me-3"
		                      src="img/icon/icon-04-primary.png"
		                      alt=""
		                    />
		                    <h5 class="mb-0">Flexible Insurance Plans</h5>
		                  </div>
		                </div>
		                <div class="col-sm-6">
		                  <div class="d-flex align-items-center">
		                    <img
		                      class="flex-shrink-0 me-3"
		                      src="img/icon/icon-03-primary.png"
		                      alt=""
		                    />
		                    <h5 class="mb-0">Money Back Guarantee</h5>
		                  </div>
		                </div>
		              	</div> -->
		              	<p class="mb-4">
		                	Solstice Solution is a responsive IT agency in Lahore, Pakistan. We emphasize on colliding creativity and innovation in the best possible way. With unique and aspiring ideas we tend to boost your business. We have a vision and with a futuristic approach, we assist you in getting your hands on the latest and advancing technologies. We stand in your shoes and provide the best digital solutions in Lahore, Pakistan. You dream and we turn them into reality. Your wish is our command.
		              	</p>

		              	<h1 class="display-6 mb-5">
                			OUR MISSION
              			</h1>
		            	<!-- <p class="fs-5 text-primary mb-4">
		                Solstice Solution is a responsive IT agency in Lahore, Pakistan. We emphasize on colliding creativity and innovation in the best possible way. With unique and aspiring ideas we tend to boost your business. We have a vision and with a futuristic approach, we assist you in getting your hands on the latest and advancing technologies. We stand in your shoes and provide the best digital solutions in Lahore, Pakistan. You dream and we turn them into reality. Your wish is our command.
		            	</p>
		            	<div class="row g-4 mb-4">
		                <div class="col-sm-6">
		                  <div class="d-flex align-items-center">
		                    <img
		                      class="flex-shrink-0 me-3"
		                      src="img/icon/icon-04-primary.png"
		                      alt=""
		                    />
		                    <h5 class="mb-0">Flexible Insurance Plans</h5>
		                  </div>
		                </div>
		                <div class="col-sm-6">
		                  <div class="d-flex align-items-center">
		                    <img
		                      class="flex-shrink-0 me-3"
		                      src="img/icon/icon-03-primary.png"
		                      alt=""
		                    />
		                    <h5 class="mb-0">Money Back Guarantee</h5>
		                  </div>
		                </div>
		            	</div> -->
	              		<p class="mb-4">
	                		Solstice Solution is a responsive IT agency in Lahore, Pakistan. We emphasize on colliding creativity and innovation in the best possible way. With unique and aspiring ideas we tend to boost your business. We have a vision and with a futuristic approach, we assist you in getting your hands on the latest and advancing technologies. We stand in your shoes and provide the best digital solutions in Lahore, Pakistan. You dream and we turn them into reality. Your wish is our command.
	              		</p>
              			<div class="border-top mt-4 pt-4">
                			<div class="d-flex align-items-center">
		                  		<img
				                    class="flex-shrink-0 rounded-circle me-3"
				                    src="img/logo-sm.png"
				                    alt=""
		                  		/>
	                  			<h5 class="mb-0">Call Us: +92 321 5552245</h5>
                			</div>
              			</div>

		              	<!-- <div class="col-12">
		                  	
	                	</div> -->
            		</div>
            		<!-- comment -->
		            <!-- <div
		              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
		              style="min-height: 400px"
		            >
		              	<img
			                class="position-absolute w-100 h-100"
			                src="img/about.jpg"
			                alt=""
			                style="object-fit: cover"
		              	/>
		              	<div
			                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
			                style="width: 200px; height: 200px"
		              	>
			                <div
			                  	class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
			                >
				                <h1 class="text-white mb-0">7</h1>
				                <h2 class="text-white">Years</h2>
				                <h5 class="text-white mb-0">Experience</h5>
			                </div>
		              	</div>
		            </div> -->
	            <!-- comment -->
          		</div>
          		<div class=" col-10 col-sm-6 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
            		<div class="h-100">
              		<button class="btn btns col-9 py-3 px-5" type="submit">
		                <object data="{{asset('document\Solstice-Solution-Profile.pdf')}}" type=”pdf/html”>
		                  <a href="{{asset('document\Solstice-Solution-Profile.pdf')}}" class="btns" target="_blank">Company Portfolio</a>
		                </object>
		              </button>

					  <button class="btn btns mt-2 col-9 py-3 px-5" type="submit">
		               
		                  <a href="{{asset('document\Solstice-Solution-Profile.pdf')}}" class="btns" target="_blank"> Behance</a>
		               
		              </button>

            		</div>
          		</div>
        	</div>
    	</div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      	<div class="container facts px-lg-0">
        	<div class="row g-0 mx-lg-0">
          		<div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            		<div class="h-100 px-4 ps-lg-0">
              			<h1 class="text-white mb-4">For Individuals And Organisations</h1>
              			<p class="text-light mb-5">
                			Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                			Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                			sed stet lorem sit clita duo justo magna dolore erat amet
              			</p>
              			<a href="" class="align-self-start btn btn-secondary py-3 px-5"
                		>More Details</a>
            		</div>
          		</div>
          		<div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            		<div class="h-100 px-4 pe-lg-0">
              			<div class="row g-5">
                			<div class="col-sm-6">
                  				<h1 class="display-5" data-toggle="counter-up">1234</h1>
                  				<p class="fs-5 text-primary">Happy Clients</p>
                			</div>
			                <div class="col-sm-6">
			                  	<h1 class="display-5" data-toggle="counter-up">1234</h1>
			                  	<p class="fs-5 text-primary">Projects Succeed</p>
			                </div>
                			<div class="col-sm-6">
                  				<h1 class="display-5" data-toggle="counter-up">1234</h1>
                  				<p class="fs-5 text-primary">Awards Achieved</p>
                			</div>
                			<div class="col-sm-6">
                  				<h1 class="display-5" data-toggle="counter-up">1234</h1>
                  				<p class="fs-5 text-primary">Team Members</p>
                			</div>
              			</div>
            		</div>
          		</div>
        	</div>
      	</div>
    </div>
    <!-- Facts End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
      	<div class="container">
	        <div class="text-center mx-auto" style="max-width: 500px">
	          	<h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
	        </div>
        	<div class="row g-4">
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
	            	<div class="team-item rounded">
	              		<img class="img-fluid" src="img/bilal.jpg" alt="" />
			            <div class="text-center p-4">
				            <h5>Bilal Khalid</h5>
				            <span>Co-Founder</span>
			            </div>
			            <div class="team-text text-center bg-white p-4">
			              	<h5>Bilal Khalid</h5>
			              	<p>Co-Founder</p>
			              	<div class="d-flex justify-content-center">
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-twitter"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-facebook-f"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-youtube"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-linkedin-in"></i
				              	></a>
			                </div>
	              		</div>
	            	</div>
	          	</div>
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/umer.jpg" alt="" />
		              	<div class="text-center p-4">
		                	<h5>Umer Khalid</h5>
		                	<span>Co-Founder</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
		                	<h5>Umer Khalid</h5>
		                	<p>Co-Founder</p>
		                	<div class="d-flex justify-content-center">
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-twitter"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-facebook-f"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-youtube"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-linkedin-in"></i
			                  	></a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/hamza.jpg" alt="" />
		              	<div class="text-center p-4">
			                <h5>Hamza Iqbal</h5>
			                <span>Senior Designer</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
			                <h5>Hamza Iqbal</h5>
			                <p>Senior Designer</p>
		                	<div class="d-flex justify-content-center">
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-twitter"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-facebook-f"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-youtube"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-linkedin-in"></i
			                  	></a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
		        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/umair.jpg" alt="" />
		              	<div class="text-center p-4">
		                	<h5>Umair AR</h5>
		                	<span>Developer</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
		                	<h5>Umair</h5>
		                	<p>Developer</p>
		                	<div class="d-flex justify-content-center">
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-twitter"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-facebook-f"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-youtube"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-linkedin-in"></i
		                  		></a>
		                	</div>
		              	</div>
		            </div>
		        </div>
	        </div><br>
	        <div class="row g-4">
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
	            	<div class="team-item rounded">
	              		<img class="img-fluid" src="img/bilal.jpg" alt="" />
			            <div class="text-center p-4">
				            <h5>Bilal Khalid</h5>
				            <span>Co-Founder</span>
			            </div>
			            <div class="team-text text-center bg-white p-4">
			              	<h5>Bilal Khalid</h5>
			              	<p>Co-Founder</p>
			              	<div class="d-flex justify-content-center">
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-twitter"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-facebook-f"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-youtube"></i
				              	></a>
				              	<a class="btn btn-square btn-light m-1" href=""
				                ><i class="fab fa-linkedin-in"></i
				              	></a>
			                </div>
	              		</div>
	            	</div>
	          	</div>
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/umer.jpg" alt="" />
		              	<div class="text-center p-4">
		                	<h5>Umer Khalid</h5>
		                	<span>Co-Founder</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
		                	<h5>Umer Khalid</h5>
		                	<p>Co-Founder</p>
		                	<div class="d-flex justify-content-center">
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-twitter"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-facebook-f"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-youtube"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-linkedin-in"></i
			                  	></a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
	          	<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/hamza.jpg" alt="" />
		              	<div class="text-center p-4">
			                <h5>Hamza Iqbal</h5>
			                <span>Senior Designer</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
			                <h5>Hamza Iqbal</h5>
			                <p>Senior Designer</p>
		                	<div class="d-flex justify-content-center">
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-twitter"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-facebook-f"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-youtube"></i
			                  	></a>
			                  	<a class="btn btn-square btn-light m-1" href=""
			                    ><i class="fab fa-linkedin-in"></i
			                  	></a>
		                	</div>
		              	</div>
		            </div>
	          	</div>
		        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
		            <div class="team-item rounded">
		              	<img class="img-fluid" src="img/umair.jpg" alt="" />
		              	<div class="text-center p-4">
		                	<h5>Umair AR</h5>
		                	<span>Developer</span>
		              	</div>
		              	<div class="team-text text-center bg-white p-4">
		                	<h5>Umair</h5>
		                	<p>Developer</p>
		                	<div class="d-flex justify-content-center">
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-twitter"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-facebook-f"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-youtube"></i
		                  		></a>
		                  		<a class="btn btn-square btn-light m-1" href=""
		                    	><i class="fab fa-linkedin-in"></i
		                  		></a>
		                	</div>
		              	</div>
		            </div>
		        </div>
	        </div>
      	</div>
    </div>
    <!-- Team End -->
@endsection