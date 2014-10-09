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
                            BILL
                        </h1>

                        <!-- Pills Tabbed GENERATED | GENERATE -->
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a href="#generated" data-toggle="pill">Generated History</a>
                            </li>
                            <li class=""><a href="#generate" data-toggle="pill">Generate New</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="generated">
                                <!-- <h4>{User} Bills(ALL UP TO DATE) goes here{Table form}</h4> -->
                                <!-- DB RETRIEVAL search db where id is his and status is processed -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>User</th>
                                                <th>Bill Date</th>
                                                <th>UNITS Consumed</th>
                                                <th>Amount</th>
                                                <th>Due Date</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            include('../Includes/admin.php');
                                            $result = retrieve_bills_generated($_SESSION['aid']);

                                            // Initialising #
                                            $counter = 1;
                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <td height="40"><?php echo $counter ?></td>
                                                    <td><?php echo $row['user'] ?></td>
                                                    <td><?php echo $row['bdate'] ?></td>
                                                    <td><?php echo $row['units'] ?></td>
                                                    <td><?php echo $row['amount'] ?></td>
                                                    <td><?php echo $row['ddate'] ?></td>
                                                    <td><?php echo $row['status'] ?></td>
                                                </tr>
                                            <?php 
                                                $counter=$counter+1;
                                            }
                                            ?>
                                        </tbody>
                                        
                                    </table>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="generate">
                                <!-- <h4>{User} due bill info goes here and each linked to a transaction form </h4> -->
                                <!-- create a clickable list of USERS leading to a modal form to fill up units -->
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-bordered table-condensed">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>USER</th>
                                                <th>UNITS</th>
                                                <th>BILL DATE</th>
                                                <th>DUE DATE</th>
                                                <th>GENERATE</th>    
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $result = retrieve_bill_data();
                                            // Initialising #
                                            $counter = 1;
                                            echo $row['bdate'];
                                            while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                                <tr>
                                                    <form action="generate_bill.php" method="post">
                                                        <td height="40"><?php echo $counter ?></td>

                                                        <input type="hidden" name="uid" value=<?php echo $row['uid'] ?> >
                                                        <input type="hidden" name="uname" value=<?php echo $row['uname'] ?> >
                                                        
                                                        <td>
                                                            <?php echo $row['uname'] ?>
                                                        </td>
                                                        <td>                                                
                                                            <input class="form-control" type="tel" name="units" placeholder="ENTER UNITS">
                                                        </td>
                                                        <td>
                                                            <?php echo $row['bdate'] ?> 
                                                        </td>
                                                        <td>
                                                            <?php echo $row['ddate'] ?>
                                                        </td>
                                                        <td>
                                                            <button type="submit" name="generate_bill" class="btn btn-success">GENERATE BILL  </button>
                                                        </td>
                                                        
                                                        
                                                    </form>
                                                </tr>
                                            <?php
                                            $counter = $counter +1;
                                            }
                                            ?>
                                        </tbody>
                                        
                                    </table>

                                </div>



                            </div>
                        </div>
                        <!-- /.tab-content -->
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
