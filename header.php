<?php
session_start();
include_once("db.php");
include_once("common.php");
//Icons base 
$icons_zapros = "SELECT * FROM `icons`";
$res_icons = mysqli_query($connect, $icons_zapros);

$array_icons = [];
while ($row = mysqli_fetch_assoc($res_icons)) {
$array_icons[] = $row;  # code...
}
//Icons base end
//translation all pages
$translation = "SELECT * FROM `translation`";
$res_translation = mysqli_query($connect, $translation);

$multilang = [];
while ($row = mysqli_fetch_assoc($res_translation)) {
$multilang[''.$row['keyy'].''] =

[

"uz" => $row['name_uz'],
"ru" => $row['name_ru'],
"en" => $row['name_en']

];
}
// translation all pages end
//
$menu_zapros= "SELECT * FROM `menu`";
$res_menu = mysqli_query($connect, $menu_zapros);
$array_menu = [];
while ($row = mysqli_fetch_assoc($res_menu)) {
    $array_menu[] = $row;

}


//

$submenu_zapros= "SELECT * FROM `submenu`";
$res_submenu = mysqli_query($connect, $submenu_zapros);
$array_submenu = [];
while ($row = mysqli_fetch_assoc($res_submenu)) {
    $array_submenu[] = $row;

}
//

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MYSTAR || MYSTAR  Template For IT Solutions Company</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicon.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="MYSTAR HTML Template For IT Solutions Company" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/izeetak-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/twentytwenty/twentytwenty.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/mystar.css" />
    <link rel="stylesheet" href="assets/css/mystar-responsive.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<style>
        .footer {
            color: red;
            display: block;
        }
    </style>
</head>

<body>
    <!-- <div class="preloader">
        <img class="preloader__image" width="60" src="images/favicon.png" alt="" />
    </div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header-two clearfix">
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper-inner clearfix">
                        <div class="main-menu-wrapper__left clearfix">
                            <div class="main-menu-wrapper__logo">
                                <a href="index.php"><img src="images/logo.png" alt=""></a>
                            </div>
                            <div class="main-menu-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                   
<?php


$sql = "SELECT * from `menu`";
$res= mysqli_query($connect, $sql);


while ($row = mysqli_fetch_assoc($res)) {
    
$sql_sub = "SELECT * FROM `submenu` WHERE `menu_id`='".$row['id']."' and `status` = 1";
$res_sub = mysqli_query($connect, $sql_sub);

echo '<li class="dropdown current"><a href="'.$row['link'].'">'.$row['name_'.$language].'';

$stat = 0;
while($rowd = mysqli_fetch_assoc($res_sub)) {

    if($stat == 0){
        echo '<i class="far fa-angle-down"></i></a>
                 <ul class="sub-menu">';
    }

echo '<li><a href="'.$rowd['link'].'">'.$rowd['name_'.$language].'</a></li>';

$stat++;
}

if($stat){  
    echo "</ul>";
}else{
   echo '</a></li>'; 
}
}
?>
<!-- 
<div class="list-group footer bg-light dropdown current" style="margin-left: 120px">
    <i class="fa fa-language" >
          <a href=" ">Uz</a>  ||  <a href="?lang=ru">Ru</a>  ||  <a href="?lang=en">En</a>
    </i>
</div>


<div class="d-grid gap-2 d-md-block dropdown current"><a href="admin/login.php"><button class="btn btn-success" type="button" style="margin-left: 40px">Login</button></a>
  
</div> -->











                                   
                                     
                                </ul>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__right">
                            <div class="main-menu-wrapper__call">
                                <div class="main-menu-wrapper__call-icon">
                                    <img src="assets/images/shapes/phone-icon.png" alt="">
                                </div>
                                <div class="main-menu-wrapper__call-number">
                                    <p><?php
                            echo $multilang['question'][$language];
                        ?></p>
                                    <h5><a href="tel:+998938233222">Free: +998 93 823 3222</a></h5>
                                </div>
                            </div>
                            <div class="main-menu-wrapper__search-box-cart-box">
                                <a href="#" class="main-menu-wrapper__search search-toggler icon-magnifying-glass"></a>
                                <a href="contact.php" class="main-menu-wrapper__cart icon-avatar"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>



