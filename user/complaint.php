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
                            Complaint
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Complaint
                            </li>
                        </ol> -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#processed" data-toggle="pill">Processed</a>
                            </li>
                            <li class=""><a href="#pending" data-toggle="pill">Pending</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="processed">
                                <h4>{User} complaint history goes here</h4>
                                <!-- DB RETRIEVAL search db where id is his and status is processed -->
                            </div>
                            <div class="tab-pane fade" id="pending">
                                <h4>{User} due bill info goes here</h4>
                                <!-- search db where id is his and status due -->
                            </div>
                        </div>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle DASH</a>
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
