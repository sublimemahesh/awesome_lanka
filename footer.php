<footer>
    <div class="container">
        <div class="row">
            <!-- Address -->
            <div class="col-sm-4 col-md-3">
                <div class="footer-box address-inner">
                  
                    <div class="address">
                        <i class="flaticon-placeholder"></i>
                        <p>Awesome Lanka Travels,<br>
                            Temple Road,
                            Boossa.</p>
                    </div>
                    <div class="address">
                        <i class="flaticon-customer-service"></i>
                        <p>+94 71 565 5553 | +94 75 582 5734</p>
                    </div>
                    <div class="address">
                        <i class="flaticon-mail"></i>
                        <p> <a class="text-color" href="mailto:info@awesomelankatravels.com"><strong></strong>info@awesomelankatravels.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-box">
                            <h4 class="footer-title">Site Links</h4>
                            <ul class="categoty">
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="tours-packages.php">Tour Packages</a></li>
                                <li><a href="activities.php">Activities</a></li>
                                <li><a href="attraction.php">Attraction</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-box">
                            <h4 class="footer-title">Activities</h4>
                            <ul class="categoty">
                                <?php
                                foreach (Activities::all() as $key => $activity)  {
                                      if ($key < 5) {
                                        ?>
                                <li><a href="view-activities.php?id=<?php echo $activity['id'] ?>"><?php echo $activity['title'] ?></a></li>
                               <?php
                                    }
                                }
                               ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="footer-box">
                            <h4 class="footer-title">Attraction</h4>
                            <ul class="categoty">
                                <?php
                                foreach (Attraction::all() as $key => $attraction)  {
                                      if ($key < 5) {
                                        ?>
                                <li><a href="view-attraction.php?id=<?php echo $attraction['id'] ?>"><?php echo $attraction['title'] ?></a></li>
                               <?php
                                    }
                                }
                               ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 hidden-sm">
                <div class="footer-box">
                    <h4 class="footer-title">Our Gallery</h4>
                    <ul class="gallery-list">
                        <?php
                        $FOOTERIMAGES = AlbumPhoto::all();
                        foreach ($FOOTERIMAGES as $key => $footerimage) {
                            if ($key < 6) {
                                ?>
                                <li> <a href="upload/photo-album/gallery/<?php echo $footerimage['image_name']; ?>"><img src="upload/photo-album/gallery/<?php echo $footerimage['image_name']; ?>" alt=""></a></li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <p>Copyright Â© 2018. Sublime Holdings</p>
                </div>
                <div class="col-sm-7">

                </div>
            </div>
        </div>
    </div>
</footer>