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
                            Dashboard
                            <small> Overview</small>
                            <!-- Like bills processed by the admin ; bills generated , unprocessed complaint
                            maybe a stats infograph -->
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <?php 
                 ?>
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-bolt">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-rupee fa-3x"></i>
                                    </div>
                                    <div class="col-md-9 text-right">
                                        <div class="huge"><b></b>26</div>
                                        <div>USER LATE!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"><b>ADD DUES</b></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right fa-2x"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!-- ./panel-closes -->

                    <div class="col-lg-3 col-xs-6">
                        <div class="panel panel-bolt2">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bullhorn fa-3x"></i>
                                    </div>
                                    <div class="col-md-9 text-right">
                                        <div class="huge"><b></b>26</div>
                                        <div>USER DEFAULTING!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left"><b>REMOVE USER(s)</b></span>
                                    <span class="pull-right"><i class="fa fa-trash fa-2x"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- ./panel-closes -->
                </div><!-- ./row -->

                <h1 style="padding-left:30px; "><small>Stats</small></h1>
                <div class="row" style="margin-top: 20px;">
                    <div class=".col-lg-3 col-xs-8">
                    <?php 

                        list($result1,$result2,$result3) = retrieve_admin_stats($_SESSION['aid']);
                        $row1 = mysqli_fetch_row($result1);
                        $row2 = mysqli_fetch_row($result2);
                        $row3 = mysqli_fetch_row($result3);
                     ?>
                        <table class="table  ">
                            <tbody>
                                <tr>
                                    <td>
                                        <h4>Number of Bills | Generated</h4>
                                    </td>
                                    <td class="success">
                                    <h4>
                                        <?php 
                                            echo $row2[0];
                                        ?>
                                    </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h4>Number of Bills | Unprocessed</h4>
                                    </td>
                                    <td class="success">
                                        <h4>
                                            <?php 
                                                echo $row1[0];
                                            ?>
                                        </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h4>Number of Complaints | Unprocessed</h4>
                                    </td>
                                    <td class="success">
                                        <h4>
                                            <?php 
                                                echo $row3[0];
                                            ?>
                                        </h4>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- ./col-md-12 -->

                </div><!-- ./row -->

                
                <hr />

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
