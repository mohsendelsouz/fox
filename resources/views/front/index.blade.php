@extends('front.layout.layout')
@section('body')

<!-- Start Preloader -->
<div class="preloader">
    <div class="loader-wrapper">
        <div class="loader"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Header -->
<header class="foxapp-header">
    <nav class="navbar navbar-expand-lg navbar-light" id="foxapp_menu">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}">
                <img src="{{url('assets/Searchconsolesheet.png')}}" style="height: 43px; width: 248px;margin-top: 6px" class="img-fluid" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link anchor active" href="#slide">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link anchor" href="#main_features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link anchor" href="{{route('PrivacyPolicy')}}">Privacy policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link anchor" href="{{route('terms')}}">Terms and conditions</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            News
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item anchor" href="#recent_news">Recent News</a>
                            <a class="dropdown-item anchor" href="news-without-sidebar.html">News One</a>
                            <a class="dropdown-item anchor" href="news-with-sidebar.html">News Two</a>
                            <a class="dropdown-item anchor" href="news-with-sidebar-one-col.html">News Three</a>
                            <a class="dropdown-item anchor" href="news-single.html">Single News</a>
                        </div>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link anchor" href="#git_in_touch">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->

<!-- Start Header -->
<section id="slide" class="slide background-withcolor">
    <div class="content-bottom" style="margin-top: -49px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right" style="margin-top: -312px;">
                    {{-- <p class="mb-0">With us you will</p> --}}
                    <p style=" font-size: 31px;">Easy Search Console analysis</p>
                    <p>
                        <span style="font-size: 15px">Inportent data and create automatic backups from Google</span><br>
                        <span style="font-size: 15px">Search Console<sup>TM</sup> into Google Sheets<sup>TM</sup></span>
                        
                    </p>
                    <a href="#" class="btn btn-primary btn-white shadow btn-theme"><span>GET THE ADDON FOR GOOGLE SHEET</span></a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200" style="margin-top: -70px; height: 650px;">
                    {{-- <img src="assets/img/mobile-1.png" class="img-fluid d-block mx-auto" alt=""> --}}
                    <img src="{{url('assets/1.png')}}" class="img-fluid d-block mx-auto" alt="" style="position: absolute; /* top: -504px; */ transform: scale3d(1.5, 1.5, 1.5) perspective(446px) rotateY(326deg); margin-top: 160px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Header -->
<!-- Start App Price -->
<section id="prices" class="prices padding-100" style="margin-top: -110px;">
    <div class="container">
        <div class="row">
            @if (Session::has('message'))
            <span style="color: green">{{ Session::get('message') }}</span>
            @endif
            {{-- <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>App
                    <span> Price</span>
                </h3>
                <div class="space-25"></div>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                    incidit
                    labore
                    lorem ipsum amet madolor sit amet.</p>
                <div class="space-50"></div>
            </div> --}}
            <div class="col-lg-4 col-md-4 col-12">
                <div class="price-table text-center" data-aos="fade-right" data-aos-delay="400">
                    <div class="top background-fullwidth" style="background-image: url(assets/img/gray-bg.jpg);">
                        <h4>Free!</h4>
                        <p style="font-size: 12px">For SEOs working with smb websites</p>
                        <h3>
                            <span>$</span>0 <span style="color: black; font-size: 18px; margin-left: -18px;">/Forever</span>
                        </h3>
                        <h5></h5>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Up to 10,000 rows/ request of search analytics data*</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Up to 100 rows/ request of URL inspection data**</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Unlimited request with all verified Search Console properties</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Use all dimension grouping and filtering options</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Create unlimited daily and monthly automated requests</li>
                            
                        </ul>
                        <div class="space-50"></div>
                        <a href="#" class="btn btn-primary btn-white btn-theme amount30" data-toggle="modal"
                            data-target="#staticBackdrop" data-aos="fade-zoom-in"><span>Install</span></a>

                           
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <div class="price-table text-center" data-aos="fade-up" data-aos-delay="800">
                    <div class="top background-fullwidth" style="background-image: url(assets/img/gray-bg.jpg);">
                        {{-- <span class="offer">offer</span> --}}
                        <h4>Pro</h4>
                        <p style="font-size: 12px">For SEOs working with medium to large websites</p>
                        <h3 style="margin-top: -18px;">
                            <span>$</span>16<span style="color: black; font-size: 18px;">/month</span>
                        </h3>
                        <h5>billed as $190 / year</h5>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Up to 100,000 rows/ request of search analytics data*</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Up to 1,000 rows/ request of URL inspection data**</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Unlimited request with all verified Search Console properties</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Use all dimension grouping and filtering options</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Create unlimited daily and monthly automated requests</li>
                        </ul>
                        <div class="space-50"></div>
                        <a href="#" class="btn btn-primary btn-white btn-theme amount50" data-toggle="modal"
                            data-target="#staticBackdrop"><span>Get Started</span></a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="price-table text-center" data-aos="fade-left" data-aos-delay="1200">
                    <div class="top background-fullwidth" style="background-image: url(assets/img/gray-bg.jpg);">
                        <h4>Unlimited</h4>
                        <p style="font-size: 12px">For SEOs working with very large / enterprise websites</p>

                        <h3 style="margin-top: -18px;">
                            <span>$</span>41<span style="color: black; font-size: 18px;">/month</span>
                        </h3>
                        <h5>billed as $490 / year</h5>
                    </div>
                    <div class="bottom">
                        <ul>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> All available rows/ request of search analytics data*</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Up to 2,000 rows/ request of URL inspection data**</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Unlimited request with all verified Search Console properties</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Use all dimension grouping and filtering options</li>
                            <li style="text-align: left; font-size: 16px;"><span class="fa-solid fa-circle-check"></span> Create unlimited daily and monthly automated requests</li>
                        </ul>
                        <div class="space-50"></div>
                        <a href="#" class="btn btn-primary btn-white btn-theme amount80" data-toggle="modal"
                            data-target="#staticBackdrop"><span>Get Started</span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End App Price  -->

