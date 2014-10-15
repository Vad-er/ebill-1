<?php 
    require_once('head_html.php'); 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    require_once('../Includes/user.php'); 
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
                            Complaint
                            <button class="btn btn-primary" data-toggle="modal" style="position:relative;left:70%" data-target="#Complaint">New Complaint</button>           
                        </h1>
                        <ol class="breadcrumb">
                          <li>Complaint</li>
                          <li class="active">History</li>
                        </ol>
                        <!-- <h4>{User} complaint history goes here</h4> -->
                        <!-- DB RETRIEVAL search db where id is his and status is processed/pending -->
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Complaint</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $id=$_SESSION['uid'];
                                    $query1 = "SELECT COUNT(*) FROM complaint where uid={$id}";
                                    $result1 = mysqli_query($con,$query1);
                                    $row1 = mysqli_fetch_row($result1);
                                    $numrows = $row1[0];
                                    include("paging1.php");

                                    $result = retrieve_complaints($_SESSION['uid'],$offset, $rowsperpage);
                                    
                                    while($row = mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                            <td height="40"><?php echo $row['id']  ?></td>
                                            <td><?php echo $row['complaint'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <?php include("paging2.php");  ?>
                        </div>
                        <!-- /.table-responsive -->

                        <!-- New complain Modal -->
                        <div class="modal fade" id="Complaint" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h3 class="modal-title text-danger"><b>New Complaint</b></h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal new_complaint"  role="form"  action="sub_complaint.php" method="post">
                                            <!-- Textarea -->
                                            <div class="row form-group complaint_textarea">
                                                <!-- <label class="control-label" for="complaint">Complaint</label> -->
                                                <!-- <textarea class="form-control" id="complaint" name="complaint" placeholder="Complaint Goes here"></textarea> -->
                                                <select  class="form-control" id="complaint" name="complaint" placeholder="select your grievance">
                                                    <!-- <option value="">Select your grivance</option> -->
                                                    <option value="" disabled selected>Select your option</option>
                                                    <option value="Bill Not Correct">Bill Not Correct</option>
                                                    <option value="Bill Generated Late">Bill Generated Late</option>
                                                    <option value="Transaction Not Processed">Transaction Not Processed</option>
                                                    <option value="Previous Complaint Not Processed">Previous Complaint Not Processed</option>
                                                </select>
                                                <!-- <h4 class="text-center">Complaints are submitted automatiaclly after <code>SUBMIT</code></h4> -->
                                            </div>
                                    </div>    
                                    <div class="modal-footer">
                                        <button id="submit" name="submit" class="btn btn-lg btn-success">Submit</button>
                                    </div>    
                                        
                                    </form>
                                    
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
                    <!-- /.col-lg -->
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
