<?php

include_once('header.php');
$main_slider_zapros = "SELECT * FROM `main_slider`";
$res_main_slider = mysqli_query($connect, $main_slider_zapros);

$main_slider = [];
while ($row = mysqli_fetch_assoc($res_main_slider)) {
$main_slider[] = $row;  # code...
}

//

//

$images_zapros = "SELECT * FROM `images`";
$res_images = mysqli_query($connect, $images_zapros);

$images = [];
while ($row = mysqli_fetch_assoc($res_images)) {
$images[] = $row;  # code...
}
//
//service
$service_zapros = "SELECT * FROM `service_card`";
$res_service = mysqli_query($connect, $service_zapros);

$array_service = [];
while ($row = mysqli_fetch_assoc($res_service)) {
$array_service[] = $row;  # code...
}

//service end

//project
$project_zapros = "SELECT * FROM `project_card`";
$res_project = mysqli_query($connect, $project_zapros);

$array_project = [];
while ($row = mysqli_fetch_assoc($res_project)) {
$array_project[] = $row;  # code...
}

//project end
//technology
$technology_zapros = "SELECT * FROM `technology`";
$res_technology = mysqli_query($connect, $technology_zapros);

$array_technology = [];
while ($row = mysqli_fetch_assoc($res_technology)) {
$array_technology[] = $row;  # code...
}

//technology end

//customer
$customer_zapros = "SELECT * FROM `customer_card`";
$res_customer = mysqli_query($connect, $customer_zapros);

$array_customer = [];
while ($row = mysqli_fetch_assoc($res_customer)) {
$array_customer[] = $row;  # code...
}
//customer end

//news

$news_zapros = "SELECT * FROM `news_card`";
$res_news = mysqli_query($connect, $news_zapros);

$array_news = [];
while ($row = mysqli_fetch_assoc($res_news)) {
$array_news[] = $row;  # code...
}
//news end

