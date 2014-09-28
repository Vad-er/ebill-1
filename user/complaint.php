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
                        <!-- Pills Tabbed HISTORY | NEW -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#history" data-toggle="pill">HISTORY</a>
                            </li>
                            <li class=""><a href="#new" data-toggle="pill">NEW COMPAINT</a>
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
                                                <th>Complaint Date</th>
                                                <th>Wrong bill</th>
                                                <th>STATUS</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td height="40">1</td>
                                                <td>1-9-2014</td>
                                                <td>Transaction not confirmed</td>
                                                <td>Processed</td>
                                            </tr>
                                            <tr>
                                                <td height="40">2</td>
                                                <td>1-9-2014</td>
                                                <td>Bill not delivered</td>
                                                <td>Pending</td>
                                            </tr>
                                            <tr>
                                                <td height="40">3</td>
                                                <td>1-9-2014</td>
                                                <td>Previous Complaint still pending</td>
                                                <td>Processed</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <div class="tab-pane fade" id="new">
                                <h4>New complaint Form</h4>
                                <!-- search db where id is his and status due -->
                            </div>
                            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle DASH</a>
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
