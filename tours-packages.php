<!DOCTYPE html>
<?php
include './class/include.php';
?>
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
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
            <?php include './header.php'; ?>
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header" style="background-image: url(assets/images/slide3.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>Tour Packages</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since.</p>
                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Tour Packages</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hotel -->
            <section class="hotel-inner">
                <div class="container">
                    <div class="row" style="margin-top: 60px;">
                        <?php foreach (TourPackage::all() as $key => $tourse){ ?>
                        <div class="col-sm-12 col-md-6">
                            <div class="hotel-item">
                                <!-- hotel Image -->
                                <div class="hotel-image">
                                    <a href="view-tourpackage.php?id=<?php echo $tourse['id']?>">
                                        <div class="img"><img src="upload/tour-package/<?php echo $tourse['image_name']?>"  alt="" class="img-responsive"></div>
                                    </a>
                                </div>
                                <!-- hotel body -->
                                <div class="hotel-body">
                                    <!-- title -->
                                    <a href="view-tourpackage.php?id=<?php echo $tourse['id']?>"> <h3><?php echo $tourse['title']?></h3></a>
                                    <!-- Text Intro -->
                                    <p><?php echo $tourse['short_description']?></p>
                                    <div class="free-service pull-left" style="">
<<<<<<< Updated upstream
                                        <a href="booking.php?id=<?php echo $tourse['id']?>" class="thm-btn" style="margin-bottom: -20px; margin-left:5px;">Book Now</a>
=======
                                        <a href=booking.php?id=<?php echo $tourse['id']?>" class="thm-btn" style="margin-bottom: -20px; margin-left: 10px;">Book Now</a>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="free-service pull-right">
                                        <a href="view-tourpackage.php?id=<?php echo $tourse['id']?>" class="thm-btn" style="margin-bottom: -20px;">Read More</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
                        }
                        ?>

                    </div>
                </div>
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
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyCQ4twFS87Ji-69gchik7Vak4lEsxOCA6M"></script>
        <script src="assets/js/hotels.maps.js" type="text/javascript"></script>
        <script>
            //range slide
            $("#range").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 200,
                from: 50,
                to: 150,
                prefix: "$"
            });
        </script>
    </body>
</html>