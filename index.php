<!-- ?php include 'include/header.php'; ?> -->
<!-- Different inc so different header -->

<!-- inc.php  -->
<?php
include 'library/Session.php' ;
Session::init();
ob_start();

include 'library/Database.php' ;
include 'helpers/Format.php';

 $fm   = new Format();
?>
<!-- end of inc.php  -->

<!-- header.php  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Authentication</title>

    <!--Bootstrap cdn-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <!--Font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Font Awesome CSS file -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- end of header.php  -->

<!-- Check Session -->
<?php Session::checkSession(); ?>
<!-- End Of Check Login -->


    <!-- Navbar -->
    <?php include 'include/navbar.php'; ?>

    <div class="container">

        <div class='jumbotron jumbotron-fluid text-center color-set'>
            <div class="container">
                <h1 class='display-6'>Authentication</h1>
                <p class="text-lead">A complete login and register form</p>
            </div>
        </div>

       <div class="row">
        <div class="col-md-6">

            <div class='card card-custom'>

                <div class="card-header card-header-custom text-center">

                    <a href="" class="active" id="login-form-link mx-auto">Features [Done]</a>
                </div>
                <div class='card-body'>

                    <div class="row">
                        <div class="col-lg-12">


                            <ul class="list-group text-center">
                                <li class="list-group-item">Login / Register</li>
                                <li class="list-group-item">Profile mangement System</li>
                                <li class="list-group-item">Forget/Reset Password</li>
                                <li class="list-group-item">Remember me Option</li>

                            </ul>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-md-6 ">

            <div class='card card-custom'>


                <div class="card-header card-header-custom text-center">

                    <a href="" class="active" id="login-form-link mx-auto">Features [To complete]</a>
                </div>
                <div class='card-body'>

                    <div class="row">
                        <div class="col-lg-12">


                            <ul class="list-group text-center">
                                <li class="list-group-item">Email Verification</li>
                                <li class="list-group-item">Account Verification</li>
                                <li class="list-group-item">XSS &amp; SQL injection prevention<br><br><br></li>
                            </ul>


                        </div>
                    </div>



                </div>


            </div>
        </div>
</div>

    </div>



<!-- Footer -->
<?php include 'include/footer.php'; ?>