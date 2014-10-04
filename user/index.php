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
                            <small>Overview</small>
                        </h1>
                      <!--   <?php
                            require_once("../Includes/session.php");
                            require_once("../Includes/config.php");
                            $uid = $_SESSION['uid'];
                            $sql= " SELECT * FROM complaint where id='$uid' ";
                            $result = mysqli_query($con,$sql); 
                            echo mysqli_num_rows($result);
                        ?> -->


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
