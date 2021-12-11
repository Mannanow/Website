<?php
include_once('../db.php');


$alert = "";

function










if(isset($_POST['submit'])){
    $text = mysqli_real_escape_string($connect, $$_POST['email']);
$sql_check = "SELECT * FROM `admin` WHERE `email` = $'text' LIMIT 1";
$res = mysqli_query($connect, $sql_check);
$row = mysqli_fetch_assoc($es);

if($row  != NULL){



    //Email topilsa uni parolini admin so'ziga almashtiradi
    $new_password = random_bytes(8);
    send($new_password, preg_replace("/[^0-9]/", '' , $row2['number']);

    $sql_update = "UPDATE `admin` SET `password` = '$new_password' WHERE `admin`.`id` = ".$row['id'];
    mysqli_query($connect, $sql_update);
    $alert = "paroling $new_password bo'ldi"

}else{

    $sql_check = "SELECT * FROM `admin` WHERE `number` = $'text' LIMIT 1";
    $res2 = mysqli_query($connect, $sql_check2);
    $row2 = mysqli_fetch_assoc($es2);
    if($row2 != NUL){

    }else{
        $alert = 'Bu email mavjud emas';
    }    
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

<body>
    <!-- ============================================================== -->
    <!-- forgot password  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card">
            <div class="card-header text-center"><img class="logo-img" src="./assets/images/logo.png" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">
                <form action="#" method="post">
                    <p>Don't worry, we'll send you an email to reset your password.</p>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email and password" autocomplete="off">
                    </div>
                   <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot_password.php" class="footer-link">Forgot Password</a>
                </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <span>Don't have an account? <a href="pages-sign-up.php">Sign Up</a></span>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end forgot password  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="./assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

 
</html>