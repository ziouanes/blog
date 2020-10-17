<!DOCTYPE html>
<html >
	

<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Travlio - Tour & Travel Agency HTML Template</title>
		
        <!-- All Plugins Css -->
        <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

		{{-- <link rel="stylesheet" href="http://yoursite.com/themify-icons.css""> --}}
	


        <!-- Custom CSS -->
        <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">
		
		<!-- Custom Color Option -->
		<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet">
		
    </head>
	
    <body class="orange-skin">
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="topbar-head">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="topbar-wrap">
								
								<div class="topbar-left">
									<ul class="tp-list">
										<li><a href="#"><i class="ti-facebook"></i></a></li>
										<li><a href="#"><i class="ti-twitter"></i></a></li>
										<li><a href="#"><i class="ti-instagram"></i></a></li>
									</ul>
									<ul class="tp-list ml-2 nbr">
										<li><a href="#">support@bookly.com</a></li>
									</ul>
								</div>
								
								<div class="topbar-right">
									<ul class="tp-list">
										<li><a href="#">(41) 123 548 548</a></li>
									</ul >
									<ul class="tp-list ml-2">
										@if(Route::currentRouteName())

										<li><a href="{{ route(request()->route()->getName(), 'en')}}" >En</a></li>
										<li><a href="{{ route(request()->route()->getName(), 'fr')}}" >Fr</a></li>
										@else
										<li><a href="/en" >En</a></li>
										<li><a href="/fr" >Fr</a></li>
										
									@endif
				
				
				
									</ul>
									
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header header-light">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="{{ url('/') }}">
							<img src="{{asset('assets/images/logo2.png')}}"  class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">

								
								<li>
									{{-- <a href="{{ route('layouts.site') }}">Home</a>                                  --}}
								</li>
								
								<li>
									{{-- <a href="{{ route('layouts.tourGrid',app()->getLocale() )}}">Tours</a>                                  --}}
								</li>
								
								<li>
									<a href="#">Emobilier</a>                                 
								</li>

								<li>
									<a href="#">Jobs</a>                                 
								</li>

							
								
									
								
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								<li>

									{{-- <a href="{{ route('contact',app()->getLocale() )}}">Contact Us</a>    --}}
									                              
								</li>							
								
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			