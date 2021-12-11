<?php 
session_start();
// if ($_GET['logout']) {
// session_destroy();
// }
include_once('../db.php');
$alert = " ";
if (isset($_POST['submit2'])) {
    $username = mysqli_real_escape_string($connect, $_POST['username']);    
    $password = mysqli_real_escape_string($connect, $_POST['password']);    
    $remember = $_POST['remember'];    
    $sql = " SELECT * From `admin` WHERE `username`='$username' AND `password` = '$password' AND `status` = 1 LIMIT 1";
    
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
   
    if ($row != NULL ) {
        $firstname = $row['firstName'];
        $lastname = $row['lastName'];
        $email = $row['email'];
        $number = $row['number'];


        $_SESSION['admin'] = $row;
        $_SESSION['join'] = true;
        header("location: index.php");  



    }
    

 else {
        $alert = '<span class="splash-description">NIMADUR XATO</span>'; }

 
  
    }  

?>



<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="./index.html"><img class="logo-img" src="./assets/images/logo.png" alt="logo"></a><?php echo "$alert"; ?></div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="username" type="text" name="username" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="password" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" name="remember" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div>
                    <button type="submit" name="submit2" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>
            <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="sign_up.php" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="forgot_password.php" class="footer-link">Forgot Password</a>
                </div>
            </div>
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="./assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>