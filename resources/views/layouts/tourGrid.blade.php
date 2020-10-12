	         <!-- ============================ header  ================================== -->			

             @include('front.includes.header')

             <!-- ============================ header  ================================== -->			

        
        
        <!-- ============================ Page Title Start================================== -->
			<div class="image-cover page-title" style="background:url(https://kumarpreet.com/travlio-live/travlio/assets/img/banner-1.jpg) no-repeat;" data-overlay="6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">{{ __('Tour Grid') }}</h2>
							<span class="ipn-subtitle text-light">Tour Grid Layout with Sidebar</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- =================== Sidebar Search ==================== -->
			<section class="gray">
				<div class="container">
					<div class="row">
						<div class="order-2 col-lg-4 col-md-12 order-lg-1 order-md-2">
						
							<!-- property Sidebar -->
							<div class="exlip-page-sidebar">
								
								<!-- Find New Property -->
								<div class="sidebar-widgets">
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control" placeholder="Destination">
											<i class="ti-location-pin"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<input type="text" class="form-control check-in-out" name="dates" value="01/01/2018 - 01/15/2018" />
											<i class="ti-calendar"></i>
										</div>
									</div>
									
									<div class="form-group">
										<div class="input-with-icon">
											<select id="tour-category" class="form-control">
												<option value="">&nbsp;</option>
												<option value="1">City trips</option>
												<option value="2">Ecotourism</option>
												<option value="3">Escorted Tour</option>
												<option value="4">Group Tour</option>
												<option value="5">Hosted tours</option>
												<option value="6">Ligula</option>
											</select>
											<i class="ti-briefcase"></i>
										</div>
									</div>
									
									<div class="range-slider">
										<label>Radius</label>
										<div class="distance-title">around selected destination <span class="theme-cl"></span> km</div>
										<input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
									</div>

									<div class="ameneties-features">
										<label>Advance Features</label>
										<ul class="no-ul-list">
											<li>
												<input id="a-1" class="checkbox-custom" name="a-1" type="checkbox">
												<label for="a-1" class="checkbox-custom-label">Air Condition</label>
											</li>
											<li>
												<input id="a-2" class="checkbox-custom" name="a-2" type="checkbox">
												<label for="a-2" class="checkbox-custom-label">Bedding</label>
											</li>
											<li>
												<input id="a-3" class="checkbox-custom" name="a-3" type="checkbox">
												<label for="a-3" class="checkbox-custom-label">Heating</label>
											</li>
											<li>
												<input id="a-4" class="checkbox-custom" name="a-4" type="checkbox">
												<label for="a-4" class="checkbox-custom-label">Internet</label>
											</li>
											<li>
												<input id="a-5" class="checkbox-custom" name="a-5" type="checkbox">
												<label for="a-5" class="checkbox-custom-label">Microwave</label>
											</li>
											<li>
												<input id="a-6" class="checkbox-custom" name="a-6" type="checkbox">
												<label for="a-6" class="checkbox-custom-label">Smoking Allow</label>
											</li>
											<li>
												<input id="a-7" class="checkbox-custom" name="a-7" type="checkbox">
												<label for="a-7" class="checkbox-custom-label">Terrace</label>
											</li>
											<li>
												<input id="a-8" class="checkbox-custom" name="a-8" type="checkbox">
												<label for="a-8" class="checkbox-custom-label">Balcony</label>
											</li>
											<li>
												<input id="a-9" class="checkbox-custom" name="a-9" type="checkbox">
												<label for="a-9" class="checkbox-custom-label">Icon</label>
											</li>
										</ul>
									
									</div>
									
									<div class="ameneties-features mt-3">
										<label>Review Score</label>
										<ul class="no-ul-list">
											<li>
												<input id="mo-1" class="checkbox-custom" name="mo-1" type="checkbox">
												<label for="mo-1" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-2" class="checkbox-custom" name="mo-2" type="checkbox">
												<label for="mo-2" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-3" class="checkbox-custom" name="mo-3" type="checkbox">
												<label for="mo-3" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-4" class="checkbox-custom" name="mo-4" type="checkbox">
												<label for="mo-4" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											<li>
												<input id="mo-5" class="checkbox-custom" name="mo-5" type="checkbox">
												<label for="mo-5" class="checkbox-custom-label search-review">
													<span><i class="fa fa-star filled"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
													<span><i class="fa fa-star"></i></span>
												</label>
											</li>
											
										</ul>
									
									</div>
									
									<div class="ameneties-features mt-3">
										<label>Lanhuages</label>
										<ul class="no-ul-list">
											<li>
												<input id="ml-1" class="checkbox-custom" name="ml-1" type="checkbox">
												<label for="ml-1" class="checkbox-custom-label">English</label>
											</li>
											<li>
												<input id="ml-2" class="checkbox-custom" name="ml-2" type="checkbox">
												<label for="ml-2" class="checkbox-custom-label">Fench</label>
											</li>
											<li>
												<input id="ml-3" class="checkbox-custom" name="ml-3" type="checkbox">
												<label for="ml-3" class="checkbox-custom-label">Spanish</label>
											</li>
											
										</ul>
									
									</div>
							
								</div>
							</div>
						</div>
						<!-- Sidebar End -->
							
						<div class="order-1 content-area col-lg-8 col-md-12 order-md-1 order-lg-2">
							<div class="row">
							
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="shorting-wrap">
										<h5 class="shorting-title">507 Results</h5>
										<div class="shorting-right">
											<label>Short By:</label>
											<div class="dropdown show">
												<a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<span class="selection">Most Rated</span>
												</a>
												<div class="drp-select dropdown-menu">
													<a class="dropdown-item" href="JavaScript:Void(0);">Most Rated</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">Most Viewd</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">News Listings</a>
													<a class="dropdown-item" href="JavaScript:Void(0);">High Rated</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="row m-0">
							
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 15%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-2.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.7 Good
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">The heritage of England</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$349.33</span>
												<h5 class="ts-price theme-cl">$250.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>3 days</li>
												<li><i class="ti-user"></i>2 person</li>
												<li><i class="ti-location-pin"></i>London</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 10%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-3.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.8 Superb
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">Amalfi, Italy</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$349.33</span>
												<h5 class="ts-price theme-cl">$1299.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>5 days</li>
												<li><i class="ti-user"></i>3 person</li>
												<li><i class="ti-location-pin"></i>Monaco</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 18%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-4.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.9 Superb
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">Pyramids of Giza, Egypt</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$549.33</span>
												<h5 class="ts-price theme-cl">$1099.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>4 days</li>
												<li><i class="ti-user"></i>2 person</li>
												<li><i class="ti-location-pin"></i>Mexico</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 16%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-5.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.5 Good
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">British Virgin Islands</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$499.33</span>
												<h5 class="ts-price theme-cl">$970.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>4 days</li>
												<li><i class="ti-user"></i>3 person</li>
												<li><i class="ti-location-pin"></i>Norway</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 30%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-6.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.3 Mid
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">The Great Barrier Reef</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$849.33</span>
												<h5 class="ts-price theme-cl">$1350.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>5 days</li>
												<li><i class="ti-user"></i>3 person</li>
												<li><i class="ti-location-pin"></i>Mexico</li>
											</ul>
										</div>
									</div>
								</div>
								
								<!-- Single Tour Place -->
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="tour-simple-wrap style-3">
										<span class="onsale-section"><span class="onsale">Save 17%</span></span>
										<div class="tour-simple-thumb">
											<a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html"><img src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-7.jpg" class="img-fluid img-responsive" alt="" /></a>
										</div>
										<div class="tour-simple-caption">
											<div class="ts-caption-left">
												<div class="ovrall-rating">
													<i class="ti-star filled"></i>
													4.6 Good
												</div>
												<h4 class="ts-title"><a href="https://kumarpreet.com/travlio-live/travlio/tour-detail.html">Machu Picchu, Peru</a></h4>
											</div>
											<div class="ts-caption-right">
												<span class="price-off">$599.33</span>
												<h5 class="ts-price theme-cl">$999.00</h5>
											</div>
										</div>
										<div class="tour-simple-footer">
											<ul>
												<li><i class="ti-time"></i>4 days</li>
												<li><i class="ti-user"></i>2 person</li>
												<li><i class="ti-location-pin"></i>Germany</li>
											</ul>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="row m-0">	
								<div class="col-md-12 col-sm-12 mt-3">
									<div class="text-center">
										
										<div class="spinner-grow text-danger" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-warning" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										<div class="spinner-grow text-success" role="status">
										  <span class="sr-only">Loading...</span>
										</div>
										
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- =================== Sidebar Search ==================== -->

			<!-- ============================ Newsletter Start ================================== -->
			<section class="alert-wrap pt-5 pb-5" style="background:#ff5722 url(https://kumarpreet.com/travlio-live/travlio/assets/img/bg-new.png);">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<div class="jobalert-sec">
								<h3 class="mb-1 text-light">Get New Jobs Notification!</h3>
								<p class="text-light">Subscribe & get all related jobs notification.</p>
							</div>
						</div>
						
						<div class="col-lg-6 col-md-6">
							<div class="input-group">
							  <input type="text" class="form-control" placeholder="Enter Your Email">
							  <div class="input-group-append">
								<button type="button" class="btn btn-black black">Subscribe</button>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</section>
            <!-- ============================ Newsletter Start ================================== -->			
                        <!-- ============================ footer  ================================== -->			


              
    @include('front.includes.footer')

                          <!-- ============================ footer  ================================== -->			
