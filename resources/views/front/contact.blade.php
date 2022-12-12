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

<div class="" style="margin-top: -50px;">
    <header class="foxapp-header">
        <nav class="navbar navbar-expand-lg navbar-light" id="foxapp_menu" style="background-color: #0fdbc6;">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{url('assets/Searchconsolesheet.png')}}" style="height: 43px; width: 248px;margin-top: 6px"
                        class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                    aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link anchor " href="{{route('index')}}">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="{{route('index')}}">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor " href="{{route('PrivacyPolicy')}}">Privacy policy</a>
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
                            <a class="nav-link anchor active" href="{{route('contact')}}">Contact us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</div>
<!-- End Header -->

<!-- Start  Git in touch -->
<section id="git_in_touch" class="git-in-touch padding-100">
    <div class="container"  style="margin-top: 82px;">
        <div class="row">
            @if (Session::has('message'))
            <span style="color: green">{{ Session::get('message') }}</span>
            @endif
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

    <div class="space-50"></div>
    <div class="footer-widgets" style="margin-top: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="widget">
                        <img src="{{url('assets/Searchconsolesheet.png')}}" style="height: 43px; width: 248px;margin-top: -8px;" class="img-fluid" alt="">
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



@endsection