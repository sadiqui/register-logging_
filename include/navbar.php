<nav class="navbar navbar-expand-md navbar-dark mb-3" style="background-color: #3f51b5; font-weight: bold;">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home </a>
                    <!-- echo(URLROOT); -->
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php
                     if (Session::get('userlogin') == true || isset($_COOKIE['user'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo(URLROOT);?>/services/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo(URLROOT);?>/services/logout.php?action=logout">Logout</a>
                </li>

                <?php } else {
                    ?>

                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo(URLROOT);?>/services/register.php">Register </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo(URLROOT);?>/services/login.php">Login</a>
                </li>

                <?php } ?>
            </ul>

        </div>
    </div>
</nav>