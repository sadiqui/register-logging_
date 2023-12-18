<!-- Include header.php -->
<?php include '../include/header.php'; ?>
<!-- end of header.php  -->

<!-- Check Session -->
<?php Session::checkSession(); ?>
<!-- End Of Check Login -->


    <!-- Navbar -->
    <?php include '../include/navbar.php'; ?>

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

                    <a href="" class="active" id="login-form-link mx-auto">Features [Part - 1]</a>
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

                    <a href="" class="active" id="login-form-link mx-auto">Features [Part - 2]</a>
                </div>
                <div class='card-body'>

                    <div class="row">
                        <div class="col-lg-12">


                            <ul class="list-group text-center">
                                <li class="list-group-item">Email Verification</li>
                                <li class="list-group-item">Account Verification</li>
                                <li class="list-group-item">XSS &amp; SQL injection prevention</li>
                            </ul>


                        </div>
                    </div>

                </div>


            </div>
        </div>
</div>

    </div>



<!-- Footer -->
<?php include '../include/footer.php'; ?>

