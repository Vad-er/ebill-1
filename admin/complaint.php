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
                            COMPLAINTS
                        </h1>
                        <ol class="breadcrumb">
                          <li>Complaint</li>
                          <li class="active">Not Processed</li>
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
                                            $id=$_SESSION['aid'];
                                            $query1 = "SELECT COUNT(complaint.id) FROM user , complaint  ";
                                            $query1.= " WHERE complaint.uid=user.id AND status='NOT PROCESSED' AND complaint.aid={$id}";
                                            $result1 = mysqli_query($con,$query1);
                                            $row1 = mysqli_fetch_row($result1);
                                            $numrows = $row1[0];
                                            include("paging1.php");
                                            $result = retrieve_complaints_history($_SESSION['aid'],$offset, $rowsperpage);
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
                                <?php include("paging2.php");  ?>
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
