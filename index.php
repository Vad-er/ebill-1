<?php 
require_once("Includes/config.php");
require_once("Includes/session.php");

if(isset($_SESSION['logged']))
{
    if ($_SESSION['logged'] == true)
    {
        if ($_SESSION['account']=="admin") {
                header("Location:admin/index.php");
            }
        elseif ($_SESSION['account']=="user") {
                header("Location:user/index.php");
            }
    }    
}

if(isset($_POST['login_submit'])) {
    if(!(isset($_POST['email']))) {
        if(!(isset($_POST['pass']))) {
            location('index.php');    
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="data:image/x-icon;base64,AAABAAEAEBAAAAEAIABoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIKKCYiWgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIgKCYiuygmIhgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJDKCYi7SgmIlIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJzKCYi/SgmIqAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIgooJiKmKCYi/ygmIuAoJiIOAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIh8oJiLPKCYi/ygmIv4oJiI/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIkEoJiLrKCYi/ygmIv8oJiKMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmInAoJiL8KCYi/ygmIv8oJiL/KCYiySgmIpwoJiJzKCYiKQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIhYoJiJyKCYinCgmIsIoJiL8KCYi/ygmIv8oJiL/KCYinygmIgkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiJTKCYi/ygmIv8oJiL5KCYiaAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIeKCYi7ygmIv8oJiLjKCYiNwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoJiIDKCYixCgmIv8oJiK+KCYiFQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYigigmIv8oJiKJKCYiAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiPigmIvAoJiJSAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKCYiEigmIrooJiInAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgmIlooJiIMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//8AAP/3AAD/7wAA/88AAP8fAAD+PwAA/D8AAPgfAAD4DwAA/j8AAPx/AAD4/wAA8f8AAPf/AADv/wAA//8AAA==" rel="icon" type="image/x-icon" />

    <title>Bolt</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
            <div class="navbar-collapse collapse" >
                <?php include("login.php"); ?>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div id="headerwrap">
        <div class="darkhearderwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 signup">
                        <h1>Electricity Bill<br>Management System</h1>
                        <p>This website at the end of its construction will act as a consumer oriented service for users for easy payment of their respective <b>Electricity Bill</b> as well as interact with their providers in case of any queries or grivances.</p>
                    </div>
                    <!-- /col-lg-6 -->
                    <div class="col-lg-6">
                        <h1>Sign Up</h1>
                        <?php include("signup.php"); ?>
                    </div>
                    <!-- /col-lg-6 -->

                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
            </div>
    </div>
    <!-- /headerwrap -->


    <div class="container">
        <div class="row mt centered">
            <div class="col-lg-6 col-lg-offset-3">
                <h1>How this Portal woks</h1>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora esse, inventore asperiores necessitatibus porro, beatae dolore numquam odit voluptatum fugiat voluptatem doloremque et rem, repellat eum facere. Blanditiis, distinctio.</h3>
            </div>
        </div>
        <!-- /row -->

        <div class="row mt centered">
            <div class="col-lg-4">
                <img src="assets/img/ser01.png" width="180" alt="">
                <h4>1 - Login</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda impedit architecto a labore eum saepe fugiat ex culpa, ab dolor asperiores eligendi dolore temporibus, suscipit quo magni odio iusto quasi?</p>
            </div>
            <!--/col-lg-4 -->

            <div class="col-lg-4">
                <img src="assets/img/ser02.png" width="180" alt="">
                <h4>2 - Peruse Bills</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fuga deserunt similique, iure tenetur debitis perspiciatis, modi aut dolores illum iste, in error animi accusantium possimus rerum dolor facilis sequi.</p>

            </div>
            <!--/col-lg-4 -->

            <div class="col-lg-4">
                <img src="assets/img/ser03.png" width="180" alt="">
                <h4>3 - Transact</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam ducimus, vitae tempore recusandae explicabo sapiente eligendi voluptates repellat voluptatem porro. Facere porro, odit exercitationem, ducimus quis quam quasi id magnam.</p>

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


    <!--=======================JS=========================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery Version 1.11.0 -->
    <script src="../assets/js/jquery-1.11.0.js"></script>
    <script>
    function validateForm() {
        var x = document.forms["myForm"]["email"].value;
        var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");
        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
            alert("Not a valid e-mail address");
            return false;
        }
    }
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
