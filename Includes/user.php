<?php 
    
    function retrieve_complaints ($id,$offset, $rowsperpage) {
        include("config.php");
        $query = "SELECT * FROM complaint where uid={$id} ";
        $query .= "LIMIT {$offset}, {$rowsperpage}";
        $result1 = mysqli_query($con,$query);
        return $result1;
    }

    function retrieve_bills_history($id,$offset, $rowsperpage) {
        include("config.php");
        $query = "SELECT * FROM bill where uid={$id} ";
        $query .= "ORDER BY bdate DESC ";
        $query .= "LIMIT {$offset}, {$rowsperpage} ";
        $result = mysqli_query($con,$query);
        return $result;
    }

    function retrieve_bills_due($id,$offset, $rowsperpage) {
        include("config.php");
        $query  = "SELECT bill.bdate AS bdate, bill.units AS units, bill.ddate AS ddate, transaction.payable AS payable, ";
        $query .= " bill.amount AS amount ,transaction.payable-bill.amount AS dues , bill.id AS id ";
        $query .= "FROM bill , transaction ";
        $query .= "WHERE transaction.bid=bill.id AND bill.uid={$id} AND bill.status='PENDING' ";
        $query .= "ORDER BY bill.ddate desc "; 
        $query .= "LIMIT {$offset}, {$rowsperpage} ";
        $result = mysqli_query($con,$query);
        return $result;
    }
    function retrieve_transaction_history($id,$offset, $rowsperpage) {
        include("config.php");
        $query  = "SELECT transaction.id AS id , bill.bdate AS bdate, transaction.pdate AS pdate, transaction.payable AS payable, ";
        $query .= " bill.amount AS amount ,transaction.payable-bill.amount AS dues ";
        $query .= "FROM bill , transaction ";
        $query .= "WHERE transaction.bid=bill.id AND bill.uid={$id} ";
        $query .= "ORDER BY bill.ddate desc "; 
        $query .= "LIMIT {$offset}, {$rowsperpage} ";
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

    function retrieve_user_stats($id)
    {
        include("config.php");
        $query1  = " SELECT count(id) AS unprocessed_bills FROM bill  WHERE status = 'PENDING'  AND uid = {$id} ";
        $query2  = " SELECT count(id) AS payed_bills FROM bill  WHERE uid = {$id} AND status='PROCESSED'" ;
        $query3  = " SELECT count(id) AS unprocessed_complaints from complaint where status='NOT PROCESSED' AND uid = {$id} ";
        // echo $query;
        
        $result1 = mysqli_query($con,$query1);
        if($result1 === FALSE) {
            echo "FAILED1";
            die(mysql_error()); // TODO: better error handling
        }

        $result2 = mysqli_query($con,$query2);
        if($result2 === FALSE) {
            echo "FAILED2";
            die(mysql_error()); // TODO: better error handling
        }

        $result3 = mysqli_query($con,$query3);
        if($result3 === FALSE) {
            echo "FAILED3";
            die(mysql_error()); // TODO: better error handling
        }

        return array($result1,$result2,$result3);
    }

 ?>