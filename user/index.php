<!DOCTYPE html>
<html lang="en">

<?php require_once('head_html.php'); ?>

<body>

    <div id="wrapper">
        <?php 
            require_once("nav.php");
            require_once("sidebar.php");
        ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard
                            <small>{USER} Overview</small>
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol> -->
                        <!-- <h2>SOME DATA</h2> -->

                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">Toggle DASH</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php 
    require_once("footer.php");
    require_once("js.php");
?>

</body>

</html>
