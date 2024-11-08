﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>In Memoriam - MCLWHD</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/mcLogo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Gp - v2.1.0
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-inner-pages">
        <div class="container d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo"><img src="assets/img/mcLogo.png" alt="logo" class="img-fluid"></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li ><a href="index.html">Home</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li class="drop-down">
                        <a href="#">Staff</a>
                        <ul>
                            <li><a href="officers.html">Officers</a></li>
                            <li><a href="committee.html">Staff/Committees</a></li>
                            <li><a href="pastcommandants.php">Past Commandants</a></li>
                        </ul>
                    </li>
                    <li><a href="shootingteam.html">Shooting Team</a></li>
                    <li><a href="https://mcl-west-hudson-detachment.square.site/">Quartermaster</a></li>
                    <li class="active"><a href="memoriam.html">In Memoriam</a></li>
                    <li><a href="news.html">Publications</a></li>
                    <li><a href="links.html">Links and Forms</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav><!-- .nav-menu -->


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2></h2>
                    <ol>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <div style="padding:2%">
            <h2>Marines</h2>
        </div>

        <div class="row" style="padding: 2%">
<?php
            if (($lines=file("pastmarines.txt")) == FALSE) {
                echo "Unable to access information. Please try later<br>\n";
                return;
            }

            $noItems = count($lines);
            for($a=0; $a < $noItems; $a++) {
                list($name, $year) = preg_split("[\t]", rtrim($lines[$a]));
?>
            <div class="col-lg-3 col-md-6 align-items-center" data-aos="zoom-in" data-aos-delay="150">
                <h4><?php echo $name ?></h4>
                <p><?php echo $year ?></p>
            </div>
<?php
            }
?>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Marine Corps League</h3>
                            <p>
                                286 Belgrove Drive, Kearny<br>
                                NJ 07032, USA<br><br>
                                <strong>Phone:</strong> (201) 991-4492<br>
                                <strong>Email:</strong> info@whdmcl.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/Marine-Corps-League-West-Hudson-Detachment-163294907032603/" class="facebook"><i class="bx bxl-facebook"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.html">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="about.html">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="events.html">Events</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="gallery.html">Gallery</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="officers.html">Officers</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="committee.html">Committees</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="pastcommandants.php">Past Commandants</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="https://mcl-west-hudson-detachment.square.site/">Quartermaster</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="shootingteam.html">Shooting Team</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="memoriam.php">In Memoriam</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="news.html">Publications</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="links.html">Links and Forms</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <img src="assets/img/mcLogo.png" class="img-fluid" alt="" style="max-height: 70%">
                    </div>


                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; 2024 Copyright <strong><span>Marine Corps League, West Hudson Detachment 209</span></strong>. All Rights Reserved.<br>The Eagle, Globe and Anchor emblem and the name Marine Corps&reg are registered trademarks of the USMC. The Marine Corps League and its subordinate organizations support the USMC and its veterans, however it is not officially connected to or endorsed by the USMC, and the name and emblem are used with permission.
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
