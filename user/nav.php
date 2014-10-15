<?php 
    require_once ("../Includes/session.php") ;
    if (isset($_SESSION['user'])) 
    {
        $user = $_SESSION['user'];
    }
    else
        header("../index.php");
    
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
       <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> -->
        <a class="navbar-brand" href="index.php"><i class="fa fa-bolt"></i> BOLT</a> 
    </div>
    <!-- /.navbar-header -->
    
    <a style="position:absolute;top:35px;left:-1px;font-size:20px;color:#7f7f7f;padding:5px;background-color: #000;border-bottom-right-radius:10px; " href="#menu-toggle" id="menu-toggle" <i class="fa fa-dedent"></i></a>

    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav" style="margin-right: 10px">
        <li class="dropdown">
            <?php 
                echo "<a style=\"font-size:16px\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> $user <b class=\"caret\"></b></a> ";
             ?>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" data-toggle="modal" data-target="#profile"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#change_password"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /.top-nav -->
</nav>
<!-- /.navbar -->

<?php 
    require_once("../Includes/user.php");
    $result = retrieve_user_details($_SESSION['uid']);
    $row = mysqli_fetch_assoc($result);
 ?>

 <!-- MODAL -> USER INFO -->
<div class="modal fade" id="profile" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title"><b><i class="fa fa-fw fa-user"></i>PROFILE</b></h3>
            </div>
        <div class="modal-body text-center">
            <h4>Name : <code><?php echo $row['name'] ?></code></h4>
            <h4>Email : <code><?php echo $row['email'] ?></code></h4>
            <h4>Phone No : <code><?php echo $row['phone'] ?></code></h4>
            <h4>Address : <code><?php echo $row['address'] ?></code></h4>
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->      


<!-- MODAL -> CHANGING PASSWORD -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title"><b><i class="fa fa-fw fa-gear"></i>Settings</b></h3>
            </div> 
            <?php include("change_password.php") ?>
<form action="change_password.php" method="post">                  
        <div class="modal-body text-center">
            <h4>Current Password:<code><?php echo $row['pass'] ?></code></h4>
            <h4>New Password:</h4>
            <input class="form-control" type="password" placeholder="NEW PASSWORD" name="new_password" id="new_password" >
        </div>
        <div class="modal-footer">                                        
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                <button type="submit" id="change" name="change" class="btn btn-success ">CONFIRM</button>
</form> 
        </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->                                                                                                                        