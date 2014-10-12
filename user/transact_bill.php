<?php 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php');
    require_once('../Includes/user.php');

    $uid = $_SESSION['uid'];
    $bdate = $_POST['bdate'];
    $ddate = $_POST['ddate'];
    $units = $_POST['units'];
    $amount = $_POST['amount'];
    $payable = $_POST['payable'];

//UPDATE BILL
//UPDATE TRANSACTION

    if (isset($_POST['pay_bill'])) {
        $query  =  "UPDATE user , bill , transaction ";
        $query .=  "SET bill.status='PROCESSED' , transaction.status='PROCESSED' , pdate=curdate() ";
        $query .=  "where user.id={$uid} AND bill.id=transaction.bid AND bill.units={$units} "; 
        $query .=  "AND bill.amount={$amount} AND transaction.payable={$payable}" ;

        if (!mysqli_query($con,$query))
        {
                die('Error: ' . mysqli_error($con));
        }
    }

    header("Location:bill.php");
?>