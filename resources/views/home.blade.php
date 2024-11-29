@extends('layouts.web')

@section('content')
            <section id="hero-7" class="gr--perl hero-section">
                <div class="hero-overlay">
                    <div class="container">
                        <div class="row d-flex align-items-center">
    
    
                            <!-- HERO TEXT -->
                            <div class="col-md-6">
                                <div class="hero-7-txt wow fadeInRight">
    
                                    <!-- Title -->
                                    <h2 class="s-45 w-700">Empower Your Growth with Cutting-Edge IT Solutions</h2>
    
                                    <!-- Text -->
                                    <p class="p-lg">Ready to transform your business? Our innovative IT solutions are designed to streamline operations, boost efficiency, and drive success. Whether you're a bulding startup or an established company, we provide scalable and custom strategies to help you thrive in today's competitive landscape.
                                    </p>
    
                                    <!-- HERO QUICK FORM -->
                                    <form method="post" action="{{url('message')}}" class="quick-form form-shadow form-half mt-35">
                                        <!-- Form Inputs -->
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control email r-06"
                                                placeholder="Your email address" autocomplete="off" required>
                                            <span class="input-group-btn form-btn">
                                                <button type="submit" class="btn r-06 btn--theme hover--theme submit">Get
                                                    Started</button>
                                            </span>
                                        </div>
                                        <!-- Form Message -->
                                        {{-- <div class="quick-form-msg"><span class="loading"></span></div> --}}
                                    </form> <!-- END HERO QUICK FORM -->
                                </div>
                            </div> <!-- END HERO TEXT -->
    
    
                            <!-- HERO IMAGE -->
                            						<!-- IMAGE BLOCK -->
                                <div class="col-md-6">
                                    <br/>
                                    <div id="sky">
                                        <div class="bird">
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="wind"></div>
                                            <div class="bird_body">
                                                <div class="bird_head"></div>
                                                <div class="bird_wing_left">
                                                    <div class="bird_wing_left_top"></div>
                                                </div>
                                                <div class="bird_wing_right">
                                                    <div class="bird_wing_right_top"></div>
                                                </div>
                                                <div class="bird_tail_left"></div>
                                                <div class="bird_tail_right"></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                        </div> <!-- End row -->
                    </div> <!-- End container -->
                </div> <!-- End hero-overlay -->
            </section>
    

            <section id="features-6" class="pb-100 features-section division">
                <div class="container">
                    <div class="fbox-wrapper text-center">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                            <div class="col">
                                <div class="fbox-6 fb-2 wow fadeInUp">
    
                                    <div class="fbox-ico ico-55">
                                        <div class="shape-ico color--theme">
    
                                            <span class="flaticon-idea"></span>
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>
    
                                        </div>
                                    </div> <!-- End Icon -->
    
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h6 class="s-20 w-700">Web Development</h6>
                                        <p>Crafting websites that captivate, engage, and deliver results. Our designs are more than just eye candy—they're seamless, intuitive, and optimized to maximize performance and user satisfaction.</p>
                                    </div>
    
                                </div>
                            </div> <!-- END FEATURE BOX #2 -->
    
    
    
                            <div class="col">
                                <div class="fbox-6 fb-1 wow fadeInUp">
                                    <!-- Icon -->
                                    <div class="fbox-ico ico-55">
                                        <div class="shape-ico color--theme">
                                            <!-- Vector Icon -->
                                            <span class="flaticon-graphics"></span>
                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>
                                        </div>
                                    </div> <!-- End Icon -->
    
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h6 class="s-20 w-700">Social Media Managment</h6>
                                        <p>Turn followers into a thriving community! We manage, curate, and create social media magic that not only sparks conversations but builds lasting connections for your brand.</p>
                                    </div>
                                </div>
                            </div> <!-- END FEATURE BOX #1 -->
    
                            <!-- FEATURE BOX #3 -->
                            <div class="col">
                                <div class="fbox-6 fb-3 wow fadeInUp">
    
                                    <!-- Icon -->
                                    <div class="fbox-ico ico-55">
                                        <div class="shape-ico color--theme">
    
                                            <!-- Vector Icon -->
                                            <span class="flaticon-graphic"></span>
    
                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>
    
                                        </div>
                                    </div> <!-- End Icon -->
    
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h6 class="s-20 w-700">Digital Marketing</h6>
                                        <p>Rise above the noise with tailored marketing strategies. From dynamic PPC campaigns to compelling content, we drive leads, engagement, and measurable growth for your business.</p>
                                    </div>
    
                                </div>
                            </div> <!-- END FEATURE BOX #3 -->
    
    
                            <!-- FEATURE BOX #4 -->
                            <div class="col">
                                <div class="fbox-6 fb-4 wow fadeInUp">
    
                                    <!-- Icon -->
                                    <div class="fbox-ico ico-55">
                                        <div class="shape-ico color--theme">
    
                                            <!-- Vector Icon -->
                                            <span class="flaticon-search-engine-1"></span>
    
                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>
    
                                        </div>
                                    </div> <!-- End Icon -->
    
                                    <!-- Text -->
                                    <div class="fbox-txt">
                                        <h6 class="s-20 w-700">SEO Services</h6>
                                        <p>Be seen. Be found. Be unforgettable. Our proven SEO techniques elevate your rankings, fuel organic traffic, and ensure your brand stands out in the digital landscape.</p>
                                    </div>
    
                                </div>
                            </div> <!-- END FEATURE BOX #4 -->
                        </div> <!-- End row -->
                    </div> <!-- END FEATURES-6 WRAPPER -->
                </div> <!-- End container -->
            </section>

    
            <section id="lnk-1" class="ct-02 content-section division">
                <div class="container">
    
                    <!-- SECTION CONTENT (ROW) -->
                    <div class="row d-flex align-items-center">
    
                        <!-- IMAGE BLOCK -->
                        <div class="col-md-6">
                            <div class="img-block left-column wow fadeInRight">
                                <img class="img-fluid" src="images/img-07.png" alt="content-image">
                            </div>
                        </div>
    
                        <!-- TEXT BLOCK -->
                        <div class="col-md-6">
                            <div class="txt-block right-column wow fadeInLeft">
    
                                <!-- Section ID -->
                                <span class="section-id">What’s on Your Mind?</span>
    
                                <!-- Title -->
                                <h2 class="s-46 w-700">How can I grow my business with IT solutions?</h2>
    
                                <!-- Text -->
                                <p>At WebCore Digital Solutions, we turn your vision into reality with smart strategies and flawless execution. From eye-catching websites to impactful digital marketing, we deliver the tools you need to thrive in the digital world.
                                </p>    
                            </div>
                        </div> <!-- END TEXT BLOCK -->
    
    
                    </div> <!-- END SECTION CONTENT (ROW) -->
    
    
                </div> <!-- End container -->
            </section> <!-- END TEXT CONTENT -->


            			<!-- FEATURES-12
			============================================= -->
			<section id="features-12" class="shape--bg shape--white-500 pt-100 features-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-md-5">
							<div class="txt-block left-column wow fadeInRight">

								<!-- Section ID -->	
						 		<span class="section-id">Your One-Stop Digital Solution</span>
	
								<!-- Title -->	
								<h2 class="s-46 w-700">Smart Strategies, Real Results</h2>

								<!-- Text -->	
								<p>From content marketing to business analytics, we provide everything you need to grow and thrive in the digital world.
								</p>

								<!-- CONTENT BOX #1 -->
								<div class="cbox-1 ico-15">

		 							<div class="ico-wrap color--theme">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p>Harness the power of modern tools and frameworks.</p>
									</div>

								</div>

								<!-- CONTENT BOX #2 -->
								<div class="cbox-1 ico-15">

		 							<div class="ico-wrap color--theme">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p>IT strategies that align with your unique goals.
										</p>
									</div>

								</div>

								<!-- CONTENT BOX #3 -->
								<div class="cbox-1 ico-15">

		 							<div class="ico-wrap color--theme">
		 								<div class="cbox-1-ico"><span class="flaticon-check"></span></div>
		 							</div>

									<div class="cbox-1-txt">
										<p class="mb-0">Reliable and ongoing support for your peace of mind.</p>
									</div>

								</div>
								
							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- FEATURES-12 WRAPPER -->
						<div class="col-md-7">
							<div class="fbox-12-wrapper wow fadeInLeft">	
								<div class="row">


				 					<div class="col-md-6">

				 						<!-- FEATURE BOX #1 -->
				 						<div id="fb-12-1" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-layers-1"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													 <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-19 w-700">Content Marketing</h5>
												<p>Create, captivate, and convert.</p>
											</div>

				 						</div>

				 						<!-- FEATURE BOX #2 -->
				 						<div id="fb-12-2" class="fbox-12 bg--white-100 block-shadow r-12">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-tutorial"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-19 w-700">Video Marketing</h5>
												<p>Engage your audience with dynamic visuals.</p>
											</div>

				 						</div>


				 					</div>


				 					<div class="col-md-6">


				 						<!-- FEATURE BOX #3 -->
				 						<div id="fb-12-3" class="fbox-12 bg--white-100 block-shadow r-12 mb-30">

				 							<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-pay-per-click"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-19 w-700">Pay Per Click (PPC)</h5>
												<p>Drive traffic, leads, and sales.</p>
											</div>

				 						</div>

				 						<!-- FEATURE BOX #4 -->
				 						<div id="fb-12-4" class="fbox-12 bg--white-100 block-shadow r-12">

											<!-- Icon -->
											<div class="fbox-ico ico-50">
												<div class="shape-ico color--theme">

													<!-- Vector Icon -->
													<span class="flaticon-taxes"></span>

													<!-- Shape -->
													<svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
													  <path d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z" transform="translate(100 100)" />
													</svg>

												</div>
											</div>	<!-- End Icon -->

											<!-- Text -->
											<div class="fbox-txt">
												<h5 class="s-19 w-700">Business Analytics</h5>
												<p>Turn data into actionable insights.</p>
											</div>

				 						</div>
				 					</div>
				 				</div>
							</div>	<!-- End row -->
						</div>	<!-- END FEATURES-12 WRAPPER -->


					</div>    <!-- End row -->
				</div>     <!-- End container -->
			</section>	<!-- END FEATURES-12 -->

    
    
            <!-- TEXT CONTENT
                ============================================= -->
            <section class="pt-100 ct-04 content-section division">
                <div class="container">
    
    
                    <!-- SECTION CONTENT (ROW) -->
                    <div class="row d-flex align-items-center">
    
    
                        <!-- TEXT BLOCK -->
                        <div class="col-md-6">
                            <div class="txt-block left-column wow fadeInRight">
                                <!-- CONTENT BOX #1 -->
                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">1</div>
                                        <span class="cbox-2-line"></span>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Understanding Your Needs</h5>
                                        <p>We take time to understand your goals and challenges to craft a focused approach.
                                        </p>
                                    </div>
    
                                </div> <!-- END CONTENT BOX #1 -->
    
    
                                <!-- CONTENT BOX #2 -->
                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">2</div>
                                        <span class="cbox-2-line"></span>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Tailored Strategy</h5>
                                        <p>Our team designs custom plans aligned with your business objectives for maximum impact.
                                        </p>
                                    </div>
    
                                </div> <!-- END CONTENT BOX #2 -->
    
    
                                <!-- CONTENT BOX #3 -->
                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">3</div>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Expert Execution</h5>
                                        <p class="mb-0">Precise implementation ensures every element is optimized to deliver measurable results.
                                        </p>
                                    </div>
    
                                </div> <!-- END CONTENT BOX #3 -->
    
                               
    
                            </div>
                        </div> <!-- END TEXT BLOCK -->
    
                        <!-- TEXT BLOCK -->
                        <div class="col-md-6">
                            <div class="txt-block left-column wow fadeInRight">

                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">4</div>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Continuous Optimization</h5>
                                        <p class="mb-0">We refine strategies with data-driven insights to enhance performance and stay ahead.
                                        </p>
                                    </div>
    
                                </div>
    
                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">5</div>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Transparent Reporting</h5>
                                        <p class="mb-0">
											Receive clear, actionable updates on your progress every step of the way.
                                        </p>
                                    </div>
    
                                </div>
    
                                <div class="cbox-2 process-step">
    
                                    <!-- Icon -->
                                    <div class="ico-wrap">
                                        <div class="cbox-2-ico bg--theme color--white">6</div>
                                    </div>
    
                                    <!-- Text -->
                                    <div class="cbox-2-txt">
                                        <h5 class="s-22 w-700">Long-Term Success</h5>
                                        <p class="mb-0">
                                            Build a strong foundation for sustainable growth and maintain your competitive edge.
                                        </p>
                                    </div>
    
                                </div>    
                            </div>
                        </div> <!-- END TEXT BLOCK -->
    
    
                    </div> <!-- END SECTION CONTENT (ROW) -->
    
					<br/><br/>
                </div> <!-- End container -->
            </section> <!-- END TEXT CONTENT -->

            			<!-- TESTIMONIALS-1
			============================================= -->
			{{-- <section id="reviews-1" class="pt-100 shape--06 shape--gr-whitesmoke reviews-section">
				<div class="container">
					<!-- SECTION TITLE -->	
					<div class="row justify-content-center">	
						<div class="col-md-10 col-lg-9">
							<div class="section-title mb-70">	

								<!-- Title -->	
								<h2 class="s-50 w-700">Here’s what our amazing clients are saying</h2>	

								<!-- Text -->	
								<p class="s-21 color--grey">Ligula risus auctor tempus magna feugiat lacinia.</p>
									
							</div>	
						</div>
					</div>


					<!-- TESTIMONIALS CONTENT -->
					<div class="row">
						<div class="col">					
							<div class="owl-carousel owl-theme reviews-1-wrapper">


								<!-- TESTIMONIAL #1 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>Etiam sapien sagittis congue augue a massa varius egestas ultrice varius magna 
										   a tempus aliquet undo cursus suscipit 			   
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-1.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Scott Boxer</h6>
												<p class="p-sm">@scott_boxer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #1 -->


								<!-- TESTIMONIAL #2 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>At sagittis congue augue diam egestas magna an ipsum vitae purus ipsum primis 
										   and cubilia laoreet augue egestas a luctus donec ltrice ligula porta augue magna 
										   suscipit lectus gestas		   
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-2.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Joel Peterson</h6>
												<p class="p-sm">Internet Surfer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #2 -->
						
						
								<!-- TESTIMONIAL #3 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>Mauris gestas magnis a sapien etiam sapien congue an augue egestas and ultrice 
										   vitae purus diam an integer congue magna ligula egestas magna suscipit 
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-3.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Marisol19</h6>
												<p class="p-sm">@marisol19</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #3 -->


								<!-- TESTIMONIAL #4 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>Mauris donec a magnis sapien etiam pretium a congue augue volutpat lectus 
										   aenean magna and undo mauris lectus laoreet tempor egestas rutrum
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-4.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Leslie D.</h6>
												<p class="p-sm">Web Developer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #4 -->
								
								
								<!-- TESTIMONIAL #5 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>An augue cubilia undo laoreet magna suscipit egestas ipsum lectus purus ipsum 
										   and primis augue an ultrice ligula egestas suscipit a lectus gestas auctor tempus 
										   feugiat impedit   
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-5.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Jennifer Harper</h6>
												<p class="p-sm">App Developer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #5 -->
								
								
								<!-- TESTIMONIAL #6 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>An augue cubilia laoreet undo magna ipsum semper suscipit egestas magna ipsum 
										   ligula a vitae purus and ipsum primis cubilia magna suscipit			   
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-6.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Jonathan Barnes</h6>
												<p class="p-sm">jQuery Programmer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #6 -->
								
								
								<!-- TESTIMONIAL #7 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>Augue egestas porta tempus volutpat egestas augue cubilia laoreet a magna 
										   suscipit luctus dolor blandit vitae purus neque tempus an aliquet porta gestas 
										   rutrum blandit vitae
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-7.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Mike Harris</h6>
												<p class="p-sm">Graphic Designer</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #7 -->


								<!-- TESTIMONIAL #8 -->
								<div class="review-1 bg--white-100 block-shadow r-08">

									<!-- Quote Icon -->
		 							<div class="review-ico ico-65"><span class="flaticon-quote"></span></div>

									<!-- Text -->
									<div class="review-txt">

										<!-- Text -->
										<p>Augue at vitae purus tempus egestas volutpat augue undo cubilia laoreet magna 
										   suscipit luctus dolor blandit at purus tempus feugiat impedit
										</p>

										<!-- Author -->
										<div class="author-data clearfix">

											<!-- Avatar -->
											<div class="review-avatar">
												<img src="images/review-author-8.jpg" alt="review-avatar">
											</div>
														
											<!-- Data -->
											<div class="review-author">
												<h6 class="s-18 w-700">Evelyn Martinez</h6>
												<p class="p-sm">WordPress Consultant</p>
											</div>	

										</div>	<!-- End Author -->

									</div>	<!-- End Text -->

								</div>	<!-- END TESTIMONIAL #8 -->


							</div>
						</div>
					</div>	<!-- END TESTIMONIALS CONTENT -->


				</div>	   <!-- End container -->
			</section>	<!-- END TESTIMONIALS-1 --> --}}

			<!-- BANNER-13
			============================================= -->
			<section class="banner-section">
				<div class="container">
					<!-- BANNER-13 WRAPPER -->
					<div class="banner-13-wrapper bg--05 bg--scroll r-16 block-shadow">
						<div class="banner-overlay">
							<div class="row d-flex align-items-center">

								<!-- BANNER-5 TEXT -->
								<div class="col-md-7">
									<div class="banner-13-txt color--white">

										<!-- Title -->	
										<h2 class="s-46 w-700">Get Started with WebCore Today!</h2>

										<!-- Text -->
										<p class="p-lg">Take the first step toward transforming your business. Discover innovative solutions tailored to your success—because growth starts here.
										</p>

										<!-- Button -->
										<a href="/contact-us" class="btn r-04 btn--theme hover--tra-white">Get srarted - it's free</a>

									</div>
								</div>	<!-- END BANNER-13 TEXT -->

								<!-- BANNER-13 IMAGE -->
								<div class="col-md-5">
									<div class="banner-13-img text-center">
										<img class="img-fluid" src="images/img-04.png" alt="banner-image">
									</div>	
								</div>
							</div>   <!-- End row -->	
						</div>   <!-- End banner overlay -->	
					</div>    <!-- END BANNER-13 WRAPPER -->
				</div>     <!-- End container -->	
			</section>	<!-- END BANNER-13 -->

			
    
            <!-- DIVIDER LINE -->
            <hr class="divider">
    
            <!-- MODAL WINDOW (NEWSLETTER FORM)
                ============================================= -->
            <div id="modal-2" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
    
    
                        <!-- CLOSE BUTTON -->
                        <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="flaticon-cancel"></span>
                        </button>
    
    
                        <!-- MODAL CONTENT -->
                        <div class="modal-body text-center">
    
    
                            <!-- IMAGE -->
                            <div class="modal-body-img">
                                <img class="img-fluid" src="images/modal-newsletter-blue.jpg" alt="content-image">
                            </div>
    
    
                            <!-- NEWSLETTER FORM -->
                            <div class="modal-body-content">
    
                                <!-- Title -->
                                <h5 class="s-24 w-700">Stay up to date with our news, ideas and updates</h5>
    
                                <!-- Form -->
                                <form class="newsletter-form">
    
                                    <div class="input-group">
                                        <input type="email" autocomplete="off" class="form-control"
                                            placeholder="Your email address" required id="s-email">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn--theme hover--theme">Subscribe Now</button>
                                        </span>
                                    </div>
    
                                    <!-- Newsletter Form Notification -->
                                    <label for="s-email" class="form-notification"></label>
    
                                </form>
    
                            </div> <!-- END NEWSLETTER FORM -->
    
    
                        </div> <!-- END MODAL CONTENT -->
    
    
                    </div>
                </div>
            </div> <!-- END MODAL WINDOW (NEWSLETTER FORM) -->
@endsection