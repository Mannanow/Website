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
                        <li>News</li>
                    </ul>
                    <h2>Latest News</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Details Start-->
        <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="assets/images/blog/news-details-img-1.jpg" alt="">
                                <div class="news-details__date-box">
                                    <p>20 <br> Aug</p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-details__meta">
                                    <li><a href="news-details.php"><i class="far fa-user-circle"></i> by admin</a></li>
                                    <li><a href="news-details.php"><i class="far fa-comments"></i> 2 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="news-details__title">What is Holding Back the Solution Industry?</h3>
                                <p class="news-details__text-1">Aelltes port lacus quis enim var sed efficitur turpis
                                    gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever
                                    since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                    make a type specimen book. It has survived not only five centuries. Lorem Ipsum is
                                    simply dummy text of the new design printng and type setting Ipsum Take a look at
                                    our round up of the best shows coming soon to your telly box has been the is
                                    industrys. Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has industr standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged.</p>
                                <p class="news-details__text-2">It was popularised in the 1960s with the release of
                                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                                    publishing software like Aldus PageMaker including versions of. There are many
                                    variations of passages of Lorem Ipsum available, but the majority have suffered
                                    alteration in some form, by injected humour, or randomised words which don't look
                                    even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                                    to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                            </div>
                            <div class="news-details__bottom">
                                <p class="news-details__tags">
                                    <span>Tags</span>
                                    <a href="#">Software</a>
                                    <a href="#">cyber</a>
                                </p>
                                <div class="news-details__social-list">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="news-details__pagenation-box">
                                <ul class="list-unstyled news-details__pagenation clearfix">
                                    <li>What is Holding Back the IT <br> Solution Industry?</li>
                                    <li>What is Holding Back the IT <br> Solution Industry?</li>
                                </ul>
                            </div>
                            <div class="comment-one">
                                <h3 class="comment-one__title">2 Comments</h3>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-1.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Kevin Martin <span>3 September, 2021</span></h3>
                                        <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the
                                            industry standard dummy text ever sincer condimentum purus. In non ex at
                                            ligula fringilla lobortis.</p>
                                        <a href="#" class="thm-btn comment-one__btn">reply</a>
                                    </div>
                                </div>
                                <div class="comment-one__single">
                                    <div class="comment-one__image">
                                        <img src="assets/images/blog/comment-1-2.png" alt="">
                                    </div>
                                    <div class="comment-one__content">
                                        <h3>Sarah Albert <span>3 September, 2021</span></h3>
                                        <p>Lorem Ipsum is simply dummy text of the rinting and typesetting been the
                                            industry standard dummy text ever sincer condimentum purus. In non ex at
                                            ligula fringilla lobortis.</p>
                                        <a href="#" class="thm-btn comment-one__btn">reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <h3 class="comment-form__title">Leave a Comment</h3>
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
                                            <button type="submit" class="thm-btn comment-form__btn">submit
                                                comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search here">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__categories">
                                <h3 class="sidebar__title">Categories</h3>
                                <ul class="sidebar__categories-list list-unstyled">
                                    <li><a href="#">Managed IT <span class="icon-right-arrow"></span></a></li>
                                    <li class="active"><a href="#">IT Support <span class="icon-right-arrow"></span></a>
                                    </li>
                                    <li><a href="#">IT Consultancy <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="#">Cloud Computing <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="#">Cyber Security <span class="icon-right-arrow"></span></a></li>
                                    <li><a href="#">Custom Software <span class="icon-right-arrow"></span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-1.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by admin</a>
                                                <a href="news-details.php">A Day in the Life of Entrepreneur
                                                    Co-Founder</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-2.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by admin</a>
                                                <a href="news-details.php">A Day in the Life of Entrepreneur
                                                    Co-Founder</a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-image">
                                            <img src="assets/images/blog/lp-1-3.jpg" alt="">
                                        </div>
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <a href="#" class="sidebar__post-content_meta"><i
                                                        class="far fa-user-circle"></i>by admin</a>
                                                <a href="news-details.php">A Day in the Life of Entrepreneur
                                                    Co-Founder</a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3>
                                <div class="sidebar__tags-list">
                                    <a href="#" class="thm-btn sidebar__tags-btn">Software</a>
                                    <a href="#" class="thm-btn sidebar__tags-btn">cyber</a>
                                    <a href="#" class="thm-btn sidebar__tags-btn">IT</a>
                                    <a href="#" class="thm-btn sidebar__tags-btn">Computing</a>
                                    <a href="#" class="thm-btn sidebar__tags-btn">Consulting</a>
                                    <a href="#" class="thm-btn sidebar__tags-btn">Business</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Details End-->

        <!--Site Footer One Start-->
         <?php include_once("footer.php");?>