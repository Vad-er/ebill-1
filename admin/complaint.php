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
                            COMPLAINTS
                        </h1>
                        <ol class="breadcrumb">
                          <li>Complaint</li>
                          <li class="active">History</li>
                        </ol>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                    
                            <div class="table-responsive" style="padding-top: 0">
                                <table class="table table-hover table-striped table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>User</th>
                                            <th>COMPLAINT</th>
                                            <th>STATUS</th>
                                            <th>Process</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            include('../Includes/admin.php');
                                            $result = retrieve_complaints_history($_SESSION['aid']);

                                            // Initialising #
                                            $counter = 1;
                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td height="40"><?php echo $counter ?></td>
                                                    <td><?php echo $row['uname'] ?></td>
                                                    <td><?php echo $row['complaint'] ?></td>
                                                    <td><?php echo $row['status'] ?></td>
                                                    <td width="70">
                                                    <form action="process_complaint.php" method="post">
                                                        <input type="hidden" name="cid" value=<?php echo $row['id'] ?> >
                                                        <button type="submit" name="complaint_process" class="btn btn-success form-control">PROCESS COMPLAINT  </button>
                                                    </form>
                                                        
                                                    </td>
                                                </tr>
                                            <?php 
                                                $counter=$counter+1;
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

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
