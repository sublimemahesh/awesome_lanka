<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Travel</title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png">
        <!-- Base Css -->
        <link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- page loader -->

        <div id="page-content">
            <!-- navber -->
            <?php include './header.php'; ?>
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header header-bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>About Us</h1>

                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">About Us</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about section -->
            <section class="about-section" style="padding-top: 10px;">
                <!-- about section -->
                <div class="about-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="middle-content">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <img src="assets/images/about.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="col-md-6" style="margin-top: -24px;">
                                            <div class="content-left">
                                                <div class="about-title">
                                                    <h2>Our Story</h2>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <?php $PAGES = new Page(2); ?>
                                                            <p class="text-justify"><?php echo $PAGES->description; ?></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <section class="service-inner" style="margin-bottom: 50px;">
                                    <div class="container">
                                        <!--                    <div class="row">
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <div class="title">
                                                                        <h2>Our Service</h2>
                                                                        <p>This is Amazing Travel Agency !</p>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-sm-4 inner-box article-color">
                                                    <article>
                                                        <div class="icon"><span class="flaticon-placeholder"></span></div>
                                                        <div class="content-text">
                                                            <h5 style="margin-left: -17px;">Vision</h5>
                                                            <p>Have provide luxury tour service
                                                                for reasonable price to our customers.  
                                                                Travel with your heart touching places.</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-sm-4 inner-box article-color" >
                                                    <article>
                                                        <div class="icon"><span class="flaticon-map"></span></div>
                                                        <div class="content-text">
                                                            <h5 style="margin-left: -17px;">Mission</h5>
                                                            <p>Our mission is number one tour planner  in Galle.
                                                                Provide to memorable experience to your wonderful life.</p>
                                                        </div>
                                                    </article>
                                                </div>
                                                <div class="col-sm-4 inner-box article-color">
                                                    <article>
                                                        <div class="icon"><span class="flaticon-lemonade"></span></div>
                                                        <div class="content-text">
                                                            <h5 style="margin-left: -17px;">Values</h5>
                                                            <p><li>Luxury Vehicles</li>
                                                            <li>Reasonable Tour Packages</li>
                                                            <li>Best Travel Guides</li>
                                                            <li>Safety First</li></p>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

            <!-- testimonial section --> 
            <!--            <div class="reference">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-8">
                                        <div class="section-title text-center">
                                            <i class="flaticon-customer"></i>
                                            <h2>References</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="testimonials">
                                        <div class="carousel" data-ride="carousel" id="quote-carousel">
                                            <div class="carousel-inner">
                                                 Quote 1   
                                                <div class="item col-sm-10 col-sm-offset-1">
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                        aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                        neque nisi placeat possimus quaerat quam repudiandae sint soluta unde vero.
                                                        <span class="author">- Andrew Adams, Google Inc</span>
                                                    </blockquote>
                                                </div>
                                                 Quote 2   
                                                <div class="item col-sm-10 col-sm-offset-1">
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                        aliquam architecto beatae doloremaliquam architecto beatae dolorem, enim error
                                                        eveniet harum iste molestias neque nisi placeat.
                                                        <span class="author">- Jhon Smith, Facebook Inc</span>
                                                    </blockquote>
                                                </div>
                                                 Quote 3 
                                                <div class="item col-sm-10 col-sm-offset-1 active">
                                                    <blockquote>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                        aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                        neque nisi placeat possimus quaerat quam repudiandae sint.
                                                        <span class="author">- Bob Smith, Fitbit</span>
                                                    </blockquote>
                                                </div>
                                            </div>
                                             Bottom Carousel Indicators  
                                            <ol class="carousel-indicators">
                                                <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="assets/images/avtar-1.jpg" alt="">
                                                </li>
                                                <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="assets/images/avtar-2.jpg" alt="">
                                                </li>
                                                <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="assets/images/avtar-3.jpg" alt="">
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         team member 
                        <div class="team-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-8">
                                        <div class="section-title text-center">
                                            <i class="flaticon-people"></i>
                                            <h2>Our Teaam</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-md-3">
                                        <div class="team_member">
                                            <div class="img-zoom-in">
                                                <img src="assets/images/team700x800-1.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="team_text">
                                                <div class="team_text_inner">
                                                    <h4>Michael Dawson</h4>
                                                    <p>Designer</p>
                                                </div>
                                                <div class="team_media">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="team_member">
                                            <div class="img-zoom-in">
                                                <img src="assets/images/team700x800-2.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="team_text">
                                                <div class="team_text_inner">
                                                    <h4>Chris Mcgee</h4>
                                                    <p>Marketer</p>
                                                </div>
                                                <div class="team_media">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3">
                                        <div class="team_member">
                                            <div class="img-zoom-in">
                                                <img src="assets/images/team700x800-3.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="team_text">
                                                <div class="team_text_inner">
                                                    <h4>Francisco Soto</h4>
                                                    <p>CEO</p>
                                                </div>
                                                <div class="team_media">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-3 hidden-sm">
                                        <div class="team_member">
                                            <div class="img-zoom-in">
                                                <img src="assets/images/team700x800-4.jpg" alt="" class="img-responsive">
                                            </div>
                                            <div class="team_text">
                                                <div class="team_text_inner">
                                                    <h4>Michael Dawson</h4>
                                                    <p>Programmer</p>
                                                </div>
                                                <div class="team_media">
                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         client 
                        <div class="client-inner">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-2 col-md-8">
                                        <div class="section-title text-center">
                                            <i class="flaticon-arrows"></i>
                                            <h2>Our Clients</h2>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="row">
                                    <div class="clients">
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo1.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo2.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo3.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo4.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo5.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                        <div class="col-xs-4 col-sm-2">
                                            <div class="clients-thumb">
                                                <img src="assets/images/client-logo/logo6.png" class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

        </section>
        <!-- Newsletter -->

    </div>

    <!-- Footer Section -->
    <?php include './footer.php'; ?>
    <!-- jQuery -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <!-- jquery ui js -->
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- fraction slider js -->
    <script src="assets/js/jquery.fractionslider.js" type="text/javascript"></script>
    <!-- owl carousel js --> 
    <script src="assets/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- counter -->
    <script src="assets/js/jquery.counterup.min.js" type="text/javascript"></script>
    <script src="assets/js/waypoints.js" type="text/javascript"></script>
    <!-- filter portfolio -->
    <script src="assets/js/jquery.shuffle.min.js" type="text/javascript"></script>
    <script src="assets/js/portfolio.js" type="text/javascript"></script>
    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- range slider -->
    <script src="assets/js/ion.rangeSlider.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- custom -->
    <script src="assets/js/custom.js" type="text/javascript"></script>
</body>

</html>