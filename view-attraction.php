<!DOCTYPE html>
<?php
include './class/include.php';
$id = '';
$id = $_GET["id"];
$ATTRACTION = new Attraction($id);
$ATTRACTIONPHOTEOS = new AttractionPhoto($id);
$ATTRACTION_PHOTO = $ATTRACTIONPHOTEOS->getAttractionPhotosById($id);
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
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
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
            <section class="header" style="background-image: url(assets/images/header-1920x1135-10.jpg);margin-bottom: 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>One Day Tour</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since </p>
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
            <!-- hotel -->

            <div id="detail-page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="detail-info">
                                <div class="detail-img">

                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-inner" style="margin-top: 59px;">
                                            <?php
                                            foreach ($ATTRACTION_PHOTO as $key => $actrationPhotos) {
                                                if ($key === 0) {
                                                    ?>
                                                    <div class="item active">
                                                        <img src="upload/attraction/gallery/<?php echo $actrationPhotos['image_name'] ?>" alt="">
                                                        <div class="carousel-caption">
                                                            <h3><?php echo $actrationPhotos['caption'] ?></h3>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="item">
                                                        <img src="upload/attraction/gallery/<?php echo $actrationPhotos['image_name'] ?>" alt="">
                                                        <div class="carousel-caption">
                                                            <h3><?php echo $actrationPhotos['caption'] ?></h3>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>


                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div><br><br>

                                    <div class="col-sm-12" style="margin-left: -15px;">
                                        <p class="text-justify"><?php echo $ATTRACTION->description ?></p>
                                    </div>
                                </div>
                                <div class="detail-info-cont text-justify">
                                    <h2></h2>
                                    <div class="seperator-l"></div>
                                </div>
                                <div class="detail-sep-line hidden-md hidden-lg"></div>
                            </div>
                        </div>
                        <section class="blog-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12">
                                        <div class="page-sidebar">
                                            <div class="row">                                
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="sidber-box cats-widget" style="padding-left: 14px; margin-top: -11px;">
                                                        <h3>Other Attraction</h3>
                                                        <?php
                                                        foreach (Attraction::all() as $key => $attration) {
                                                            if ($key < 4) {
                                                                ?>
                                                                <div class="media side-news-media">
                                                                    <div class="media-left">
                                                                        <a href="view-attraction.php?id=<?php echo $attration['id']?>"> <h5><b><?php echo $attration['title'] ?></b></h5></a>
                                                                        <a href="view-attraction.php?id=<?php echo $attration['id']?>"> <img src="upload/attraction/<?php echo $attration['image_name'] ?>" height="80" alt="Olive Ridley Turtles"></a>
                                                                    </div>
                                                                    <h8><?php echo $attration['short_description'] ?></h8>
                                                                </div>
                                                            <?php
                                                            }
                                                        }
                                                        ?>                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </section>
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
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyCQ4twFS87Ji-69gchik7Vak4lEsxOCA6M"></script>
        <script src="assets/js/hotels.maps.js" type="text/javascript"></script>

    </body>

</html>