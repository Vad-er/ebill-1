<?php 
require_once("Includes/config.php");
require_once("Includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.png">

    <title>Bolt</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i><b>Bolt</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" name="pass" class="form-control">
                    </div>
                    <div class="btn-group  btn-group-sm">
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <button type="button" class="btn">Forgot Password</button>
                    </div>

                </form>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Electricity Bill<br>Management System</h1>
                    <p>This website at the end of its construction will act as a consumer oriented service for users for easy payment of their respective <b>Electricity Bill</b> as well as interact with their providers in case of any queries or grivances.</p>
                </div>
                <!-- /col-lg-6 -->
                <div class="col-lg-6">
                    <h1>Sign Up</h1>
                    <form class="form-horizontal" role="form">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="fname" class="form-control" id="fname" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="lname" class="form-control" id="lname" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="number" class="form-control" id="contactNo" placeholder="Contact No.">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10">
                                <button type="submit" class="btn btn-default">Sign in</button>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- /col-lg-6 -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /headerwrap -->


    <div class="container">
        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>How this Portal woks</h1>
                <h3>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h3>
            </div>
        </div>
        <!-- /row -->

        <div class="row mt centered">
            <div class="col-lg-4">
                <img src="assets/img/ser01.png" width="180" alt="">
                <h4>1 - Browser Compatibility</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
            </div>
            <!--/col-lg-4 -->

            <div class="col-lg-4">
                <img src="assets/img/ser02.png" width="180" alt="">
                <h4>2 - Email Campaigns</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

            </div>
            <!--/col-lg-4 -->

            <div class="col-lg-4">
                <img src="assets/img/ser03.png" width="180" alt="">
                <h4>3 - Gather Your Notes</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>

            </div>
            <!--/col-lg-4 -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->


    <div class="container">
        <hr>
        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>Bolt is for Everyone.</h1>
                <h3>Some descript goes here</h3>
            </div>
        </div>
        <!-- /row -->

        <! -- CAROUSEL -->
        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="assets/img/p01.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/p02.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/p03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col-lg-8 -->
        </div>
        <!-- /row -->
    </div>
    <! --/container -->
    <?php 
    require_once("footer.php");
    ?>
    <!-- <div class="container">
        <hr>
        <p class="centered">Created by Ameen M Khan & Abhishek Bhatnagar</p>
    </div> -->
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
