
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="viewport" content="width<?php echo e($settings->site_title); ?>=1366">-->
    <title><?php echo e($settings->site_name); ?> - <?php echo e($settings->site_title); ?></title>
    <link rel="icon" href="<?php echo e(asset ('home/imgages/favicon.png')); ?>" type="image/png" sizes="32x32">
    
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans&amp;Ubuntu:400,500,700" rel="stylesheet">
     
    <!-- Libraries CSS Files -->
    <!--<link href="<?php echo e(asset ('home/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">-->
    <!--<?php echo e(asset ('home/')); ?>-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/magnific-popup/magnific-popup.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/owl-carousel/owl.carousel.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/animate.css')); ?>" />
    <!--<link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/font-awesome.css')); ?>" />-->
    <link href="<?php echo e(asset ('temp/lib/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/flaticon.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/shop.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/revslider/css/settings.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/responsive.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset ('home/css/custom.css')); ?>">

    <!-- Main Stylesheet File -->
    <link rel="stylesheet" href="javascript:void(0)" data-style="styles">
    <link rel="stylesheet" href="<?php echo e(asset ('home/css/style-customizer.css')); ?>" />
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        {<?php echo $settings->tawk_to; ?>}
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
        <img src="<?php echo e(asset('home/images/loader.gif')); ?>" alt="loder">
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
                            <?php echo e($settings->contact_email); ?>

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
                        <a href="\"><img id="logo_img" id="logo_img" class="img-fluid" src="<?php echo e(asset('home/images/logo-white.png')); ?>" alt="logo"></a>
                    </div>
                    <nav> <a id="resp-menu" class="responsive-menu" href="javascript:void(0)"><i class="fa fa-reorder"></i> Menu</a>
                        <ul class="menu text-right">
                            <li><a href="\">HOME</a></li>
                            <li><a class="active" href="#">Insight</a></li>
                            <li><a href="timeline">Timeline</a></li>
                            <li><a href="pricing">Packages</a></li>
                            <li><a href="login">Login/Join</a></li>
                            <li><a href="javascript:void(0)">Company</a>
                                <ul class="sub-menu">
                                    <li><a href="about">About Us</a></li>
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

<section class="iq-bg iq-bg-fixed iq-over-black-70 jarallax iq-breadcrumb text-center iq-font-white" style="background-image: url(<?php echo e(asset('home/images/bg/bg-2.jpg')); ?>); background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="heading-title iq-mb-25">
                    <h3 class="title text-uppercase iq-font-white iq-tw-6">Insight</h3>
                </div>
                <p><?php echo e($settings->site_name); ?> is a trading platform that pays his investors 100% daily for 30days. We are here to help you trade and lead you to financial freedom.</p>
            </div>
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="\">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Insight</li>
        </ol>
    </nav>
</section>


<div class="main-content">

<div class="overview-block-ptb iq-feature4 iq-additional">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="heading-title iq-mb-0">
<h3 class="title iq-tw-5 iq-mb-20">How it Works</h3>
<p class="iq-mb-30">Here are 3 Easy Steps to start Investing. We have design a very user friendly bot to get you investing and making some good returns for yourself. Read through the lines below. </p>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-4 iq-mtb-20">
<div class="iq-Work-box text-center stap-up">
<div class="Work-icon">
<div class="step">1</div>
<i aria-hidden="true" class="ion-ios-compose-outline"></i>
</div>
<h5 class="iq-tw-5 iq-mt-20 iq-font-yellow">Fill Up Your Form</h5>
<p>The first step is to signup on the platform and create a quick account within minutes.</p>
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-4 iq-mtb-20 re-mt-30">
<div class="iq-Work-box text-center stap-dowen">
<div class="Work-icon">
<div class="step">2</div>
<i aria-hidden="true" class="ion-ios-paper-outline"></i>
</div>
<h5 class="iq-tw-5 iq-mt-20 iq-font-yellow">Create Investment</h5>
<p>Once you have created an account, simple initiate an investment to continue. This is a quick process.</p>
</div>
</div>
<div class="col-sm-12 col-md-4 col-lg-4 iq-mtb-20 re-mt-30">
<div class="iq-Work-box text-center">
<div class="Work-icon">
<div class="step">3</div>
<i aria-hidden="true" class="ion-ios-cart-outline"></i>
</div>
<h5 class="iq-tw-5 iq-mt-20 iq-font-yellow">Make Profits</h5>
<p>As soon as you have created an investment, you will watch your profits start growing rapidly.</p>
</div>
</div>
</div>
</div>
</div>


<div class="overview-block-pt iq-feature4 iq-bg iq-over-black-80 jarallax particles-bg" style="background-image: url(<?php echo e(asset('home/images/bg/bg-7.jpg')); ?>); background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title iq-font-white">
                    <h3 class="title iq-tw-5 iq-mb-20 iq-font-white">Profit Growth Schedule</h3>
                    <p>Our System is designed to trade with your coin and give you good returns on the long run. <?php echo e($settings->site_name); ?>is assured to pay his investors 100% daily for 30days. We are here to help you trade and lead you to financial freedom. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <img class="img-fluid" src="<?php echo e(asset('home/images/about-us/chart.png')); ?>" alt="#">
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
</div>





