<?php 


    function retrieve_bills_generated($id) {
        include("config.php");
        $query  = "SELECT user.name AS user, bill.bdate AS bdate , bill.units AS units , bill.amount AS amount ";
        $query .= ", bill.ddate AS ddate, bill.status AS status ";
        $query .= " FROM user , bill ";
        $query .= " WHERE user.id=bill.uid AND aid={$id} ";
        // echo $query;
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        return $result;
    }
 ?>
    