<!-- Start Why Us -->
<section id="main_features" class="why-us padding-100 background-fullwidth background-fixed "
    style="background-image: url(assets/img/gray-bg.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center" data-aos="fade-right">
                <img src="{{url('assets/2.png')}}" class="img-fluid" alt="" style="height: 640px; width: 301px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            </div>
            <div class="col-md-6" data-aos="fade-zoom-in" data-aos-delay="200">
                <h3>Featires</h3>
                <p>
                    Import your Google Search Console easily to your Google Sheet, easier and more powerful 
                </p>
                <div class="space-50"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="400">
                        <div class="why-us-icon">
                            <span class="lnr lnr-rocket"></span>
                            <p>
                                Quickly drill down into performance data by grouping by multiple dimension at the same time
                            </p>
                        </div>
                        <div class="space-25"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="600">
                        <div class="why-us-icon">
                            <span class="lnr lnr-rocket"></span>
                            <p>
                                Retrive significant more valus than what's available in the Search Console UI, without the need to export or import any files
                            </p>
                        </div>
                    </div>
                    <div class="space-25"></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="800">
                        <div class="why-us-icon">
                            <span class="lnr lnr-rocket"></span>
                            <p>
                                Pair up performance data with URL inspection results to spot indexing issues and traffic opportunities.
                            </p>
                        </div>
                        <div class="space-25"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12" data-aos="zoom-in" data-aos-delay="1000">
                        <div class="why-us-icon">
                            <span class="lnr lnr-rocket"></span>
                            <p>
                                Never lose your data by automating data extraction at daily or monthly intervals.
                            </p>
                        </div>
                        <div class="space-25"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Us -->



