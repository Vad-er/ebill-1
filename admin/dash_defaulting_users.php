<?php 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php');
    require_once('../Includes/admin.php');

    $aid = $_SESSION['aid'];
    list($result1,$result2,) = retrieve_users_defaulting($_SESSION['aid']);
    $row1 = mysqli_fetch_row($result1);
    $row2 = mysqli_fetch_row($result2); 


    if (isset($_POST['defaulting_user'])) {
        $query  = "DELETE FROM user "; 
        $query .= "USING user , bill ";
        $query .= "WHERE bill.uid=user.id AND bill.status='PENDING' " ;
        $query .= "AND curdate() > adddate(bill.ddate , INTERVAL 25 DAY) " ;
        if (!mysqli_query($con,$query))
        {
                die('Error: ' . mysqli_error($con));
        }
    }

    elseif (isset($_POST['late_user'])) {
        $query  = "UPDATE transaction , bill , user ";
        $query .= "SET transaction.payable=transaction.payable + 1000.00 "; 
        $query .= "WHERE bill.uid=user.id AND bill.status = 'PENDING' ";
        $query .= "AND curdate() > bill.ddate AND curdate() < adddate(bill.ddate , INTERVAL 25 DAY ) ";
        $query .= "AND transaction.bid=bill.id AND transaction.payable=bill.amount ";

        if (!mysqli_query($con,$query))
        {
                die('Error: ' . mysqli_error($con));
        }
        
    }
    header("Location:index.php");
?>