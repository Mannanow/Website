 <?php
    $footer_link = "SELECT * FROM `footer_link`";
$res_footerlink = mysqli_query($connect, $footer_link);

$array_footerlink = [];
while ($row = mysqli_fetch_assoc($res_footerlink)) {
$array_footerlink[] = $row; 
}


?>
 <footer class="site-footer">
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer-light"
                            style="background-image: url(assets/images/shapes/site-footer-mape.png)"></div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                                <div class="footer-widget__column footer-widget__about">
                                    <div class="footer-widget__about-logo">
                                        <a href="index.php"><img src="images/logo.png"
                                                alt=""></a>
                                    </div>
                                    <p class="footer-widget__about-text"><?php echo $multilang['social'][$language]?></p>
                                    <div class="footer-widget__about-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                        <a href="#"><i class="fab fa-telegram"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                <div class="footer-widget__column footer-widget__links clearfix">
                                    <h3 class="footer-widget__title">Links</h3>
                                    <ul class="footer-widget__links-list list-unstyled clearfix">
                                        <?php 
                                            foreach (array_slice($array_footerlink,0,5) as $key){
                                                echo '<li><a href="'.$key['link'].'">'.$key['name_'.$language].'</a></li>';
                                            }
                                        ?>

                                    </ul>
                                    <ul
                                        class="footer-widget__links-list footer-widget__links-list-two list-unstyled clearfix">
                                        <?php 
                                            foreach (array_slice($array_footerlink,5,9) as $key){
                                                echo '<li><a href="'.$key['link'].'">'.$key['name_'.$language].'</a></li>';
                                            }
                                        ?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                                <div class="footer-widget__column footer-widget__contact">
                                    <h3 class="footer-widget__title">Contact</h3>
                                    <p class="footer-widget__contact-text">131b Buyuk Ipak Yuli street, Samarkand , Uzbekistan</p>
                                    <ul class="list-unstyled footer-widget__contact-list">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-email"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:needhelp@company.com">mannanovshahzod@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-telephone"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:926668880000">+ 998 93 823 3222</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                                <div class="footer-widget__column footer-widget__newsletter">
                                    <h3 class="footer-widget__title">Newsletter</h3>
                                    <p class="footer-widget__newsletter-text"><?php echo $multilang['subscribe'][$language]?></p>
                                    <form class="footer-widget__newsletter-form mc-form"
                                        data-url="https://xyz.us18.list-manage.com/subscribe/post?u=20e91746ef818cd941998c598&id=cc0ee8140e">
                                        <div class="footer-widget__newsletter-input-box">
                                            <input type="email" placeholder="Email address" name="email">
                                            <button type="submit" class="footer-widget__newsletter-btn">Send</button>
                                        </div>
                                    </form>
                                    <div class="mc-form__response"></div><!-- /.mc-form__response -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer__bottom-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="site-footer__bottom-inner">
                                    <div class="site-footer__bottom-left">
                                        <p class="site-footer__bottom-text">© All Copyright <span class="dynamic-year">
                                            </span><!-- /.dynamic-year --> by <a href="#">Mannanow.uz</a></p>
                                    </div>
                                    <div class="site-footer__bottom-right">
                                        <ul class="list-unstyled site-footer__bottom-menu">
                                            <li><a href="contact.php">Terms & Condition</a></li>
                                            <li><span>/</span></li>
                                            <li><a href="contact.php">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer One End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.php" aria-label="logo image"><img src="images/logo.png"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:mannanovshahzod@gmail.com">mannanovshahzod@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">+998938233222</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/twentytwenty/twentytwenty.js"></script>
    <script src="assets/vendors/twentytwenty/jquery.event.move.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/particles/particles.min.js"></script>
    <script src="assets/vendors/particles/particles-config.js"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template js -->
    <script src="assets/js/izeetak.js"></script>
</body>

</html>