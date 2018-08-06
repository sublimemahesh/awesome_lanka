<!DOCTYPE html>
<?php
include './class/include.php';

$id = '';
$id = $_GET['id'];
$TOUR_PAKAGES = new TourPackage($id);
$TOUR_DATE = new TourDate(null);
$TOUR_DATES = $TOUR_DATE->getTourDatesById($id);
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
    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
            <?php include_once './header.php'; ?>
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header" style="background-image: url(assets/images/banner/news4.jpg);margin-bottom: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1><?php echo $TOUR_PAKAGES->title ?></h1>
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
            <!-- gallety -->
            <div class="gallery">
                <div class="gallery-inner">
                    <div class="container">
                        <?php
                        foreach ($TOUR_DATES as $key => $tourdate) {
                            ?>
                            <div class="row gallery-margin">
                                <div>
                                    <h3><?php echo $tourdate['title']; ?></h3>
                                    <p><?php echo $tourdate['description'] ?>
                                    </p>
                                </div>
                                <div class="portfolio-items list-unstyled zoom-gallery" id="grid">
                                    <?php
                                    foreach (TourDatePhoto::getTourDatePhotosById($tourdate['id']) as $key => $tour_image) {
                                        if ($key < 4) {
                                            ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12 gallery-padding" data-groups='["family", "honeymoon"]'>
                                                <div class="img-thumb">
                                                    <a href="upload/tour-package/date/gallery/<?php echo $tour_image['image_name']; ?>">
                                                        <img src="upload/tour-package/date/gallery/thumb/<?php echo $tour_image['image_name']; ?>" class="img-responsive" alt="">
                                                    </a>
                                                    <div class="gallery-hover">

                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12 shuffle_sizer"></div>
                            </div>
                            <div class="separator"></div>
                            <?php
                        }
                        ?>

                    </div> 
                </div>
            </div>

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

    <!-- Mirrored from travel.bdtask.com/travel_demo/gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 May 2018 07:10:06 GMT -->
</html>