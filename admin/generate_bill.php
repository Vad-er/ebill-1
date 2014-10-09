<?php 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php');
    require_once('../Includes/admin.php');

    $aid = $_SESSION['aid'];
    //set dafaulted variables
    $result = retrieve_bill_data();
    $row = mysqli_fetch_assoc($result);
    
    $bdate = $row['bdate'];
    $ddate = $row['ddate'];


    // if (isset($_POST['bdate'])) {
    //     $bdate = $_POST['bdate'];
    // }
    // if (isset($_POST['ddate'])) {
    //     $ddate = $_POST['ddate'];    }
    if (isset($_POST['uid'])) {
        $uid = $_POST['uid'];
    }if (isset($_POST['units'])) {
        $units = $_POST['units']; 
    }if (isset($_POST['uname'])) {
        $uname = $_POST['uname']; 
    }

    if (isset($_POST['generate_bill'])) {
        if(isset($_POST["units"]) && !empty($_POST["units"]))
        {
            $query1 = "call unitstoamount({$units} , @x)";
            // echo $query1;
            $result1 = mysqli_query($con,$query1);  
            $query  = " INSERT INTO bill (aid , uid , units , amount , status , bdate , ddate )";
            $query .= " VALUES ( {$aid} , {$uid} , {$units} , @x , 'PENDING' , '{$bdate}' , '{$ddate}' )";
            $result = mysqli_query($con,$query);  
            if (!mysqli_query($con,$query1))
            {
                die('Error: ' . mysqli_error($con));
            }
            
            
        }  
    }
    header("Location:bill.php");
?>