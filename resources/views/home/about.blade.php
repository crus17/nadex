
<!doctype html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<meta name="viewport" content="width=1366">-->
        <title>{{$settings->site_name}} | {{$settings->site_title}}</title>
        <link rel="icon" href="{{ asset ('home/images/favicon.png')}}" type="image/png" sizes="32x32">
        
        <!--Google font-->
        <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;Ubuntu:400,500,700" rel="stylesheet">
        
        <!-- Libraries CSS Files -->
        <!--<link href="{{ asset ('home/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">-->
        <!--{{ asset ('home/')}}-->
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/magnific-popup/magnific-popup.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/owl-carousel/owl.carousel.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/animate.css')}}" />
        <!--<link rel="stylesheet" type="text/css" href="{{ asset ('home/css/font-awesome.css')}}" />-->
        <link href="{{ asset ('temp/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/ionicons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/shop.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/revslider/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset ('home/css/custom.css')}}">
    
        <!-- Main Stylesheet File -->
        <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
        <link rel="stylesheet" href="{{ asset ('home/css/style-customizer.css')}}" />
        
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            {{!! $settings->tawk_to !!}}
        </script>
    
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113778816-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
        
            gtag('config', 'UA-113778816-1');
        </script>
    </head>

<body>

    <div id="loading">
        <div id="loading-center">
            <img src="{{ asset('home/images/loader.gif') }}" alt="loder">
        </div>
    </div>
    
    
    <header class="transparent">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="topbar-left">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-envelope-o text-blue"></i>
                                    {{$settings->contact_email}}
                            </ul>
                        </div>
                    </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="topbar-right text-right">
                <ul class="list-inline">
                
                    <li class="list-inline-item"><a href="login/"><i class="fa fa-android"></i>Start Invest</a></li>
                </ul>
                </div>
                </div>
                </div>
             </div>
        </div>
        <div class="iq-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="\"><img id="logo_img" id="logo_img" class="img-fluid" src="{{ asset('home/images/logo-white.png') }}" alt="logo"></a>
                        </div>
                        <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i class="fa fa-reorder"></i> Menu</a>
                            <ul class="menu text-right">
                                <li><a href="\">HOME</a></li>
                                <li><a href="insight">Insight</a></li>
                                <li><a href="timeline">Timeline</a></li>
                                <li><a href="pricing">Packages</a></li>
                                <li><a href="login">Login/Join</a></li>
                                <li><a class="active" href="javascript:void(0)">Company</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="contact">Contact Us</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="clearfix"></div>

    <section class="iq-bg iq-bg-fixed iq-over-black-70 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url({{ asset('home/images/bg/bg-2.jpg')}}); background-position: center center;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="\">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </section>

    <div class="main-content">

    <div class="overview-block-pt iq-feature4 iq-bg iq-over-black-80 jarallax particles-bg" style="background-image: url({{ asset('home/images/bg/bg-7.jpg') }}); background-position: center center;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading-title iq-font-white">
                        <h3 class="title iq-tw-5 iq-mb-20 iq-font-white">About Us</h3>
                        <p>Trade Finance is in our DNA. For more than 10 years, {{$settings->site_name}} has helped clients make trade payments, access liquidity, and manage risk. We connect counterparties with market-leading Traditional Trade for CFDs on shares, commodities, forex, and indices. Our institutional strength, practical expertise, comprehensive technology, and unparalleled network enable us to deliver a powerful global trading investment platform, when and where our clients need it.</p>
                        <p>{{$settings->site_name}} offers around-the-clock support and deliver world-class solutions to Clients. Our sophisticated, web-based trading management platforms, allowing clients to manage trade activities from purchase order to payment. {{$settings->site_name}} providing anytime/anywhere access, creating visibility, speeding the cycle and reducing costs, all while streamlining the trade process.</p>
                        <p>We are dedicated to improving the services we offer to our clients, as well as building the highest level of trust which allows them to confidently trade with us.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10">
                    <img class="img-fluid" src="{{ asset('home/images/about-us/cert.png') }}" alt="#">
                </div>
                <div class="col-sm-1"></div>
            </div>
            <br>
        </div>
    </div>   
            
    
    </div>

    <div class="clearfix"></div>

    <footer class="iq-footer">
            <div class="footer-top iq-bg iq-bg-fixed iq-over-black-80" style="background-image:url({{ asset('home/images/bg/bg-13.jpg') }}); ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-60">
                            <div class="logo">
                            <img id="logo_img_2" class="img-fluid" src="{{ asset('home/images/logo-white.png') }}" alt="# ">
                            <div class="iq-font-white iq-mt-15 ">{{$settings->site_name}} bot is a trading platform that pays his investors 100% daily for 30days. 
                                We are here to help you trade and lead you to financial freedom. The bot has been built with the latest artificial intelligence technology in the industry.
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 iq-mtb-60 footer-menu">
                                <h5 class="small-title iq-tw-5 iq-font-white">Menu</h5>
                                <ul class="iq-pl-0">
                                    <li><a href="\">Home</a></li>
                                    <li><a href="insight">Insight</a></li>
                                    <li><a href="timeline">Timeline</a></li>
                                    <li><a href="about">About us</a></li>
                                    <li><a href="#">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 iq-contact iq-mtb-60">
                            <h5 class="small-title iq-tw-5 iq-font-white">Contact us</h5>
                            <div class="iq-mb-30">
                                <div class="blog"><i class="ion-ios-telephone-outline"></i>
                                    <div class="content ">
                                    <div class="iq-tw-6 title ">Phone</div> {{$settings->contact_number}}</div>
                                </div>
                            </div>
                            <div class="iq-mb-30">
                                <div class="blog "><i class="ion-ios-email-outline"></i>
                                    <div class="content ">
                                        <div class="iq-tw-6 title ">Mail</div> 
                                        {{$settings->contact_email}}
                                        {{$settings->contact_email_2}}
                                    </div>
                                 </div>
                            </div>
                            <div class="blog"><i class="ion-ios-location-outline"></i>
                                <div class="content ">
                                    <div class="iq-tw-6 title ">Address</div> 103 Bedford street suite 102, Hamilton 
                                    Montana, 59840, USA
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 iq-mb-60">
                            <div class="call-back">
                                <h5 class="small-title iq-tw-5 iq-font-white">Request a Call Back</h5>
                                <form>
                                    <div class="form-group iq-mb-20">
                                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group iq-mb-20">
                                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group iq-mb-20">
                                        <input type="text" class="form-control" id="exampleInputsubject" placeholder="Subject">
                                    </div>
                                    <a class="button" href="javascript:void(0)">Submit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom iq-ptb-20 ">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="iq-copyright iq-mt-10 iq-font-white">Copyright <span id="copyright"> <script data-cfasync="false" src="{{ asset('home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script data-cfasync="false" src="../../../home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="javascript:void(0)">{{$settings->site_name}}</a> All Rights Reserved </div>
                    </div>
                    <div class="col-sm-6">
                        <ul class="iq-media-blog ">
                            <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                            <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                            <li><a href="# "><i class="fa fa-google "></i></a></li>
                            <li><a href="# "><i class="fa fa-github "></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </footer>


    <div id="back-to-top">
        <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
    </div>
    
    <script src="{{ asset('home/js/jquery-min.js') }}"></script>
        
    <script src="{{ asset('home/js/popper.min.js') }}"></script>
    
    <script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('home/js/widget.js') }}"></script>
    
    <script src="{{ asset('home/js/all-plugins.js') }}"></script>
    
    <script src="{{ asset('home/js/particles.js') }}"></script>
    
    <script src="{{ asset('home/js/style-customizer.js') }}"></script>
    
    <script src="{{ asset('home/js/custom.js') }}"></script>    

    
        
</body>

</html>