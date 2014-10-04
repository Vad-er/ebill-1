<?php
    require_once('../Includes/user.php'); 
    require_once('head_html.php'); 
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
                        </h1>
                        <!-- Pills Tabbed HISTORY | NEW -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#history" data-toggle="pill">HISTORY</a>
                            </li>
                            <li class=""><a href="#new" data-toggle="pill">NEW COMPLAINT</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="history">
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
                                            $result = retrieve_complaints($_SESSION['uid']);
                                            // Initialising #
                                            $counter = 1;
                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td height="40"><?php echo $counter ?></td>
                                                    <td><?php echo $row['complaint'] ?></td>
                                                    <td><?php echo $row['status'] ?></td>
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
                            <div class="tab-pane fade" id="new">
                                <!-- <h4>New complaint Form</h4> -->
                                <!-- search db where id is his and status due -->
                                <form class="form-horizontal new_complaint"  role="form"  action="sub_complaint.php" method="post">
                                    <!-- Textarea -->
                                    <div class="row form-group">
                                        <!-- <label class="control-label" for="complaint">Complaint</label> -->
                                        <textarea rows="10" cols="150" id="complaint" name="complaint" placeholder="Complaint Goes here"></textarea>
                                    </div>

                                    <!-- Button -->
                                    <div class="row form-group">
                                        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
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