<section class="overview-block-ptb">
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="heading-title">
<h3 class="title iq-tw-5 iq-mb-20">Price Data</h3>
<p>We provide a live coin price data to ease work for all our clients. Check below </p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<script data-cfasync="false" src="<?php echo e(asset('home/js/email-decode.min.js')); ?>"></script><script data-cfasync="false" src="<?php echo e(asset('home/js/email-decode.min.js')); ?>"></script><script>
                        baseUrl = "https://widgets.cryptocompare.com/";
                        var scripts = document.getElementsByTagName("script");
                        var embedder = scripts[scripts.length - 1];
                        (function() {
                            var appName = encodeURIComponent(window.location.hostname);
                            if (appName == "") { appName = "local"; }
                            var s = document.createElement("script");
                            s.type = "text/javascript";
                            s.async = true;
                            var theUrl = baseUrl + 'serve/v1/coin/list?fsym=BTC&tsyms=USD,EUR,CNY,GBP,GOLD,JPY,RUB,SGD';
                            s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
                            embedder.parentNode.appendChild(s);
                        })();
                        </script>
</div>
<div class="col-lg-6">
<div class="heading-left iq-r-mt-40">
<h3 class="title iq-tw-5">Cryptocurrency Calculator</h3>
<p>Feel free to use our free tool to calculate the conversion rate of various coins.</p>
</div>
<div class="calculator iq-mtb-15">
<script src="https://www.cryptonator.com/ui/js/widget/calc_widget.js"></script>
</div>
<a class="button pull-right" href="javascript:void(0)">buy now</a>
</div>
</div>
</div>
</section>


 <div class="overview-block-ptb3 iq-bg iq-over-black-80 jarallax" style="background-image: url(<?php echo e(asset('home/images/bg/bg-5.jpg')); ?>); background-position: center center;">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-6 col-xs-12 iq-mtb-20">
<div class="counter"><i class="ion-ios-monitor-outline iq-font-yellow" aria-hidden="true"></i>
<div class="right text-left">
<span class="timer iq-font-white" data-to="5" data-speed="10000">5</span>
<label class="iq-font-white">Servers</label>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 iq-mtb-20">
<div class="counter"> <i class="ion-ios-paper-outline iq-font-yellow" aria-hidden="true"></i>
<div class="right text-left">
<span class="timer iq-font-white" data-to="25" data-speed="10000">25</span>
<label class="iq-font-white">AWARDS</label>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 iq-mtb-20">
<div class="counter"> <i class="ion-ios-person-outline iq-font-yellow" aria-hidden="true"></i>
<div class="right text-left">
<span class="timer iq-font-white" data-to="3120" data-speed="10000">3120</span>
<label class="iq-font-white">CLIENTS</label>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6 col-xs-12 iq-mtb-20">
<div class="counter"> <i class="ion-ios-star-outline iq-font-yellow" aria-hidden="true"></i>
<div class="right text-left">
<span class="timer iq-font-white" data-to="1620" data-speed="10000">1620</span>
<label class="iq-font-white">RATES</label>
</div>
</div>
</div>
</div>
</div>
</div>
    
    <div class="iq-our-clients particles-bg white-bg iq-ptb-40">
        <canvas id="canvas"></canvas>
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 col-md-12 ">
                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="false" data-items="5" data-items-laptop="4" data-items-tab="3" data-items-mobile="2" data-items-mobile-sm="1" data-margin="30">
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo2.png')); ?>" alt="#"></a></div>
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo3.png')); ?>" alt="#"></a></div>
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo6.jpg')); ?>" alt="#"></a></div>
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo2.png')); ?>" alt="#"></a></div>
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo3.png')); ?>" alt="#"></a></div>
                        <div class="item"> <a href="#"><img class="img-fluid" src="<?php echo e(asset('home/images/clients/white/logo6.jpg')); ?>" alt="#"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<footer class="iq-footer">
    <div class="footer-top iq-bg iq-bg-fixed iq-over-black-80" style="background-image:url(<?php echo e(asset('home/images/bg/bg-13.jpg')); ?>); ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 iq-mtb-60">
                    <div class="logo">
                    <img id="logo_img_2" class="img-fluid" src="<?php echo e(asset('home/images/logo-white.png')); ?>" alt="# ">
                    <div class="iq-font-white iq-mt-15 "><?php echo e($settings->site_name); ?> is a trading platform that pays his investors 100% daily for 30days. 
                        We are here to help you trade and lead you to financial freedom. The bot has been built with the latest artificial intelligence technology in the industry.
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 iq-mtb-60 footer-menu">
                        <h5 class="small-title iq-tw-5 iq-font-white">Menu</h5>
                        <ul class="iq-pl-0">
                            <li><a href="\">Home</a></li>
                            <li><a class="active" href="#">Insight</a></li>
                            <li><a href="timeline">Timeline</a></li>
                            <li><a href="about">About us</a></li>
                            <li><a href="contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                <div class="col-lg-3 col-md-6 col-sm-12 iq-contact iq-mtb-60">
                    <h5 class="small-title iq-tw-5 iq-font-white">Contact us</h5>
                    <div class="iq-mb-30">
                        <div class="blog"><i class="ion-ios-telephone-outline"></i>
                            <div class="content ">
                            <div class="iq-tw-6 title ">Phone</div><?php echo e($settings->contact_number); ?></div>
                        </div>
                    </div>
                    <div class="iq-mb-30">
                        <div class="blog "><i class="ion-ios-email-outline"></i>
                            <div class="content ">
                                <div class="iq-tw-6 title ">Mail</div> 
                                <?php echo e($settings->contact_email); ?>

                                <?php echo e($settings->contact_email_2); ?>

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
                <div class="iq-copyright iq-mt-10 iq-font-white">Copyright <span id="copyright"> <script data-cfasync="false" src="<?php echo e(asset('home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')); ?>"></script><script data-cfasync="false" src="../../../home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="javascript:void(0)"><?php echo e($settings->site_name); ?></a> All Rights Reserved </div>
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

    <script src="<?php echo e(asset('home/js/jquery-min.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/widget.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/all-plugins.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/particles.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/style-customizer.js')); ?>"></script>
    <script src="<?php echo e(asset('home/js/custom.js')); ?>"></script>

    
</body>

</html>