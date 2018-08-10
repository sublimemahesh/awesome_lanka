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
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <?php include './header.php'; ?>
            <?php include './slider.php'; ?>


            <div class="image-blocks image-blocks-category">

                <div class="container">
                    <div class="about row">


                        <div class="text-block">

                            <section class="cards" style="padding: 0px;">

                               


                                <div class="container">
                                    <div class="row">
                                        <?Php
                                        $PHOTO_ALBUM_OBJ = new PhotoAlbum(NULL);
                                        $PHOTO_ALBUM = $PHOTO_ALBUM_OBJ->all();
                                        foreach ($PHOTO_ALBUM as $photo_album) {
                                            ?>
                                            <div class="col-xs-12 col-md-4">
                                                <a href="gallery.php?id=<?php echo $photo_album['id'] ?>">
                                                    <figure class="">
                                                        <figcaption style="background-image:url(upload/photo-album/<?php echo $photo_album['image_name']; ?>)">
                                                            <img src="upload/photo-album/<?php echo $photo_album['image_name']; ?>" alt="">
                                                        </figcaption>
                                                        <div class="btn btn-clean"><?php echo $photo_album['title']; ?></div>
                                                    </figure>
                                                </a>

                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div> <!--/row-->

                                </div> <!--/container-->
                            </section>

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
            <script src="assets/js/script.js" type="text/javascript"></script>
            <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
            <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
            <script src="guest-comment/validate.js" type="text/javascript"></script>
            <script>
                jQuery(document).ready(function () {
                    jQuery('#btn-add-comment').click(function () {
                        jQuery("#myModal").modal('show');
                    });

                });


                jQuery('#create').click(function (event) {

                    event.preventDefault();

                    var captchacode = jQuery('#captchacode').val();

                    jQuery.ajax({
                        url: "guest-comment/captchacode.php",
                        cache: false,
                        dataType: "json",
                        type: "POST",
                        data: {
                            captchacode: captchacode

                        },
                        success: function (html) {
                            var status = html.status;
                            var msg = html.msg;

                            if (status == "incorrect") {

                                jQuery("#capspan").addClass("notvalidated");
                                jQuery("#capspan").html(msg);
                                jQuery("#capspan").show();
                                jQuery("#capspan").fadeOut(2000);

                            } else if (status == "correct") {
                                jQuery('#client-comment').submit();

                            }
                        }
                    });
                });


            </script>
    </body>
</html>