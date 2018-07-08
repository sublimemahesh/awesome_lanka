<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from travel.bdtask.com/travel_demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 May 2018 07:02:03 GMT -->
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
        <!--        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- page loader -->
        <div class="se-pre-con"></div>
        <div id="page-content">
            <?php include './header.php'; ?>
            <?php include './slider.php'; ?>
            <!-- booking -->
            <div class="container boking-inner">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab1default">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-10">
                                                <div class="row panel-margin">
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Checking</label>
                                                        <div class="icon-addon">
                                                            <input type="text" placeholder="Date" class="form-control" id="datepicker1"/>
                                                            <label class="glyphicon fa fa-calendar"  title="email"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Checkout</label>
                                                        <div class="icon-addon">
                                                            <input type="text" placeholder="Date" class="form-control" id="datepicker2"/>
                                                            <label class="glyphicon fa fa-calendar"  title="email"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Room</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="room" id="room">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Person</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="person" id="person">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Child</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="child" id="child">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Day</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="day" id="day">
                                                                <option value="" selected="">1 days</option>
                                                                <option value="2">2 days</option>
                                                                <option value="3">3 days</option>
                                                                <option value="4">4 days</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-2">
                                                <button type="button" class="thm-btn">Search book</button>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2default">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-9 col-md-10">
                                                <div class="row panel-margin">
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Arrival</label>
                                                        <div class="icon-addon">
                                                            <input type="text" placeholder="Date" class="form-control" id="datepicker3"/>
                                                            <label class="glyphicon fa fa-calendar"  title="email"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Going</label>
                                                        <div class="icon-addon">
                                                            <input type="text" placeholder="Date" class="form-control" id="datepicker4"/>
                                                            <label class="glyphicon fa fa-calendar"  title="email"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Room</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="room" id="room2">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Person</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="person" id="person2">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 hidden-sm panel-padding">
                                                        <label>Child</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="child" id="child2">
                                                                <option value="" selected="">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-4 col-md-2 panel-padding">
                                                        <label>Day</label>
                                                        filters select 
                                                        <div class="select-filters">
                                                            <select name="day" id="day2">
                                                                <option value="" selected="">1 days</option>
                                                                <option value="2">2 days</option>
                                                                <option value="3">3 days</option>
                                                                <option value="4">4 days</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-2">
                                                <button type="button" class="thm-btn">Search book</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- service -->
            <section class="popular-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="title">
                                <h2> Welcome to Travel Company </h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                            <div class="cws_divider mb-25 mt-5"></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into 
                                electronic typesetting, remaining essentially unchanged.</p>                                </div>
                        <div class="col-md-4" style="padding-bottom: 40px;"><img src="assets/images/tour-370x370-9.jpg" data-at2x="pic/promo-1@2x.png" alt class="img-about"></div>
                    </div>
                </div>
            </section>
            <!-- destination -->
            <!-- popular tour -->
              <section class="service-inner" style="margin-bottom: 50px; padding-top: 0px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Our Service</h2>
                                <p>This is Amazing Travel Agency !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-3 inner-box article-color">
                                <article>
                                    <div class="icon"><span class="flaticon-placeholder"></span></div>
                                    <div class="content-text">
                                        <h5>Diverse Destination</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box article-color" >
                                <article>
                                    <div class="icon"><span class="flaticon-map"></span></div>
                                    <div class="content-text">
                                        <h5>Fast Booking</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box article-color">
                                <article>
                                    <div class="icon"><span class="flaticon-lemonade"></span></div>
                                    <div class="content-text">
                                        <h5>Drinks Included</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-3 inner-box article-color">
                                <article>
                                    <div class="icon"><span class="flaticon-party"></span></div>
                                    <div class="content-text">
                                        <h5>After Partys</h5>
                                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="package">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Popular Tours</h2>
                                <p>A great Collection of our Tour Packages</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-1.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Hilton Molino Stucky</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Hilton Molino Stucky</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <img src="assets/images/Package-800x500-2.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>Palolem, India</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Hilton Molino Stucky</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="package-wiget">
                                <div class="grid">
                                    <figure class="effect-milo">
                                        <div class="ribbon"><span>Popular</span></div>
                                        <img src="assets/images/Package-800x500-3.jpg" class="img-responsive" alt="">
                                        <figcaption>
                                            <div class="effect-block">
                                                <h3>IEiffel Tower, Paris</h3>
                                                <div class="package-ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <button type="button" class="thm-btn">Explore Now</button>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="package-content">
                                    <h5>Hilton Molino Stucky</h5>
                                    <div class="package-price">from
                                        <span class="price">
                                            <span class="amount">$200.00</span>
                                        </span>
                                        /night
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry...</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
          
            <!--                                        <div class="row thm-margin">
                                                        <div id="popular-slide" class="owl-carousel">
                                                            <div class="item">
                                                                <div class="grid-item-inner">
                                                                    <div class="grid-img-thumb">
                                                                         ribbon 
                                                                        <div class="ribbon"><span>Popular</span></div>
                                                                        <a href="#"><img src="assets/images/tour-370x370-1.jpg" alt="1" class="img-responsive" /></a>
                                                                    </div>
                                                                    <div class="grid-content">
                                                                        <div class="grid-price text-right">
                                                                            Only <span><sub>$</sub>991</span>
                                                                        </div>
                                                                        <div class="grid-text">
                                                                            <div class="place-name">City sightseeing</div>
                                                                            <div class="travel-times">
                                                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                                                <span class="pull-right">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="grid-item-inner">
                                                                    <div class="grid-img-thumb">
                                                                         ribbon 
                                                                        <div class="ribbon"><span>Popular</span></div>
                                                                        <a href="#"><img src="assets/images/tour-370x370-7.jpg" alt="1" class="img-responsive" /></a>
                                                                    </div>
                                                                    <div class="grid-content">
                                                                        <div class="grid-price text-right">
                                                                            Only <span><sub>$</sub>785</span>
                                                                        </div>
                                                                        <div class="grid-text">
                                                                            <div class="place-name">Beach Tour</div>
                                                                            <div class="travel-times">
                                                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                                                <span class="pull-right">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="grid-item-inner">
                                                                    <div class="grid-img-thumb">
                                                                         ribbon 
                                                                        <div class="ribbon"><span>Popular</span></div>
                                                                        <a href="#"><img src="assets/images/tour-370x370-8.jpg" alt="1" class="img-responsive" /></a>
                                                                    </div>
                                                                    <div class="grid-content">
                                                                        <div class="grid-price text-right">
                                                                            Only <span><sub>$</sub>728</span>
                                                                        </div>
                                                                        <div class="grid-text">
                                                                            <div class="place-name">Mariott Hotel</div>
                                                                            <div class="travel-times">
                                                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                                                <span class="pull-right">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="grid-item-inner">
                                                                    <div class="grid-img-thumb">
                                                                         ribbon 
                                                                        <div class="ribbon"><span>Popular</span></div>
                                                                        <a href="#"><img src="assets/images/tour-370x370-9.jpg" alt="1" class="img-responsive" /></a>
                                                                    </div>
                                                                    <div class="grid-content">
                                                                        <div class="grid-price text-right">
                                                                            Only <span><sub>$</sub>885</span>
                                                                        </div>
                                                                        <div class="grid-text">
                                                                            <div class="place-name">Adventure Toure</div>
                                                                            <div class="travel-times">
                                                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                                                <span class="pull-right">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item">
                                                                <div class="grid-item-inner">
                                                                    <div class="grid-img-thumb">
                                                                         ribbon 
                                                                        <div class="ribbon"><span>Popular</span></div>
                                                                        <a href="#"><img src="assets/images/tour-370x370-2.jpg" alt="1" class="img-responsive" /></a>
                                                                    </div>
                                                                    <div class="grid-content">
                                                                        <div class="grid-price text-right">
                                                                            Only <span><sub>$</sub>789</span>
                                                                        </div>
                                                                        <div class="grid-text">
                                                                            <div class="place-name">Historic Buildings</div>
                                                                            <div class="travel-times">
                                                                                <h4 class="pull-left">3 days 2 nights </h4>
                                                                                <span class="pull-right">
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                    <i class="fa fa-star"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                                                <div class="grid lazyOwl">
                                                                                                    <figure class="effect-milo">
                                                                                                        <img src="assets/images/tour-1.jpg" class="img-responsive" alt="" />
                                                                                                        <figcaption>
                                                                                                            <div class="ratting">
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star"></i>
                                                                                                                <i class="fa fa-star-half-o"></i>
                                                                                                                <i class="fa fa-star-o"></i>
                                                                                                            </div>
                                                                                                            <div class="effect-block">
                                                                                                                <h3>New York</h3>
                                                                                                                <span>3 Night+Flight+5*Hotel</span>
                                                                                                                <h4>$2,000</h4>
                                                                                                                <button type="button" class="thm-btn">Buy now</button>
                                                                                                            </div>
                                                                                                            <div class="block">
                                                                                                                <span class="place-name">New York</span>
                                                                                                                <span class="price">$1,500</span>
                                                                                                            </div>
                                                                                                        </figcaption>
                                                                                                    </figure>
                                                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->

            <!-- hotel -->
            <section class="hotel-inner" style="padding-bottom: 10px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Attractions</h2>
                                <p>This is Amazing hotel in Paris !</p>
                            </div>
                        </div>
                    </div>
                    <div class="row thm-margin" style="padding-bottom: 50px;">
                        <div class="tour-container">
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="view-attraction.php" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 thm-padding">
                                <div class="destination-grid">
                                    <a href="#"><img src="assets/images/destination-370x370-1.jpg" class="img-responsive" alt=""></a>
                                    <div class="mask">
                                        <h2>Sydney</h2>
                                        <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                        <a href="#" class="thm-btn">Read More</a>
                                    </div>
                                    <div class="dest-name">
                                        <h5>Sydney Opera House</h5>
                                        <h4>Sydney</h4>
                                    </div>
                                    <div class="dest-icon">
                                        <i class="flaticon-earth-globe" data-toggle="tooltip" data-placement="top" title="15 Tours"></i>
                                        <i class="flaticon-ship" data-toggle="tooltip" data-placement="top" title="9 Criuses"></i>
                                        <i class="flaticon-transport" data-toggle="tooltip" data-placement="top" title="31 Flights"></i>
                                        <i class="flaticon-front" data-toggle="tooltip" data-placement="top" title="83 Hotels"></i>
                                    </div>
                                </div>
                            </div>
                            <a href="attraction.php" class="thm-btn view-all" style="margin-left: 500px;">View All</a>
                            <!--                            <div class="hotel-item">
                                                                                      hotel Image 
                                                                                     <div class="hotel-image">
                                                                                         <a href="#">
                                                                                             <div class="img"><img src="assets/images/hotel-1.jpg"  alt="" class="img-responsive"></div>
                                                                                         </a>
                                                                                     </div>
                                                                                      hotel body 
                                                                                     <div class="hotel-body">
                                                                                         <div class="ratting">
                                                                                             <i class="fa fa-star"></i>
                                                                                             <i class="fa fa-star"></i>
                                                                                             <i class="fa fa-star"></i>
                                                                                             <i class="fa fa-star-half-o"></i>
                                                                                             <i class="fa fa-star-o"></i>
                                                                                         </div>
                                                                                          title 
                                                                                         <h3>Tours in Greece</h3>
                                                                                          Text Intro 
                                                                                         <p>Etiam maximus molestie accumsan. Sed metus sapien, fermentum nec lorem ac.</p>
                                                                                         <div class="free-service">
                                                                                             <i class="flaticon-television" data-toggle="tooltip" data-placement="top" title="" data-original-title="Plasma TV with cable chanels"></i>
                                                                                             <i class="flaticon-swimmer" data-toggle="tooltip" data-placement="top" title="" data-original-title="Swimming pool"></i>
                                                                                             <i class="flaticon-wifi" data-toggle="tooltip" data-placement="top" title="" data-original-title="Free wifi"></i>
                                                                                             <i class="flaticon-weightlifting" data-toggle="tooltip" data-placement="top" title="" data-original-title="Fitness center"></i>
                                                                                             <i class="flaticon-lemonade" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restaurant"></i>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div class="hotel-right"> 
                                                                                         <div class="hotel-person">from <span class="color-blue">$273</span> person</div>
                                                                                         <a class="thm-btn" href="#">Details</a>
                                                                                     </div>
                                                                                 </div>-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section -->
            <div class="reference home-ref">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="title">
                                <h2>Activities</h2>
                                <p>Checkout our Latest Blogs and News</p>
                            </div>
                        </div>
                    </div>

                    <div class="row thm-margin">
                        <div id="blog-slide" class="owl-carousel">
                            <div class="item">
                                <div class="activities-color"
                                     <div class="blog-content">
                                        <div class="blog-img image-hover">
                                            <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
    <!--                                        <span class="post-date">14 November 2016</span>-->
                                        </div>
                                        <h4><a href="#">It is a long established fact that</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a class="thm-btn" href="view-activities.php" style="margin-left: 50px;">Read More...</a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="activities-color"
                                         <div class="blog-content">
                                            <div class="blog-img image-hover">
                                                <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
        <!--                                        <span class="post-date">14 November 2016</span>-->
                                            </div>
                                            <h4><a href="#">It is a long established fact that</a></h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                            <a class="thm-btn" href="#" style="margin-left: 50px;">Read More...</a>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="activities-color"
                                             <div class="blog-content">
                                                <div class="blog-img image-hover">
                                                    <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
            <!--                                        <span class="post-date">14 November 2016</span>-->
                                                </div>
                                                <h4><a href="#">It is a long established fact that</a></h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                <a class="thm-btn" href="#" style="margin-left: 50px;">Read More...</a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="activities-color"
                                                 <div class="blog-content">
                                                    <div class="blog-img image-hover">
                                                        <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
                <!--                                        <span class="post-date">14 November 2016</span>-->
                                                    </div>
                                                    <h4><a href="#">It is a long established fact that</a></h4>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <a class="thm-btn" href="#" style="margin-left: 50px;">Read More...</a>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="activities-color"
                                                     <div class="blog-content">
                                                        <div class="blog-img image-hover">
                                                            <a href="#"><img src="assets/images/blog-800x250-1.jpg" class="img-responsive" alt=""></a>
                    <!--                                        <span class="post-date">14 November 2016</span>-->
                                                        </div>
                                                        <h4><a href="#">It is a long established fact that</a></h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <a class="thm-btn" href="#" style="margin-left: 50px;">Read More...</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- package section -->

                                <!-- Counter -->

                                <!-- blog section -->

                                <section class="reference">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3">
                                                <div class="title">
                                                    <h2>References</h2>
                                                    <p>A great Collection of our Tour Packages</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="testimonials">
                                                <div class="carousel" data-ride="carousel" id="quote-carousel">
                                                    <div class="carousel-inner">
                                                        <!-- Quote 1 -->  
                                                        <div class="item col-sm-10 col-sm-offset-1">
                                                            <blockquote>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                                aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                                neque nisi placeat possimus quaerat quam repudiandae sint soluta unde vero.
                                                                <span class="author">- Andrew Adams, Google Inc</span>
                                                            </blockquote>
                                                        </div>
                                                        <!-- Quote 2 -->  
                                                        <div class="item col-sm-10 col-sm-offset-1">
                                                            <blockquote>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                                aliquam architecto beatae doloremaliquam architecto beatae dolorem, enim error
                                                                eveniet harum iste molestias neque nisi placeat.
                                                                <span class="author">- Jhon Smith, Facebook Inc</span>
                                                            </blockquote>
                                                        </div>
                                                        <!-- Quote 3 -->
                                                        <div class="item col-sm-10 col-sm-offset-1 active">
                                                            <blockquote>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium
                                                                aliquam architecto beatae dolorem, enim error eveniet harum iste molestias
                                                                neque nisi placeat possimus quaerat quam repudiandae sint.
                                                                <span class="author">- Bob Smith, Fitbit</span>
                                                            </blockquote>
                                                        </div>
                                                    </div>
                                                    <!-- Bottom Carousel Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#quote-carousel" data-slide-to="0" class=""><img class="img-responsive " src="assets/images/avtar-1.jpg" alt=""></li>
                                                        <li data-target="#quote-carousel" data-slide-to="1" class=""><img class="img-responsive" src="assets/images/avtar-2.jpg" alt=""></li>
                                                        <li data-target="#quote-carousel" data-slide-to="2" class="active"><img class="img-responsive" src="assets/images/avtar-3.jpg" alt=""></li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Newsletter -->
                                <section class="get-offer">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <span>Subscribe to our Newsletter</span>
                                                <h2>& Discover the best offers!</h2>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Enter Your Email" name="q">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-default" type="submit"><i class="flaticon-paper-plane"></i> Subscribe</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>  </section>


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
                            <!-- Mirrored from travel.bdtask.com/travel_demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 May 2018 07:02:03 GMT -->
                            </html>