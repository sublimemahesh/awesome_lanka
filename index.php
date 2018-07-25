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

    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <?php include './header.php'; ?>
            <?php include './slider.php'; ?>
            <!-- booking -->

            <!-- service -->
            <section class="popular-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="title">
                                <?php $PAGES = new Page(1); ?>
                                <h2><?php echo $PAGES->title ?></h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                            <div class="cws_divider mb-25 mt-5"></div>
                            <p><?php echo $PAGES->description ?></p> 

                        </div>
                        <div class="col-md-7">
                            <?php foreach (Service::all() as $key => $service) { ?>
                                <div class="col-md-6">
                                    <div class="inner-box article-color">
                                        <article>
                                            <a href="services.php"><img src="upload/service/<?php echo $service['image_name']; ?>" style="width: 25%;"></a>
                                            <div class="content-text">
                                                <h5> <a href="services.php"><?php echo $service['title'] ?></a></h5>
                                                <a href="services.php"> <p style="text-align: justify;"><?php echo substr($service['short_description'], 0, 150) . '...'; ?></p></a>

                                            </div>
                                        </article>
                                    </div>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div> 
                </div>
            </section>
            <!-- destination -->

            <section class="package">
                <div class="reference home-ref">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="title">
                                    <h2 style="margin-left: -172px;">Tour Package</h2>
                                    <p style="margin-left: -177px;">A great Collection of our Tour Packages</p>
                                </div>
                            </div>
                        </div>
                        <div class="row thm-margin">
                            <div id="popular-slide" class="owl-carousel">
                                <?php
                                foreach (TourPackage::all() as $tours) {
                                    ?>
                                    <div class="col-xs-12 col-sm-4 col-md-12">
                                        <div class="package-wiget">
                                            <div class="grid">
                                                <figure class="effect-milo">
                                                    <img src="upload/tour-package/thumb/<?php echo $tours['image_name']; ?>" class="img-responsive" alt="">
                                                    <figcaption>
                                                        <div class="effect-block">
                                                            <h3><?php echo $tours['title']; ?></h3>

                                                            <button type="button" class="thm-btn">Read More..</button>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <div class="package-content">
                                                <h5><?php echo substr($tours['title'], 0, 30) . '...'; ?></h5>
                                                <div class="package-price">
                                                    <p><?php echo substr($tours['short_description'], 0, 150) . '...'; ?></p>
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
                </div>
            </section>

            <div class="reference">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Activities</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin">
                        <div id="blog-slide" class="owl-carousel">
                            <?php foreach (Activities::all() as $key => $activity) { ?>
                                <div class="item">
                                    <div class="activities-color"
                                         <div class="blog-content">
                                            <div class="blog-img image-hover">
                                                <a href="view-activities.php?id=<?php echo $activity['id'] ?>"><img src="upload/activity/<?php echo $activity['image_name'] ?>" class="img-responsive" alt=""></a>

                                            </div>
                                            <h4><a href="view-activities.php?id=<?php echo $activity['id'] ?>"><?php echo $activity['title'] ?></a></h4>
                                            <p><?php echo substr($activity['short_description'], 0, 100) . '...'; ?></p>
                                            <a class="thm-btn" href="view-activities.php?id=<?php echo $activity['id'] ?>" style="margin-left: 50px;">Read More...</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <section class="reference home-refn" style="padding-bottom: 10px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title" style="padding-top: 60px;">
                                    <h2>Attractions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row thm-margin" style="padding-bottom: 50px;">
                            <div class="tour-container">
                                <?php
                                foreach (Attraction::all() as $key => $attraction) {
                                    if ($key < 8) {
                                        ?>
                                        <div class="col-md-3 col-sm-4 thm-padding">
                                            <div class="destination-grid">
                                                <a href="#"><img src="upload/attraction/<?php echo $attraction['image_name'] ?>" class="img-responsive" alt=""></a>
                                                <div class="mask">
                                                    <h2><?php echo $attraction['title'] ?></h2>
                                                    <p><?php echo substr($attraction['short_description'], 0, 50) . '...'; ?></p>
                                                    <a class="thm-btn" href="view-attraction.php?id=<?php echo $attraction['id'] ?>" style="margin-left: -15px;">Read More...</a>
                                                </div>
                                                <div class="dest-name">
                                                    <h4><?php echo $attraction['title'] ?></h4>                                               </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
</div>
                        </div>
                    </div>
                </section>
                <div class="reference">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="title">
                                    <h2>Feedback</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="testimonials">
                                <div class="carousel" data-ride="carousel" id="quote-carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        $li = '';
                                        foreach (Comments::activeComments() as $key => $comment) {
                                            if ($key === 0) {
                                                $li .= '<li data-target="#quote-carousel" data-slide-to="' . $key . ' " class="active">'
                                                        . '<img class="img-responsive " src="upload/comments/' . $comment['image_name'] . '" alt=""> '
                                                        . '</li>';
                                                ?>  
                                                <!-- Quote 3 -->
                                                <div class="item col-sm-10 col-sm-offset-1 active">
                                                    <blockquote>
                                                       <?php echo $comment['comment']; ?>
                                                        <span class="author"><?php echo $comment['name']; ?></span>
                                                    </blockquote>
                                                </div> 
                                                <?php
                                            } else {
                                                $li .= '<li data-target="#quote-carousel" data-slide-to="' . $key . ' "><img class="img-responsive " src="upload/comments/' . $comment['image_name'] . '" alt=""> </li>';
                                                ?>
                                                <!-- Quote 2 -->  
                                                <div class="item col-sm-10 col-sm-offset-1">
                                                    <blockquote>
                                                       <?php echo $comment['comment']; ?>
                                                        <span class="author"><?php echo $comment['name']; ?></span>

                                                    </blockquote>

                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                    <!-- Bottom Carousel Indicators -->
                                    <ol class="carousel-indicators">
                                        <?php echo $li; ?>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




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