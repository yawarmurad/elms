<?php
    session_start();
    include('../includes/dbconn.php');
    if(isset($_POST['signin'])){

    $uname=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':uname', $uname, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);

    if($query->rowCount() > 0)
    {
    $_SESSION['alogin']=$_POST['username'];
        echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }

}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../assets/images/icon/favicon.ico">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/metisMenu.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css">
    <link rel="stylesheet" href="../assets/css/default-css.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6"><div class="login-box ptb--30">
                <form name="signin" method="POST">
                    <div class="login-form-head">
                        <h4>ADMIN PANEL</h4>
                        <p>Employee Leave Management System</p>
                    </div>
                    <div class="login-form-body">
                    <div class="form-floating mb-3">
                            <input type="text" id="username" name="username" class="form-control border border-primary" id="floatingInput" placeholder="name@example.com" autocomplete="off" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" id="password" name="password" class="form-control border border-primary" id="floatingPassword" placeholder="Password" autocomplete="off" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit" name="signin">Login <i class="ti-arrow-right"></i></button>
                            
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted"><a href="../index.php"><i class="ti-arrow-left"></i> Go Back</a></p>
                        </div>
                    </div>
                </form>
            </div></div>
                <div class="col-lg-6">
                <img src="../assets/images/Admin-login.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="../assets/js/popper.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/metisMenu.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>

</html>