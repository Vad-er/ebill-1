<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/admin.php'); 
?>

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
                            USERS
                            <small>Details</small>
                            <!-- Like bills processed by the admin ; bills generated , unprocessed complaint
                            maybe a stats infograph -->
                        </h1>
                        <ol class="breadcrumb">
                          <li>User</li>
                          <li class="active">Details</li>
                        </ol>
                        <div class="table-responsive" style="padding-top: 0">
                                <table class="table table-hover table-striped table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User Name</th>
                                            <th>EMAIL</th>
                                            <th>PHONE NO</th>
                                            <th>ADDRESS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                            $id=$_SESSION['aid'];
                                            $query1 = "SELECT COUNT(*) FROM user";
                                            $result1 = mysqli_query($con,$query1);
                                            $row1 = mysqli_fetch_row($result1);
                                            $numrows = $row1[0];
                                            include("paging1.php");
                                            // include('../Includes/admin.php');
                                            $result = retrieve_users_detail($_SESSION['aid'],$offset, $rowsperpage);

                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td height="40"><?php echo $row['id'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['phone'] ?></td>
                                                    <td><?php echo $row['address'] ?></td>                                                    
                                                </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                                <?php include("paging2.php");  ?>
                        </div>
                        <!-- ./table -rsponsive -->
                        
                    </div><!-- ./col -->

                </div> <!-- /.row -->

            </div><!-- /.container-fluid -->

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
