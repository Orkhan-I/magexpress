
<?php


?>

<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <h3>Welcome</h3> <?php echo $_SESSION['user']?>
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>

                    <li>
                        <a class="" href="parameter.php"><i class="fa fa-dashboard "></i>Parametres</a>
                    </li>
                    <li>
                        <a class="" href="menular.php"><i class="fa fa-dashboard "></i>Menu</a>
                    </li>
                    <li>
                        <a class="" href="pages.php"><i class="fa fa-dashboard "></i>Pages</a>
                    </li>

                    <li>
                        <a class="" href="sliders.php"><i class="fa fa-dashboard "></i>Slider</a>
                    </li>
                    <li>
                        <a class="" href="news.php"><i class="fa fa-dashboard "></i>NEWS</a>
                    </li>

            </div>

        </nav>