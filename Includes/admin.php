<?php 


    function retrieve_bills_generated($id) {
        include("config.php");
        $query  = "SELECT user.name AS user, bill.bdate AS bdate , bill.units AS units , bill.amount AS amount ";
        $query .= ", bill.ddate AS ddate, bill.status AS status ";
        $query .= " FROM user , bill ";
        $query .= " WHERE user.id=bill.uid AND aid={$id} ";
        $result = mysqli_query($con,$query);
        if($result === FALSE) {
            die(mysql_error()); // TODO: better error handling
        }

        return $result;
    }

    function retrieve_bill_data(){
        include("config.php");
        $query = "SELECT curdate() as bdate , adddate( curdate(),INTERVAL 30 DAY ) as ddate , user.id AS uid , user.name AS uname FROM user";
        // echo $query;
        $result = mysqli_query($con,$query);
        return $result;
    }
 ?>
    
