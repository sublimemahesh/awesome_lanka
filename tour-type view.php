<!DOCTYPE html>
<?php include './class/include.php'; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel</title>
        <!-- Favicons -->
        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/images/apple-touch-icon-57x57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114-precomposed.png">
        <!-- Base Css -->
        <link href="assets/css/base.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <style>
        .container {
            position: relative;
            width: 90%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }
        .container:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
        img:hover {
            opacity: 0.5;
            transition: opacity .55s ease-in-out;
            -moz-transition: opacity .55s ease-in-out;
            -webkit-transition: opacity .55s ease-in-out;
        }
        img {
            opacity: 1.0;
            transition: opacity 1s ease-in-out;
            -moz-transition: opacity 1s ease-in-out;
            -webkit-transition: opacity 1s ease-in-out;
        }
    </style>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <?php include './header.php'; ?>
            <section class="header" style="background-image: url(assets/images/banner/news6.jpg);margin-bottom: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Tour Type</h1>
                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Tour Package</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking -->

            <section>
                <div class="team-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-2 col-md-8">
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $TOUR_TYPE = TourType::all();
                            foreach ($TOUR_TYPE as $tour) {
                                ?>
                                <div class="col-sm-4 col-md-3">
                                    <div class="team_member">
                                        <div class="img-zoom-in">
                                            <a href="tours-packages.php?id=<?php echo $tour["id"]; ?>"><img src="upload/tour-type/<?php echo $tour['image_name']; ?>" alt="" class="img-responsive image">
                                            </a>
                                        </div>
                                        <div class="team_text">
                                            <div class="team_text_inner">
                                                <h4> <a href="tours-packages.php?id=<?php echo $tour["id"]; ?>" title=""><?php echo $tour['name']; ?></a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
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

        <script src="guest-comment/validate.js" type="text/javascript"></script>
        <script src="sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="assets/js/comment.js" type="text/javascript"></script>
    </body>
</html>