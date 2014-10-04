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
                            BILL
                        </h1>

                        <!-- Pills Tabbed HISTORY | DUE -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#history" data-toggle="pill">History</a>
                            </li>
                            <li class=""><a href="#due" data-toggle="pill">Due</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="history">
                                <!-- <h4>{User} Bills(ALL UP TO DATE) goes here{Table form}</h4> -->
                                <!-- DB RETRIEVAL search db where id is his and status is processed -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Bill Date</th>
                                                <th>UNITS Consumed</th>
                                                <th>Amount</th>
                                                <th>Due Date</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td height="40">1</td>
                                                <td>1-9-2014</td>
                                                <td>700</td>
                                                <td>14000</td>
                                                <td>1-10-2014</td>
                                                <td>PROCESSED</td>
                                            </tr>
                                            <tr>
                                                <td height="40">2</td>
                                                <td>1-7-2014</td>
                                                <td>800</td>
                                                <td>16000</td>
                                                <td>1-8-2014</td>
                                                <td>PENDING</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="due">
                                <!-- <h4>{User} due bill info goes here and each linked to a transaction form </h4> -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Bill Date</th>
                                                <th>UNITS Consumed</th>
                                                <th>Due Date</th>
                                                <th>DUES</th>
                                                <th>Payable</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td height="40">1</td>
                                                <td>1-8-2014</td>
                                                <td>700</td>
                                                <td>1-9-2014</td>
                                                <td>0</td>
                                                <td>14000</td>
                                                <td>
                                                    <button type="submit" class="btn btn-success">PAY</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- search db where id is his and status due -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
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
