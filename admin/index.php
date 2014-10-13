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
                    list($result1,$result2,) = retrieve_users_defaulting($_SESSION['aid']);
                    $row1 = mysqli_fetch_row($result1);
                    $row2 = mysqli_fetch_row($result2);
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
                                        <div class="huge"><b></b><?php echo $row1[0] ?></div>
                                        <div>USER LATE!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#late">
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
                                        <div class="huge"><b></b><?php echo $row2[0] ?></div>
                                        <div>USER DEFAULTING!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#defaulting">
                                <div class="panel-footer">
                                    <span class="pull-left"><b>REMOVE USER(s)</b></span>
                                    <span class="pull-right"><i class="fa fa-trash fa-2x"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div> <!-- ./panel-closes -->
                </div><!-- ./row -->

                <!-- STATISTICS -->
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

                 <!-- New Modal FOR DISHING OUT DUES-->
                                <div class="modal fade" id="late" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title"><b>ADD DUES TO USERS</b></h3>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p><h4>ARE YOU SURE?</h4></p>
                                                <p>Do it today or forever hold your speech!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="dash_defaulting_users.php" method="post">                                               
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                                    <button type="submit" id="late_user" name="late_user" class="btn btn-success ">YES</button>
                                                </form> 
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                 <!-- New Modal FOR REMOVING USERS-->
                                <div class="modal fade" id="defaulting" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h3 class="modal-title"><b>DELETE USERS</b></h3>
                                            </div>
                                            <div class="modal-body text-center">
                                                <p><h4>ARE YOU SURE?</h4></p>
                                                <p>Do it today or forever hold your speech!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="dash_defaulting_users.php" method="post">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">NO</button>
                                                    <button type="submit" id="defaulting_user" name="defaulting_user" class="btn btn-success ">YES</button>
                                                </form>
                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->

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
