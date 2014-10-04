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
                        <!-- <h4>Transaction History goes here</h4> -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#history" data-toggle="pill">HISTORY</a>
                            </li>
                        </ul>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-bordered table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Bill Date</th>
                                        <th>Amount</th>
                                        <th>Dues (if any)</th>
                                        <th>Final Amount Payed</th>
                                        <th>Transaction Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td height="40">1</td>
                                        <td>1-9-2014</td>
                                        <td>14000</td>
                                        <td>300</td>
                                        <td>14300</td>
                                        <td>1-10-2014</td>
                                    </tr>
                                    <tr>
                                        <td height="40">2</td>
                                        <td>1-7-2014</td>
                                        <td>14000</td>
                                        <td>0</td>
                                        <td>14000</td>
                                        <td>1-8-2014</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle DASH</a> -->
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