<!-- Start Other Features -->
{{-- <section id="other_features" class="other-features padding-100 background-withcolor">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>Other
                    <span class="white"> Awesome </span> Features
                </h3>
                <div class="space-25"></div>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                    incidit
                    labore
                    lorem ipsum amet madolor sit amet.</p>
                <div class="space-50"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="other-features-slider" data-aos="fade-up">

                    <div class="item text-center">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Creative Design</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-cog"></span>
                        <h4>Easy Login</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-cloud"></span>
                        <h4>Fast Install</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-construction"></span>
                        <h4>Data Protect</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-gift"></span>
                        <h4>High Resolution</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-database"></span>
                        <h4>Clean Code</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>
                    <div class="item text-center">
                        <span class="lnr lnr-gift"></span>
                        <h4>Quick Support</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque eos amet vel
                            voluptatibus
                            incidunt.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Other Features  -->

<!-- Start Watch Video -->
{{-- <section id="watch_video" class="watch-video padding-100">
    
    <div class="container-fluid">
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>Watch
                    <span>Video</span>
                </h3>
                <div class="space-25"></div>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                    incidit
                    labore
                    lorem ipsum amet madolor sit amet.</p>
                <div class="space-50"></div>
            </div>
            <div class="col-md-6 offset-md-3" data-aos="fade-up">
                <div class="video" style="background-image: url('assets/img/people.jpg')">
                    <img src="assets/img/mobile-4-4.png" class="img-fluid d-block mx-auto" alt="">
                    <a href="http://www.youtube.com/watch?v=XSGBVzeBUbk" data-lity></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Watch Video  -->

<!-- Start Clients Testimonial -->
{{-- <section id="testimonial" class="clients-testimonial padding-100">
    <div class="container">
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>Clients
                    <span> Testimonial</span>
                </h3>
                <div class="space-25"></div>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                    incidit
                    labore
                    lorem ipsum amet madolor sit amet.</p>
                <div class="space-50"></div>
            </div>
            <div class="col-12">
                <div class="testimonial-slider" data-aos="fade-up">
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                Completely build backend ROI whereas cross-media metrics. Collaboratively deploy
                                customer directed web-readiness via global testing procedures. Appropriately
                                reinvent distributed innovation.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                If you can design one thing you can design everything with Front. Just believe it.
                                Collaboratively repurpose performance based e-commerce without cost. It's beautiful
                                and the coding is done quickly and seamlessly.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                If you can design one thing you can design everything with Front. Just believe it.
                                Collaboratively repurpose performance based e-commerce without cost. It's beautiful
                                and the coding is done quickly and seamlessly.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                Completely build backend ROI whereas cross-media metrics. Collaboratively deploy
                                customer directed web-readiness via global testing procedures. Appropriately
                                reinvent distributed innovation.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugit dignissimos
                                nihil deleniti sunt enim cupiditate quia
                                officia suscipit est saepe atque expedita, natus numquam animi inventore harum
                                esse
                                ut.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="client-testimonial">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit fugit dignissimos
                                nihil deleniti sunt enim cupiditate quia
                                officia suscipit est saepe atque expedita, natus numquam animi inventore harum
                                esse
                                ut.
                            </p>
                        </div>
                        <div class="client-info d-flex align-items-center">
                            <figure>
                                <img src="assets/img/client.jpg" class="img-fluid" alt="">
                            </figure>
                            <div>
                                <h3>Mohamed Kamel</h3>
                                <h6>CEO - Company Name</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> --}}
<!-- End Clients Testimonial  -->



<!-- Start FAQ -->
<section id="team" id="testimonial" class="clients-testimonial padding-100">
    <div class="container">
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>Common
                    <span> FAQ</span>
                </h3>
                <div class="space-25"></div>
                
                <div class="space-50"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <!--align-items-center-->
            <div class="col-md-12 col-12" data-aos="fade-right">
                <div class="accordion" id="faqAccordion">
                    <div class="card shadow">
                        <div class="card-header" id="heading_1">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                    How do I enable the add-on?
                                </button>
                            </h5>
                        </div>

                        <div id="collapse_1" class="collapse show" aria-labelledby="heading_1"
                            data-parent="#faqAccordion">
                            <div class="card-body">
                                Once installed, the add-on will available in all your spreadsheeds via the Add-op menu, under "Search Console Sheet". To enable it for the current spreadsheed, simply click on "Open" which should open a sidebar.
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header" id="heading_2">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_2" aria-expanded="false" aria-controls="collapse_2">
                                    How do I authorize it?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_2" class="collapse" aria-labelledby="heading_2" data-parent="#faqAccordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur dicta
                                commodi, totam atque fugit ut magnam laboriosam
                                dignissimos dolorum minus quia sed distinctio in mollitia laborum sint delectus
                                accusamus!
                                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur
                                dicta
                                commodi,
                                totam atque fugit ut magnam.
                            </div>
                        </div>
                    </div>
                    <div class="card shadow">
                        <div class="card-header" id="heading_3">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_3" aria-expanded="false" aria-controls="collapse_3">
                                    Can I backup my data?
                                </button>
                            </h5>
                        </div>
                        <div id="collapse_3" class="collapse" aria-labelledby="heading_3" data-parent="#faqAccordion">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur dicta
                                commodi, totam atque fugit ut magnam laboriosam
                                dignissimos dolorum minus quia sed distinctio in mollitia laborum sint delectus
                                accusamus!
                                <br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum tenetur
                                dicta
                                commodi,
                                totam atque fugit ut magnam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-4 col-12" data-aos="fade-left" data-aos-delay="400">
                <img src="assets/img/mobile-1.png" class="img-fluid b-block mx-auto" alt="">
            </div> --}}
        </div>
    </div>
</section>
<!-- End FAQ  -->




<!-- Start Download App -->
<section id="download_app" class="download-app padding-100 pb-0 background-fullwidth background-fixed"
    style="background-image: url(assets/img/gray-bg.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12" data-aos="fade-right">
                <h2>Download our free trial App</h2>
                <p>Lorem ipsum madolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor coli
                    incidit
                    labore
                    lorem
                </p>
                <a href="#" class="btn btn-primary shadow btn-colord btn-theme" tabindex="0">
                    <i class="fab fa-apple"></i>
                    <span>Git it on
                        <br>APP STORE</span>
                </a>
                {{-- <a href="#" class="btn btn-primary shadow  btn-colord btn-theme" tabindex="0">
                    <i class="fab fa-google-play"></i>
                    <span>Git it on
                        <br>GOOGLE PLAY</span>
                </a> --}}
            </div>
            <div class="col-lg-6 col-12" data-aos="fade-left" data-aos-delay="400">
                <img src="assets/img/mobile-6.png" class="img-fluid d-block mx-auto" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Download App -->

<!-- Start  Git in touch -->
<section id="git_in_touch" class="git-in-touch padding-100">
    <div class="container">
        <div class="row">
            <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                <h3>Git
                    <span> in </span>touch
                </h3>
                <div class="space-25"></div>
                <p></p>
                <div class="space-50"></div>
            </div>
        </div>
        <form data-aos="fade-up" action="{{route('sendMail') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Subject" name="title">
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Enter Your Message" name="body"></textarea>
                        <span class="focus-border"></span>
                    </div>
                </div>
                <div class="col-12">
                    <div class="space-25"></div>
                    <button type="submit" class="btn btn-primary shadow btn-colord btn-theme"><span>Send
                            Message</span></button>
                </div>
            </div>
        </form>
        <div class="space-50"></div>
        
    </div>
</section>
<!-- End  Git in touch  -->


<!-- Start  Footer -->
<footer class="padding-100 pb-0">
    <div class="subscribe">
        <div class="container">
            <form class="subscribe-form row m-0 align-items-center">
                <div class="col-lg-9 col-md-8">
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="#" class="btn btn-primary shadow d-block btn-colord btn-theme"><span>subscribe</span></a>
                </div>
            </form>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <img src="assets/img/fox-logo.png" class="img-fluid" alt="">
                        <p>Sed pottitor lects nibh. Viamus magna justo, lacinia eget consectetur sed, convallis
                            at
                            tellus.
                            Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet,
                            consectetur
                            adipiscing
                            elit.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6>Quick Links</h6>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Services</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6>Social Media</h6>
                        <ul>
                            <li>
                                <a href="#">Facbook</a>
                            </li>
                            <li>
                                <a href="#">Instagram</a>
                            </li>
                            <li>
                                <a href="#">LinkedIn</a>
                            </li>
                            <li>
                                <a href="#">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <h6>Quick Contact</h6>
                        <ul>
                            <li>
                                <span>Phone : </span>+2 012 345 6789
                            </li>
                            <li>
                                <span>Email : </span>
                                <a href="mailto:info@yourcompany.com"></a>info@yourcompany.com
                            </li>
                            <li>
                                <span>Address : </span>8 Green Tower, Street Name New York City, USA
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-50"></div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <p>All rights reserved © <a href="#">MK</a>, 2020</p>
                </div>
                <div class="offset-md-4 col-md-4">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('terms')}}">Terms and Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('PrivacyPolicy')}}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="text-align: center">
                {{-- <h5 class="modal-title" id="staticBackdropLabel">Payment</h5> --}}
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form role="form" action="{{ route('stripePayment') }}" method="post" class="require-validation"
                    data-cc-on-file="false"
                    data-stripe-publishable-key="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI"
                    id="payment-form">
                    @csrf
                    {{-- <input type="hidden" name="token"
                        value="pk_test_51LxpoiIHIgjMjhjeZHoWny0W3mN57En9DPe05u2bRATHi4v5EtPuFA5b1HExSwirurpPLS5HkED8JOhnhPOmbIq000Aokh1XgI">
                    --}}
                    <div class='form-row '>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Name</label> <input class='form-control' name="name" size='70'
                                type='text' placeholder="Your Name Please">
                        </div>
                    </div>
                    <div class='form-row '>
                        <div class='col-xs-12 form-group required'>
                            <label class='control-label'>Amount</label>
                            <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
                            <script>
                                $(document).ready(function(){
                        $('.amount30').on('click',function(){
                            let amount = 0
                            $('#amount').html("<input class='form-control' name='amount' value='"+amount+"' size='70' type='text'>")
                        })
                        $('.amount50').on('click',function(){
                            let amount = 16
                            $('#amount').html("<input class='form-control' name='amount' value='"+amount+"' size='70' type='text'>")
                        })
                        $('.amount80').on('click',function(){
                            let amount = 41
                            $('#amount').html("<input class='form-control' name='amount' value='"+amount+"' size='70' type='text'>")
                        })
                    })
                            </script>
                            <span id="amount"></span>

                        </div>
                    </div>

                    <div class='form-row '>
                        <div class='col-xs-12 form-group  required'>
                            <label class='control-label'>Card Number</label> <input autocomplete='off'
                                class='form-control card-number' size='70' type='text' placeholder="Your Card Number">
                        </div>
                    </div>

                    <div class='form-row row'>
                        <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> <input autocomplete='off'
                                class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> <input
                                class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                        </div>
                        <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> <input
                                class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-xs-12" style="margin-left: 168px;">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- End  Footer  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
  
    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/
    
    var $form = $(".require-validation");
     
    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
    
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });
     
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    
    });
      
    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];
                 
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
</script>


@endsection