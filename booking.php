<!DOCTYPE html>
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
        <link href="assets/css/datepicker.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
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
                                        <a href="index-2.html" class="section">Home</a>
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
                        <div class="" style="margin-top: 60px;">
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Name</label>
                                    <span id="star">*</span>
                                    <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                    <span id="spanFullName" ></span>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Email</label>
                                    <span id="star">*</span>
                                    <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater">
                                    <span id="spanEmail" ></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Country</label>
                                    <span id="star">*</span>
                                    <input type="text" name="txtCountry"  id="txtCountry" class="form-control input-validater">
                                    <span id="spanCountry" ></span>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>Your Contact Numbers</label>
                                    <span id="star">*</span>
                                    <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater">
                                    <span id="spanPhone" ></span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Arrival Date</label>
                                    <span id="star">*</span>
                                    <input value="" type="text" name="txtAdate" id="txtAdate" class="form-control input-validater"><i class="fa fa-calendar"></i>
                                    <span id="spanAdate"></span>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <label>Departure Date</label>
                                    <span id="star">*</span>
                                    <input value="" type="text" name="txtDdate" id="txtDdate" class="form-control input-validater"><i class="fa fa-calendar"></i>
                                    <span id="spanDdate"></span>
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col-xs-12 col-sm-6">
                                    <label>Number of Adults</label>
                                    <span id="star">*</span>

                                    <input type="number" name="txtAdult" id="txtAdult" class="form-control" min="0">

                                    <span id="spanAdult" ></span>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <label>Number of Children</label>
                                    <span id="star">*</span>
                                    <input type="number" name="txtChildren" id="txtChildren" class="form-control" min="0">   
                                    <span id="spanChildren" ></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tour Package</label>
                                <span id="star">*</span>
                                <select name="txtPackage" id="txtPackage" class="form-control">
                                    <option> -- Please Select a Package -- </option>
                                    <option value="Cycling One Day Rides "> Cycling One Day Rides </option>
                                    <option value="Cycling One Day Rides "> Cycling One Day Rides </option>
                                    <option value="Cycling One Day Rides "> Cycling One Day Rides </option>
                                    <option value="Cycling One Day Rides "> Cycling One Day Rides </option>
                                </select>
                                <span id="spanPackage" ></span>
                            </div>
                            <div class="form-group">
                                <label>Your Message</label>
                                <span id="star">*</span>
                                <textarea name="txtMessage"  id="txtMessage" rows="6" class="form-control" placeholder="write message here" required></textarea>
                                <span id="spanMessage" ></span>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="col-sm-6 ">
                                    <label for="comment">Security Code:</label>
                                    <input style="margin-left: -30px;" type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the code ">
                                    <span id="capspan" ></span>
                                </div>
                                <div style="margin-top: 12px; margin-left: -15px;" class="col-sm-6 col-md-4">
                                    <?php include("./booking-form/captchacode-widget.php"); ?>
                                </div> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4">
                                <div class="col-sm-4">
                                    <div style="" class="div-check" >
                                        <img src="booking-form/img/checking.gif" id="checking"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-12 pull-right">
                                <button type="submit" class="thm-btn" id="btnSubmit" name="btnSubmit" >Send Your Message</button>
                            </div>

                        </div>
                        <div id="dismessage" align="center"></div>
                    </div>
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
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
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
<script type="text/javascript">

    $(function () {

        /* global setting */
        var datepickersOpt = {
            dateFormat: 'yy-mm-dd',
            minDate: 0
        }

        $("#txtAdate").datepicker($.extend({
            onSelect: function () {
                var minDate = $(this).datepicker('getDate');
                minDate.setDate(minDate.getDate() + 1); //add two days
                $("#txtDdate").datepicker("option", "minDate", minDate);
            },
            dateFormat: 'yyyy-mm-dd'
        }, datepickersOpt));

        $("#txtDdate").datepicker($.extend({
            onSelect: function () {
                var maxDate = $(this).datepicker('getDate');
                maxDate.setDate(maxDate.getDate() - 1);
                $("#txtAdate").datepicker("option", "maxDate", maxDate);
            },
            dateFormat: 'yyyy-mm-dd'
        }, datepickersOpt));
    });

</script>
<script src="booking-form/scripts.js" type="text/javascript"></script>
</body>


</html>