?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
     "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
                <div class="swiper-wrapper">
                    <?php
                        foreach ($main_slider as $key) {
                            echo '<div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url('.$key['img'].');">
                        </div>
                        <div class="image-layer-overlay"></div>
                        <!-- /.image-layer -->
                        <div class="main-slider-shape-1"><img src="assets/images/shapes/main-slider-shape-1.png" alt="">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="main-slider__content">
                                        <h2>'.$key['name_'.$language].'</h2>
                                        <p>'.$key['desc_'.$language].'</p>
                                        <a href="about.php" class="thm-btn">'.$multilang['btn'][$language].'
                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                        }
                    ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-pagination" id="main-slider-pagination"></div>
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                            class="icon-right-arrow icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                            class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </section>
        <!--Main Slider End-->

        <!--Brand One Start-->
        <section class="brand-one">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 6
                    }
                }}'>
                    <div class="swiper-wrapper">
                            <?php

                                foreach ($images as $key) {
                                    echo '<div class="swiper-slide">
                                <img src="'.$key['image'].'" alt="">
                            </div>';
                                }

                            ?>

                        <!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section> -->
        <!--Brand One End-->
        <!--About One Start-->
        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img-box">
                                <div class="about-one__img">
                                    <img src="images/sizes/1-500x627.jpg" alt="">
                                </div>
                                <div class="about-one__small-img">
                                    <img src="images/sizes/2-350x277.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php
                            echo $multilang['about_n'][$language];
                        ?></span>
                                <h2 class="section-title__title"><?php
                            echo $multilang['about_t'][$language];
                        ?></h2>
                            </div>
                            <p class="about-one__text"><?php
                            echo $multilang['about_d'][$language];
                        ?></p>
                            <div class="about-one__points-box">
                                <ul class="about-one__points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Take a look at our round up of the best shows</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>It has survived not only five centuries</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="about-one__it-solutions">
                                <div class="about-one__it-solutions-icon">
                                    <span class="icon-computer"></span>
                                </div>
                                
                            
                    </div>
                </div>
            </div>
        </section>
        <!--About One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php
                            echo $multilang['service'][$language];
                        ?></span>
                    <h2 class="section-title__title"><?php
                            echo $multilang['service_n'][$language];
                        ?></h2>
                </div>
                <div class="row">
                    <?php
                    foreach ($array_service as $key) {
                        echo '<div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <!--Services One Single-->
                        <div class="services-one__single">
                            <div class="services-one__icon">
                                <span class="'.$key['icon'].'"></span>
                            </div>
                            <h3 class="services-one__title">
                                <a href="'.$key['link'].'">'.$key['name_'.$language].'</a>
                            </h3>
                            <p class="services-one__text">'.$key['desc_'.$language].'</p>
                            <div class="services-one__arrow">
                                <a href="'.$key['link'].'"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                    
                </div>
        </section>
        <!--Services One End-->

        <!--Share The Joy Start-->
        <section class="share-the-joy">
            <div class="share-the-joy__inner">
                <div class="share-the-joy-map"
                    style="background-image: url(assets/images/shapes/share-the-joy-map.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="share-the-joy__left">
                                <h2 class="share-the-joy__title"><?php echo $multilang['achivment'][$language];?></h2>
                                <a href="#" class="share-the-joy__btn thm-btn"><?php echo $multilang['btn'][$language];?></a>
                                <div class="share-the-joy__shape-1">
                                    <img src="assets/images/shapes/share-the-joy-shape-1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="share-the-joy__right">
                                <div class="share-the-joy__img-box">
                                    <div class="share-the-joy__img wow fadeInRight" data-wow-duration="1500ms">
                                        <img src="images/sizes/950x611.jpg" alt=""
                                            class="float-bob-2">
                                    </div>
                                    <div class="share-the-joy__trusted wow fadeIn" data-wow-duration="1500ms">
                                        <span class="icon-social-media"></span>
                                        <div class="share-the-joy__trusted__content">
                                            <p><?php echo $multilang['stat_n'][$language];?></p>
                                            <h3 class="odometer" data-count="8800">00</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Share The Joy End-->

        <!--Project One Start-->
        <section class="project-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $multilang['project_n'][$language];?></span>
                    <h2 class="section-title__title"><?php echo $multilang['project_t'][$language];?></h2>
                </div>
                <div class="project-one__carousel owl-theme owl-carousel">
                    <!--Project One Single-->
                    <?php
                    foreach ($array_project as $key) {
                        echo '<div class="project-one__single">
                        <div class="project-one__img">
                            <img src="'.$key['images'].'" alt="">
                        </div>
                        <div class="project-one__content">
                            <p class="project-one__tagline">'.$key['name_'.$language].'</p>
                            <h2 class="project-one__title"><a href="'.$key['link'].'">'.$key['title_'.$language].'</a></h2>
                            <div class="project-one__arrow">
                                <a href="project-details.php"><span class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>';
                        }
                    ?>
                    
                    <!--Project One Single-->
                </div>
            </div>
        </section>
        <!--Project One End-->

        <!--Improve One Start-->
        <section class="improve-one">
            <div class="improve-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(images/index/photo4.jpg)"></div>
            <div class="improve-one-bg-overly"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="improve-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="improve-one__img-box">
                                <div class="improve-one__img">
                                    <img src="images/index/photo3.jpg" alt="">
                                </div>
                                <div class="improve-one__project-complete">
                                    <p>5008 Projects are completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="improve-one__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php echo $multilang['technology'][$language];?></span>
                                <h2 class="section-title__title"><?php echo $multilang['technology_t'][$language];?></h2>
                            </div>
                            <ul class="list-unstyled improve-one__points">
                                <?php
                                    foreach ($array_technology as $key) {
                                        echo ' <li>
                                    <div class="icon">
                                        <span class="'.$key['icon'].'"></span>
                                    </div>
                                    <div class="text">
                                        <h3>'.$key['name_'.$language].'</h3>
                                        <p>'.$key['title_'.$language].'</p>
                                    </div>
                                </li>';
                                    }
                                ?>
                               
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Improve One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div id="particles-js"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="testimonial-one__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline"><?php echo $multilang['feedback'][$language]?></span>
                                <h2 class="section-title__title"><?php echo $multilang['feedback_t'][$language]?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="testimonial-one__right">
                            <div class="testimonial-one__carousel owl-theme owl-carousel">
                                <!--Testimonial One Single-->
                                <?php
                                    foreach ($array_customer as $key) {
                                        echo ' <div class="testimonial-one__single">
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="'.$key['image'].'" alt="">
                                        </div>
                                        <div class="testimonial-one__client-details">
                                            <h5 class="testimonial-one__client-name">'.$key['name_'.$language].'</h5>
                                            <p class="testimonial-one__client-title">'.$key['info'].'</p>
                                        </div>
                                    </div>
                                    <p class="testimonial-one__text">'.$key['feedback_'.$language].'</p>
                                    <div class="testimonial-one__quote">
                                        <span class="icon-right-quote"></span>
                                    </div>
                                </div>';
                                    }

                                ?>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--News One Start-->
        <section class="news-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Direct from the Blog</span>
                    <h2 class="section-title__title">News & Articles</h2>
                </div>
                <div class="row">
                   <?php
        foreach (array_slice($array_news,0,3) as $key) {
            echo '<div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
            <div class="news-one__single">
                <div class="news-one__img">
                    <img src="'.$key['image'].'" alt="">
                    <a href="news-details.php">
                        <span class="news-one__plus"></span>
                    </a>
                    <div class="news-one__date-box">
                        <p>'.$key['created_date'].'</p>
                    </div>
                </div>
                <div class="news-one__content">
                    <ul class="list-unstyled news-one__meta">
                        <li><a href="#"><i class="far fa-user-circle"></i>'.$key['creator'].'</a></li>
                        <li><a href="'.$key['comments'].'"><i class="far fa-comments"></i> 2 Comments</a>
                        </li>
                    </ul>
                    <h3 class="news-one__title">
                        <a href="news-details.php">'.$key['name_'.$language].'</a>
                    </h3>
                    <p class="news-one__text">'.$key['desc_'.$language].'
                    </p>
                    <div class="news-one__read-more">
                        <a href="news-details.php" class="news-one__read-more-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>';
        }

        ?>
                </div>
            </div>
        </section>
        <!--News One End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one__container">
                <div class="cta-one-bg" style="background-image: url(images/sizes/1590x500.jpg)"></div>
                <div class="cta-one-overly"></div>
                <div class="container">
                    <div class="col-lg-12">
                        <div class="cta-one__inner">
                            <p class="cta-one__sub-title"><?php echo $multilang['help'][$language]?></p>
                            <h2 class="cta-one__title"><?php echo $multilang['help_t'][$language]?></h2>
                            <a href="contact.php" class="cta-one__btn thm-btn"><?php echo $multilang['btn'][$language]?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Site Footer One Start-->
       <?php include_once("footer.php");?>