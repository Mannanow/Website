<?php

include_once('header.php');





?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="page-header-bg-overly"></div>
            <div class="page-header-shape wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms"
                style="background-image: url(assets/images/shapes/page-header-shape.png)"></div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><span>/</span></li>
                        <li>Contact</li>
                    </ul>
                    <h2>Contact</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Contact with us</span>
                                <h2 class="section-title__title">Write Message to Company</h2>
                            </div>
                            <p class="contact-page__text">Lorem ipsum is simply free text available the market dolor sit
                                amet, consectetur notted adipisicing elit sed do.</p>
                            <div class="contact-page__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-page__right">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Full Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email Address" name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="Write Message"></textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Send a message</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div><!-- /.result -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Contact Details End-->
        <section class="contact-details">
            <div class="container">
                <div class="contact-details__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-map"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Visit Our Store</p>
                                    <h5>66 Road Broklyn Street, New York</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-2">
                                <div class="contact-details__icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Send Email</p>
                                    <h4><a href="mailto:needhelp@company.com">needhelp@company.com</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-3">
                                <div class="contact-details__icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Call Anytime</p>
                                    <h4><a href="tel:926668880000">+ 92 666 888 0000</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->

        <!--Google Map Start
        <section class="contact-page-google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="contact-page-google-map__one" allowfullscreen></iframe>

        </section>
        Google Map End-->

        <!--Site Footer One Start-->
         <?php include_once("footer.php");?>