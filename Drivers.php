<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Door to Door Delivery</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".delete").click(function() {
                $($(this).attr("data-hide")).hide();
            });
        });
    </script>
    <style>
        .card-body {

            background-color: #ffd000;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/img1.png" alt=""></a>
                        </div>
                        <div class="top-contact-info d-flex align-items-center">
                            <h4>
                                <?php session_start();
                                if (isset($_SESSION["username"])) {
                                    echo "Welcome " . $_SESSION['username'] . " !..";
                                } ?>
                            </h4>
                        </div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="D2d, KEC nagar, Near kongu engineering college, Perundurai, Erode"><img src="img/core-img/placeholder.png" alt=""> <span>D2d, KEC nagar, Erode.</span></a>
                            <a href="mailto:techsquadkec@gmail.com" data-toggle="tooltip" data-placement="bottom" title="techsquadkec@gmail.com"><img src="img/core-img/message.png" alt="">
                                <span>techsquadkec@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>

                                    <li><a href="Drivers.php">Transporter</a></li>

                                    <li><a href="customer.php">Customer</a></li>
                                    <li><a href="#contact">Contact Us</a></li>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <?php
                            if (isset($_SESSION["username"])) {
                                echo "<a href='../registeration-login-system-master/logout.php'><img src='img/core-img/call3.png' alt=''> Logout</a>";
                            } else {
                                echo "<a href='../registeration-login-system-master/registration.php'><img src='img/core-img/call3.png' alt=''> Signup</a> / <a href='../registeration-login-system-master/login.php'>Login</a>";
                            } ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Driver</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Driver</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Services Area Start ###### -->
    <section class="services-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2 id="demo">DRIVE WITH DOOR TO DOOR</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-profits"></i>
                        </div>
                        <div class="text">
                            <h5>SAFETY</h5>
                            <p>Safety is the top priority at DOOR TO DOOR. While our drivers are expected to follow
                                traffic laws and drive safely, they can also feel safer about practicing social
                                distancing by driving alone, and having contactless-delivery of packages</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-money-1"></i>
                        </div>
                        <div class="text">
                            <h5>GET FIT
                            </h5>
                            <p>Drivers with DOOR TO DOOR have an excellent opportunity to walk and lift packages and get
                                cardio by staying active delivering.</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-coin"></i>
                        </div>
                        <div class="text">
                            <h5>DRIVERS FOR DTD</h5>
                            <p>Must be 18 years of age or over<br>
                                should own Valid driving licences<br>
                                should own Reliable vehicle<br>
                                should own Smatphone<br>
                                Drivers should not be filed by any criminal cases</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-smartphone-1"></i>
                        </div>
                        <div class="text">
                            <h5>Freedom</h5>
                            <p>DOOR TO DOOR drivers have freedom and can feel like their own boss.

                                Other driving jobs leave drivers at the mercy of their passengers to dictate music or
                                air conditioning preferences. Not with DRIVE TO DRIVE. Drive with your comfort and
                                freedom in mind!</p>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-diamond"></i>
                        </div>
                        <div class="text">
                            <h5>BE A PROFESSIONALIST</h5>
                            <p>should inform DOOR TO DOOR as soon as goods are delivered to the customer </p><br>
                            <p>should maintain timing also account for safety </p><br>
                            <p>should be polite to the customers </p>
                            <p>a good sense of direction ,Familiarity with area </p><br>
                        </div>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-service-area d-flex mb-100">
                        <div class="icon">
                            <i class="icon-piggy-bank"></i>
                        </div>
                        <div class="text">
                            <h5>DELIVERY</h5>
                            <p>Drivers often resort to dangerously juggling up to three phone apps while driving in
                                order to scan packages, optimize routes, and navigate to the destination. We will not
                                only use the best scanning and route optimizing companies in the industry but also allow
                                drivers to manage and record their day to day activities to make life easier.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Services Area End ###### -->

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area d-flex flex-wrap">
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>

                    <h2>be our partner</h2>
                </div>
                <h6>drive with DOOR TO DOOR and enjoy delivering goods to make our customer happy</h6>
                <a href="#demo" class="btn credit-btn btn-2 box-shadow">Read More</a>
            </div>
        </div>
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/ship.png);">
        </div>
    </section>
    <!-- ##### Special Feature Area End ###### -->

    <!-- ##### Special Feature Area Start ###### -->
    <section class="special-feature-area style-2 d-flex flex-wrap">
        <!-- Special Feature Thumbnail -->
        <div class="special-feature-thumbnail bg-img jarallax" style="background-image: url(img/bg-img/ship2.jpg);">
        </div>
        <!-- Special Feature Content -->
        <div class="special-feature-content section-padding-100">
            <div class="feature-text">
                <!-- Section Heading -->
                <div class="section-heading white mb-50">
                    <div class="line"></div>

                    <h2>HURRY UP!!!</h2>
                </div>
                <h6>need a job why waiting ?register with door to door and join us a hand</h6>

            </div>
        </div>
    </section>
    <section class="cta-2-area wow fadeInUp" data-wow-delay="100ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>register with Door To Door </h4>
                        </div>
                        <div class="cta-btn">
                            <a href="driverfront.html" class="btn credit-btn box-shadow">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Special Feature Area End ####-->


    <!-- ##### FAQ Area Start ###### -->
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">RECENT ORDERS </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php
                        include_once("config.php");
                        $sql = "SELECT * from customerdb ORDER BY cid DESC";
                        $resultset = mysqli_query($con, $sql) or die("database error:" . mysqli_error($con));
                        $i = 0;
                        while ($record = mysqli_fetch_assoc($resultset)) {
                            $i++; ?>
                            <div class="col-md-6">
                                <div class="card card-<?php echo $i ?>">
                                    <img class="card-img-top w-100 rounded" height=325px width=510px src="https://doortodoor.gq/<?php echo $record['image'] ?>" style="height: 300px;">
                                    <div class="card-body info">
                                        <div class="title">
                                            <h5>Customer details</h5>
                                        </div>
                                        <table class="table table-borderless">
                                            <tr>
                                                <td>
                                                    <h6>Customer ID</h6>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <?php echo $record['cid']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Customer Name</h6>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <?php echo $record['cfname']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Customer Mail</h6>
                                                </td>
                                                <td>:</td>
                                                <td>
                                                    <?php echo $record['mail']; ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="title">
                                            <h5>delivery details</h5>
                                        </div>
                                        <h4>From address</h4>
                                        <p>
                                            <?php echo $record['ca1']; ?><br>
                                            <?php echo $record['ca3']; ?><br>
                                            <?php echo $record['ca4']; ?><br>
                                            <?php echo $record['ca5']; ?>
                                        </p>
                                        <h4>To address</h4>
                                        <p>
                                            <?php echo $record['ra1']; ?><br>
                                            <?php echo $record['ra3']; ?><br>
                                            <?php echo $record['ra4']; ?><br>
                                            <?php echo $record['ra5']; ?>
                                        </p>
                                        <form method="post">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon2">Enter your charge</span>
                                                </div>
                                                <input type="text" id="num" class="form-control" aria-label="Recipient's username" name="charge" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">&#8377</span>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer" style=" background-color:#ffd000;">
                                        <input type="hidden" name="cid" value="<?php echo $record['cid'] ?>" />
                                        <input type="submit" class="btn credit-btn btn-2 box-shadow" value="SEND" name="accept" id="send" />
                                        <button type="button" class="btn credit-btn btn-2 box-shadow  delete" data-hide="<?php echo ".card-$i" ?>">Decline</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="credit-faq-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- FAQ Area -->
                <div class="col-12 col-lg-6">

                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">what is logistic
                                    management?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Logistics management is a function where a company usually consisting of various
                                    shipping and distribution professionals provide services to analyze a company’s
                                    supply chain, offer carrier and service options, and provide continued management of
                                    all or some areas of a customer’s transportation needs. </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">I'm a small
                                    start-up can Door to Door support me?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Yes, we love working with small and emerging companies. Door to Door provides the
                                    expertise and support to help your company scale. </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">WHAT
                                    TECHNOLOGY CAN Door to Door PROVIDE US?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>We offer top-notch technology solutions to handle your freight, small parcel, and
                                    E-commerce needs. Each system gives you full visibility and the tools to best manage
                                    your shipping. Request a demo so we can show you how easy it is </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Area -->
                <div class="col-12 col-lg-6">

                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I ALREADY HAVE
                                    STRONG SERVICE PROVIDERS DOOR TO DOOR STILL HELP ME?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a></h6>
                            <div id="collapseFour" class="accordion-content collapse">
                                <p>Yes, not only do we offer the services of our quality partners, but we can help
                                    manage your existing transportation network. At times, we may offer to blend in
                                    alternative options if beneficial.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseFive" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">DOES IT COST
                                    ANYTHING TO DO A FULL ANALYSIS OF OUR SUPPLY CHAIN SERVICES?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseFive" class="accordion-content collapse">
                                <p>No, we do not charge for our initial analysis. There is absolutely nothing to lose by
                                    having our expert logistics professionals review your shipping and distribution
                                    spend and profile. In most cases we are compensated by our providers should you
                                    utilize our services</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseSix" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">WHAT TECHNOLOGY
                                    CAN Door to Door PROVIDE US?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                            </h6>
                            <div id="collapseSix" class="accordion-content collapse">
                                <p>We offer top-notch technology solutions to handle your freight, small parcel, and
                                    E-commerce needs. Each system gives you full visibility and the tools to best manage
                                    your shipping. Request a demo so we can show you how easy it is </p>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container" style="color: whitesmoke;">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="row" id="contact">
                <div class="col-md-6 col-xl-4">
                    <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
                        <h5 class="widget-tiltle" id="CONTACT" style="color: orange">Contact details</h5>
                        <p style="color: whitesmoke;">By subscribing to our mailing list you will always be update with
                            the latest news from
                            us.
                        </p>
                        <div class="media">
                            <i><img src="img/core-img/location.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Address</h6>
                                <a>D2d, KEC Nagar,vNear Kongu Engineering college<br>
                                    Perundurai,Erode (dist.),TamilNadu, India</a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Have any questions?</h6>
                                <a href="mailto:techsquadkec@gmail.com" style="color: whitesmoke;">d2d.queries@gmail.com</a>
                            </div>
                        </div>
                        <div class="media">
                            <i> <img src="img/core-img/call.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Call us & Hire us</h6>
                                <a href="tel:+91 7402410785" style="color: whitesmoke;"> +91 7402410785</a>
                            </div>
                        </div>
                        <div class="media">
                            <i><img src="img/core-img/message2.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Whatsapp</h6>
                                <a href="fax:911889047521432" style="color: whitesmoke;">+91 9999888776</a>
                            </div>
                        </div>


                        <!--# start of that icon# -->
                        <br><br>
                        <div class="span6 widget-span widget-type-cell footer-listing-content" data-widget-type="cell" data-x="6" data-w="6">

                            <div class="row-fluid-wrapper row-depth-2 row-number-6 ">
                                <div class="row-fluid ">
                                    <div class="span12 widget-span widget-type-custom_widget goo_mob" data-widget-type="custom_widget" data-x="0" data-w="12">
                                        <div id="hs_cos_wrapper_module_1559304490995382" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-linked_image" data-hs-cos-general-type="widget" data-hs-cos-type="module">

                                            <span id="hs_cos_wrapper_module_1559304490995382_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image" data-hs-cos-general-type="widget" data-hs-cos-type="linked_image"><a href="https://itunes.apple.com/in/app/lalamove-india/id1445657185?mt=8" target="_blank" id="hs-link-module_1559304490995382_" style="border-width:0px;border:0px;"><img src="https://www.lalamove.com/hubfs/Lalamove%20Jan%202019/images/footer/app-store.svg" class="hs-image-widget " width="161" height="57" alt="app-store" title="app-store"></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--#  of that icon# -->
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="single-widget twitter-widget" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="widget-tiltle" style="color: orange">Customer Ratings</h5>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6><a href="#" style="color: orange">
                                        <p>@Jeff Bezos,
                                    </a>1hr ago</p>
                                </h6>
                                <span><b>One of the best delivery services i have ever met. Its a great idea I think
                                        before 2025, this company would become a huge success. </span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6><a href="#" style="color: orange">
                                        <p>@Ratan Tata,
                                    </a>3hr ago</p>
                                </h6>
                                <b><span>I really loved their service. You won't be paranoid or anxious because you'll
                                        get the progress and update of your package. From delivery to delivery. They
                                        have approachable staff, too!.</span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6><a href="#" style="color: orange">
                                        <p>@Elon Musk,
                                    </a>19hrs ago</p>
                                </h6>
                                <b><span>Great service. The parcel was collected and delivered well within the
                                        timescales and the tracking made it easy to follow. </span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6><a href="#" style="color: orange">
                                        <p>@sundar pitchai,
                                    </a>2days ago</p>
                                </h6>
                                <b><span>Man picked up a parcel and delivered my parcel all in one, well-coordinated and
                                        excellent service. Delivery was on time also. Well done. </span></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">

                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title" style="color: orange">Pages</h5>
                        <!-- Nav -->

                        <ul>
                            <li><a style="color:burlywood; font-size: medium;" href="#">Homepage</a></li>
                            <li><a style="color:burlywood; font-size: medium;" href="#">About Us</a></li>
                            <li><a style="color:burlywood; font-size: medium;" href="#">Deliver</a></li>
                            <li><a style="color:burlywood; font-size: medium;" href="#">Carrier</a></li>
                            <li><a style="color:burlywood; font-size: medium;" href="#">Contacts</a></li>
                    </div>
                    <div>
                        <img src=img/bg-img/sum.png>

                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    
    <!-- ##### Newsletter Area End ###### -->


    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <?php
    if ($_POST) {
        if (isset($_POST['accept']) && $_SERVER['REQUEST_METHOD']) {
            $driverid = $_SESSION['id'];
            $customerid = $_POST['cid'];
            $amount = $_POST['charge'];
			$_SESSION['driverid']=$driverid;
            if ($amount == '') {
                echo "<script> alert('Please Enter a valid amount')</script>";
            }
			else {
                $query = "INSERT INTO `dynamic_db` (`driverid`, `customerid`, `amount`) VALUES ({$driverid}','{$customerid}','{$amount}')";
				if (mysqli_query($con, $query)) {
				     echo "<script> alert('Response HandedIn')</script>";
				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
				}
            }
        }
    }
?>
</body>

</html>