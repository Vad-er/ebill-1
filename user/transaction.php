
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
                            Transaction
                        </h1>
                        <!-- <ol class="breadcrumb ">
                            <li class="active">
                                <i class="fa fa-table"></i> Transaction
                            </li>
                        </ol> -->
                        <h4>{User} Transaction History (linked to and from bill-history bill)goes here</h4>
                        </ul>
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
