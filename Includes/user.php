<?php 
    
    function retrieve_complaints ($id) {
        include("config.php");
        $query = "SELECT * FROM complaint where uid={$id} ";
        $query .= "ORDER BY id DESC";
        $result1 = mysqli_query($con,$query);
        return $result1;
    }

    function retrieve_bills_history($id) {
        include("config.php");
        $query = "SELECT * FROM bill where uid={$id} ";
        $query .= "ORDER BY id DESC";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function retrieve_bills_due($id) {
        include("config.php");
        $query  = "SELECT bill.bdate AS bdate, bill.units AS units, bill.ddate AS ddate, transaction.payable AS payable, ";
        $query .= " bill.amount AS amount ,transaction.payable-bill.amount AS dues ";
        $query .= "FROM bill , transaction ";
        $query .= "WHERE transaction.bid=bill.id AND bill.uid={$id} AND bill.status='PENDING' ";
        $query .= "ORDER BY ddate desc"; 
        $result = mysqli_query($con,$query);
        return $result;
    }
    function retrieve_transaction_history($id) {
        include("config.php");
        $query  = "SELECT bill.bdate AS bdate, transaction.pdate AS pdate, transaction.payable AS payable, ";
        $query .= " bill.amount AS amount ,transaction.payable-bill.amount AS dues ";
        $query .= "FROM bill , transaction ";
        $query .= "WHERE transaction.bid=bill.id AND bill.uid={$id} ";
        $query .= "ORDER BY ddate desc"; 
        $result = mysqli_query($con,$query);
        return $result;
    }

    function retrieve_user_details($id) {
        include 'config.php';
        $query  = "SELECT * FROM user ";
        $result = mysqli_query($con,$query);
        if (!$result)
            {
                die('Error: ' . mysqli_error($con));
            }  
        return $result;
    }


 ?>