<?php
include_once('../db.php');

if (isset($_POST['submit_r'])) {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $status = $_POST['status'];
    if ($status == "on") {
        $status = 1;
    }else{
        $status = 0;
    }
   $cr_d = time(); 

    if($password == $confirm_password){
    $sql_insert = "INSERT INTO `admin` (`id`, `firstName`, `lastName`, `username`, `password`, `email`, `number`, `created_date`, `status`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$email', '$phone_number', '$cr_d', '$status')";

        mysqli_query($connect, $sql_insert);

          $success = "Tizimdan muvaffaqqiyatli ro'yhatdan o'tdingiz";
    }else{
        $alert = "parol notogri yozilgan";  
    }
}


?>



<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="./assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/libs/css/style.css">
    <link rel="stylesheet" href="./assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="post" action="login.php">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="firstname" required="" placeholder="First name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="lastname" required="" placeholder="Last name" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="number" name="phone_number" required="" placeholder="Phone Number" autocomplete="off">
                </div>
               
                <div class="form-group">    
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" type="password" name="password"required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" name="confirm_password" placeholder="Confirm">
                </div>
                <div class="form-group row">
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right">Status</label>
                                                <div class="col-12 col-sm-8 col-lg-6 pt-1">
                                                    <div class="switch-button switch-button-success">
                                                        <input type="checkbox" checked="" name="status" id="switch16"><span>
                                                    <label for="switch16"></label></span>
                                                    </div>
                                                </div>
                                            </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit" name="submit_r">Register My Account</button>
                </div>

                
                <br>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="#" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>



<div class="project-one__carousel owl-theme owl-carousel">
        <!--Project One Single-->
        <?php 
        foreach ($array_project as $key ) {
            echo '<div class="project-one__single">
                      <div class="project-one__img">
                       <img src="'.$key['images'].'" alt="">
                       </div>
            <div class="project-one__content">

                <h2 class="project-one__title"><a href="'.$key['link'].'">'.$key['title_'.$language].'</a></h2>
                <div class="project-one__arrow">
                    <a href="'.$key['link'].'"><span class="icon-right-arrow"></span></a>
                </div>
            </div>
        </div>';
        }

        ?>
        
        <!--Project One Single-->
    </div>