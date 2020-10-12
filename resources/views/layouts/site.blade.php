    @include('front.includes.header')

    
    <!-- ======================= Start Banner ===================== -->
    <div class="main-banner "  style="background-image:url({{asset('assets/images/homePic.jpg')}}" data-overlay="5">
        <div class="container">
            <div class="col-md-12 col-sm-12">

                    <div id="owl-demo" class="owl-carousel owl-theme">
        
                        <div class="item">  
                            
                        
                    
                             <div class="caption text-center cl-white">
                                   <h2>{{ __('Hello world') }}</h2>
                                   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                               </div>
                        
                        </div>
                            {{-- <div class="item"><img src="#" alt="GTA V"></div>
                            <div class="item"><img src="#" alt="Mirror Edge"></div> --}}
                    </div>
               
              </div>
        </div> 
        
        
    </div>
    <!-- ======================= End Banner ===================== -->
    
    <!-- ================= true Facts start ========================= -->
    <section class="facts">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4">
                    <div class="facts-wrap">
                        <div class="facts-icon">
                            <i class="theme-cl ti-location-pin"></i>
                        </div>
                        <div class="facts-detail">
                            <h4>1,000+ Local Tours</h4>
                            <p>Morbi semper fames lobortis ac hac</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="facts-wrap">
                        <div class="facts-icon">
                            <i class="theme-cl ti-shine"></i>
                        </div>
                        <div class="facts-detail">
                            <h4>Winter Destinations</h4>
                            <p>Morbi semper fames lobortis ac hac</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4">
                    <div class="facts-wrap">
                        <div class="facts-icon">
                            <i class="theme-cl ti-face-smile"></i>
                        </div>
                        <div class="facts-detail">
                            <h4>98% Happy Travelers</h4>
                            <p>Morbi semper fames lobortis ac hac</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ================= End true Facts ========================= -->
    
    <!-- ================= Travel start ========================= -->
    <section class="min">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading center">
                        <p>Popular Travel Packages</p>
                        <a href="{{route('layouts.tourGrid',app()->getLocale() )}}" >

                            <h2 > Top Cities for Travel</h2>

                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-2.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">45% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(48) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">The heritage of England</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>London, England</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$1199</h6>
                            <h4 class="price-title">$799</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-3.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">32% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(38) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">Amalfi, Italy</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>Florence, Italy</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$1299</h6>
                            <h4 class="price-title">$870</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-4.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">29% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(40) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">Pyramids of Giza, Egypt</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>Egypt, USA</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$1090</h6>
                            <h4 class="price-title">$870</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-5.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">30% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(48) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">British Virgin Islands</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>Cologne, Germany</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$1099</h6>
                            <h4 class="price-title">$899</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-6.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">50% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(78) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">The Great Barrier Reef</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>Puebla, Mexico</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$1199</h6>
                            <h4 class="price-title">$599</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Single Tour Place -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="singlePlaceitem">
                        <figure class="singlePlacewrap">
                            <a class="place-link" href="#">
                                <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/destination/des-7.jpg" alt="room">
                            </a>
                        </figure>
                        <div class="placeDetail">
                            <span class="onsale-section"><span class="onsale">40% Off</span></span>
                            <div class="placeDetail-left">
                                <div class="item-rating">
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star filled"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(64) Reviews</span>
                                </div>
                                <h4 class="title"><a href="#">Machu Picchu, Peru</a></h4>
                                <span class="placeDetail-detail"><i class="ti-location-pin"></i>Bergen, Norway</span>
                            </div>
                            <div class="pricedetail-box">
                            <h6 class="price-title-cut">$2000</h6>
                            <h4 class="price-title">$1200</h4>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
    </section>
    <!-- ========================= End Travel Section ============================ -->
    
    <!-- ================= Activities start ========================= -->
    <section class="gray">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading center">
                        <p>Best Staying Places</p>
                        <h2>Top Staying Places</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme" id="lists-slide">
                        
                        <div class="single-item">
                            <div class="single-room-item">
                                <span class="theme-bg discount-off">Discount 40%</span>
                                <figure class="single-roomimg-wrap">
                                    <a class="single-roomlink" href="#">
                                        <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/hotel/hotel-6.jpg" alt="room">
                                    </a>
                                </figure>
                                <div class="single-roomdetails">
                                    <h4 class="title">Private Room</h4>
                                    <div class="single-roomprice">$1050<span>night</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-item">
                            <div class="single-room-item">
                                <span class="theme-bg discount-off">Discount 22%</span>
                                <figure class="single-roomimg-wrap">
                                    <a class="single-roomlink" href="#">
                                        <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/hotel/hotel-5.jpg" alt="room">
                                    </a>
                                </figure>
                                <div class="single-roomdetails">
                                    <h4 class="title">Deluxe Room</h4>
                                    <div class="single-roomprice">$550<span>night</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-item">
                            <div class="single-room-item">
                                <span class="theme-bg discount-off">Discount 25%</span>
                                <figure class="single-roomimg-wrap">
                                    <a class="single-roomlink" href="#">
                                        <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/hotel/hotel-4.jpg" alt="room">
                                    </a>
                                </figure>
                                <div class="single-roomdetails">
                                    <h4 class="title">Luxury Room</h4>
                                    <div class="single-roomprice">$350<span>night</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-item">
                            <div class="single-room-item">
                                <span class="theme-bg discount-off">Discount 30%</span>
                                <figure class="single-roomimg-wrap">
                                    <a class="single-roomlink" href="#">
                                        <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/hotel/hotel-3.jpg" alt="room">
                                    </a>
                                </figure>
                                <div class="single-roomdetails">
                                    <h4 class="title">Deluxe Room</h4>
                                    <div class="single-roomprice">$665<span>night</span></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="single-item">
                            <div class="single-room-item">
                                <span class="theme-bg discount-off">Discount 15%</span>
                                <figure class="single-roomimg-wrap">
                                    <a class="single-roomlink" href="#">
                                        <img class="cover" src="https://kumarpreet.com/travlio-live/travlio/assets/img/hotel/hotel-2.jpg" alt="room">
                                    </a>
                                </figure>
                                <div class="single-roomdetails">
                                    <h4 class="title">Private Room</h4>
                                    <div class="single-roomprice">$550<span>night</span></div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ========================= End Activities Section ============================ -->
        
    <!-- ================= true Facts start ========================= -->
    <section class="theme-bg">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="facts-wrap light">
                        <div class="facts-icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="facts-detail">
                            <h2>584</h2>
                            <p>Top Local Guides</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="facts-wrap light">
                        <div class="facts-icon">
                            <i class="ti-shine"></i>
                        </div>
                        <div class="facts-detail">
                            <h2>7410</h2>
                            <p>Winter Destinations</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="facts-wrap light">
                        <div class="facts-icon">
                            <i class="ti-car"></i>
                        </div>
                        <div class="facts-detail">
                            <h2>670</h2>
                            <p>New Tours</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="facts-wrap light">
                        <div class="facts-icon">
                            <i class="ti-face-smile"></i>
                        </div>
                        <div class="facts-detail">
                            <h2>2540</h2>
                            <p>Happy Travelers</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ================= End true Facts ========================= -->
    
    <!-- ================= Activities start ========================= -->
    <section class="min">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="sec-heading center">
                        <p>Trending jobs of the Week</p>
                        <h2>Find Jobs</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
                <!-- Single Tour Package -->
                <div class="col-lg-6 col-md-12">
                    <div class="tour-verticle style-2">
                        
                        <div class="tour-verticle-thumb">
                            <span class="theme-bg tv-cate"><i class="ti-car"></i></span>
                            <img src="{{asset('assets/images/clima.jpg')}}" class="img-responsive" alt="" />
                        </div>
                        
                        <div class="tour-verticle-caption">
                            <div class="tv-date"><i class="ti-calendar"></i>27 Fab</div>
                            <h4 class="tv-title"><a href="#">Installation de climatiseurt </a></h4>
                            <p>It's the 7 person trip in the green city in South Africa</p>
                            <div class="tv-price-box">
                                <a href="#" class="tv-btn btn-theme">Get Details</a>
                                <h3 class="tv-price-title">200DH</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Single Tour Package -->
                <div class="col-lg-6 col-md-12">
                    <div class="tour-verticle style-2">
                        
                        <div class="tour-verticle-thumb">
                            <span class="theme-bg tv-cate"><i class="ti-car"></i></span>
                            <img src="{{asset('assets/images/cameraman.jpg')}}" class="img-responsive" alt="" />
                        </div>
                        
                        <div class="tour-verticle-caption">
                            <div class="tv-date"><i class="ti-calendar"></i>10 Fab</div>
                            <h4 class="tv-title"><a href="#">Installation de caméras de surveillance</a></h4>
                            <p>It's the 7 person trip in the green city in South Africa</p>
                            <div class="tv-price-box">
                                <a href="#" class="tv-btn btn-theme">Get Details</a>
                                <h3 class="tv-price-title">$972</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Single Tour Package -->
                <div class="col-lg-6 col-md-12">
                    <div class="tour-verticle style-2">
                        
                        <div class="tour-verticle-thumb">
                            <span class="theme-bg tv-cate"><i class="ti-car"></i></span>
                            <img src="{{asset('assets/images/sat.png')}}" class="img-responsive" alt="" />
                        </div>
                        
                        <div class="tour-verticle-caption">
                            <div class="tv-date"><i class="ti-calendar"></i>29 Fab</div>
                            <h4 class="tv-title"><a href="#">installation satellite dish</a></h4>
                            <p>It's the 7 person trip in the green city in South Africa</p>
                            <div class="tv-price-box">
                                <a href="#" class="tv-btn btn-theme">Get Details</a>
                                <h3 class="tv-price-title">$780</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Single Tour Package -->
                <div class="col-lg-6 col-md-12">
                    <div class="tour-verticle style-2">
                        
                        <div class="tour-verticle-thumb">
                            <span class="theme-bg tv-cate"><i class="ti-car"></i></span>
                            <img src="{{asset('assets/images/metier-plombier.jpg')}}" class="img-responsive" alt="" />
                        </div>
                        
                        <div class="tour-verticle-caption">
                            <div class="tv-date"><i class="ti-calendar"></i>27 Fab</div>
                            <h4 class="tv-title"><a href="#">plombier</a></h4>
                            <p>It's the 7 person trip in the green city in South Africa</p>
                            <div class="tv-price-box">
                                <a href="#" class="tv-btn btn-theme">Get Details</a>
                                <h3 class="tv-price-title">$850</h3>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- ========================= End Activities Section ============================ -->

    
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
  
    @include('front.includes.footer')
  