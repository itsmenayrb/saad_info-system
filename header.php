<?php
    session_start();
    include ("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- BOOTSTRAP, js AND CSS SCRIPT -->
    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
    <link href="assets/bootstrap/css/glyphicons.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- END OF BOOSTRAP AND CSS SCRIPT -->

    <div class="jumbotron jumbotron-fluid"> <!-- JUMBOTRON -->
        <div class="container">
            <div class="row">
                <div class="d-none d-md-block col-md-2 col-lg-2">
                    <a href="index.php"><img src="img/logo.png" class="img-responsive" height="135" width="135" style="margin-top: 10px;margin-left: 10px;max-width: 100%;height: auto;"></a>
                </div>
                <div class="d-none d-md-block col-sm-7 col-md-6 col-lg-5" style="font-family: 'Baskerville Old Face';">
                    <label class="h6" style="margin-top: 20px; font-size: 2vw;"><u>Republic of the Philippines</u></label><br>
                    <label class="h1" style="margin-top: -10px;margin-left: -25px;font-size: 3vw;">Barangay Salitran II</label><br>
                    <label class="h4" style="margin-top: -20px;font-size: 2vw;">City of Dasmariñas, Province of Cavite</label>
                </div>
                <div class="d-none d-md-block col-sm-3 col-md-4 col-lg-5 text-right" style="font-family: 'Baskerville Old Face';">
                    <label class="h6" style="margin-top: 40px;font-size: 1.75vw;"><u>Philippine Standard Time</u></label>
                    <label class="h6" style="margin-top: -10px;font-size: 1.75vw;"><?php date_default_timezone_set("Asia/Hong_Kong"); echo date("l,m/d/Y") . " "; echo date("h:i:sa"); ?></label>
                </div>
            </div>
        </div>
    </div> <!-- END OF JUMBOTRON -->

    <!-- START OF NAVIGATION -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Barangay Salitran II</a>
            <!-- Brand and toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNavigation" aria-expanded="false"
            aria-controls="mainNavigation" aria-label="Toggle Navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contain links, forms  and other data for toggling -->
            <div class="collapse navbar-collapse" id="mainNavigation">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span> </a> </li>
                    <li class="nav-item"><a class="nav-link" href="index.php">News</a> </li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a> </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Downloads</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Barangay ID</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Barangay Clearance</a>
                            <a class="dropdown-item" href="#">Cedula</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-1 form-control-sm" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-info btn-sm mr-sm-5" type="submit">Search</button>
                    <?php if(isset($_SESSION['Username'])){ ?>
                        <li class="navbar-nav dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;"><?php echo $_SESSION['Username'];?></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href='update.resident.php' class="dropdown-item">Account Settings</a>
                                <a href='#' class="dropdown-item">Security Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href='includes/logout.inc.php' class="dropdown-item">Sign Out</a>
                            </div>
                        </li>
                    <?php } else { ?>
                            <a role='button' class='btn btn-primary btn-sm mr-sm-2' href="login.php">Login</a>
                            <a role='button' class='btn btn-outline-secondary btn-sm my-2 my-sm-0' href="register.php"> Register</a>
                    <?php } ?>
                </form>
            </div>
        </div>
    </nav>
    <!-- END OF NAVIGATION -->
</head>
<body>