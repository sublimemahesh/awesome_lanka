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
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <!-- navber -->
            <?php include './header.php'; ?>
            <!-- /.nav end -->
            <!-- page header -->
            <section class="header header-bg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="header-content">
                                <div class="header-content-inner">
                                    <h1>LET'S TALK !</h1>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                                        standard dummy text ever since </p>
                                    <div class="row">
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-facebook"></i>
                                                    <h5>Facebook</h5> 
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-smartphone"></i>
                                                    <h5>001620214460</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-4">
                                            <div class="contact-icon">
                                                <a href="#">
                                                    <i class="flaticon-mail"></i>
                                                    <h5><span class="__cf_email__" data-cfemail="a3c2c7cecacde3cbccd7cec2cacf8dc0ccce">[email&#160;protected]</span></h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ui breadcrumb">
                                        <a href="index.php" class="section">Home</a>
                                        <div class="divider"> / </div>
                                        <div class="active section">Contact</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact -->
            <section class="contact-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12" style="padding-bottom: 30px;">
                                <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                                    <div class="find-location-map">
                                        <div class="gmap" style="padding-top: 35px;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.716723132564!2d80.21369891476817!3d6.033559295630301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae173bb5c8067f1%3A0x4768397502edf93!2sSublime+Holdings!5e0!3m2!1sen!2slk!4v1528086188084" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>                                    </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class="col-sm-8">
                            <div class="contact-form">

                                <h2>Let's Talk!</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="txtFullName" name="txtFullName" placeholder="Enter your Name">
                                            <span id="spanFullName"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" placeholder="Enter Your Email">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Phone Number">
                                            <span id="spanPhone"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" id="txtSubject" name="txtSubject" placeholder="Enter Your Subject">
                                            <span id="spanSubject"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <textarea class="form-control" id="txtMessage" name="txtMessage" placeholder="Your Comment" rows="5"></textarea>
                                    <span id="spanMessage"></span>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-8">
                                    <div class="col-sm-6 ">
                                        <label for="comment">Security Code:</label>
                                        <input style="margin-left: -30px;" type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code ">
                                        <span id="capspan" ></span>
                                    </div>
                                    <div style="margin-top: 12px; margin-left: -15px;" class="col-sm-6 col-md-4">
                                        <?php include("./contact-form/captchacode-widget.php"); ?>
                                    </div> 
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <div class="col-sm-4">
                                        <div style="" class="div-check" >
                                            <img src="contact-form/img/checking.gif" id="checking"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="cf-input-box" style="padding-bottom: 70px;">
                                        <button type="submit" id="btnSubmit" name="btnSubmit" class="thm-btn" style="margin-left: -15px;">SEND MESSAGE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-details">
                                <h2>Contact Details</h2>
                                <div class="contact-content">
                                    <h4>Hours of Operation</h4>
                                    <p>
                                        We’re in the studio brainstorming, designing, and working away to create the best product we can from 9-5pm EST.
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>General Inquiries</h4>
                                    <p>
                                        Phone +94 71 565 5553 | +94 75 582 5734 <br>
                                        <a href="http://travel.bdtask.com/cdn-cgi/l/email-protection#8ce4e9e0e0e3ccebe1ede5e0a2efe3e1"><span class="__cf_email__" data-cfemail="c9a1aca5a5a689aea4a8a0a5e7aaa6a4">[email&#160;protected]</span></a>
                                    </p>
                                </div>
                                <div class="contact-content">
                                    <h4>Address</h4>
                                    <p>
                                        Awesome Lanka Travels,<br>
                                        Temple Road,<br>
                                        Boossa.<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="dismessage" align="center" style="margin-top: -70px;"></div>
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
        <!-- google map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=%20AIzaSyDcMXKkIZSG1Ev3nNkDE5vZpfT_KG9zBT8"></script>
        <script src="contact-form/scripts.js" type="text/javascript"></script>

        <script type="text/javascript">


            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);

            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 10, scrollwheel: false,
                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"color": "#444444"}]}, {"featureType": "administrative.locality", "elementType": "labels.text.stroke", "stylers": [{"visibility": "on"}]}, {"featureType": "administrative.locality", "elementType": "labels.icon", "stylers": [{"visibility": "on"}, {"color": "#f1c40f"}]}, {"featureType": "landscape", "elementType": "all", "stylers": [{"color": "#f2f2f2"}]}, {"featureType": "poi", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "road", "elementType": "all", "stylers": [{"saturation": -100}, {"lightness": 45}]}, {"featureType": "road.highway", "elementType": "all", "stylers": [{"visibility": "simplified"}]}, {"featureType": "road.arterial", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {"featureType": "transit", "elementType": "all", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "all", "stylers": [{"color": "#fec107"}, {"visibility": "on"}]}]
                };

                // image from external URL

                var myIcon = 'assets/images/marker.png';

                //preparing the image so it can be used as a marker
                //https://developers.google.com/maps/documentation/javascript/reference#Icon
                //includes hacky fix "size" to allow for wobble
                var catIcon = {
                    url: myIcon,
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(23.8103968, 90.41256666), //Dhaka
                    map: map,
                    icon: catIcon,
                    title: 'Snazzy!',
                    animation: google.maps.Animation.DROP,
                });
            }
        </script>
    </body>
</html>